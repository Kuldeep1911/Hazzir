<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    // Show booking form
public function create()
{
    // अगर user login नहीं है
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login to book.');
    }

    $user = Auth::user();

    // सिर्फ़ role = 0 को allow करो
    if ($user->role != 0) {
        return redirect()->back()->with('error', 'You are not authorized to book service.');
    }

    // get services
    $services = DB::table('services')->get();

    return view('booking', compact('services'));
}

    // Handle booking + generate OTP
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to book.');
        }

        $data = $request->validate([
            'name'         => 'required|string|max:120',
            'phone'        => 'required|string|max:20',
            'address'      => 'required|string|max:500',
            'maid_type'    => 'required|string|max:60',
            'service_date' => 'required|date',
        ]);

        // Generate secure 4-digit OTP
        $otp = str_pad((string) random_int(0, 9999), 4, '0', STR_PAD_LEFT);

        // Save booking
        $booking = Booking::create(array_merge($data, [
            'user_id'      => Auth::id(),
            'otp'          => $otp,
            'otp_verified' => false,
            'status'       => 'confirmed',
        ]));

        // Log OTP (only Haazir team will use it)
        Log::info("Generated OTP for Booking #{$booking->id}, Phone {$booking->phone}: {$otp}");

        // Redirect to success page with booking ID
        return redirect()->route('bookings.success', $booking->id)
            ->with('success', 'Booking confirmed. Our team will verify OTP on arrival.');
    }

    // Success page
    public function success($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to view bookings.');
        }

        $booking = Booking::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

            $user = User::findOrFail($booking->user_id);
            $services = Booking::with('service')->get();


        return view('success', compact('booking','user'));
    }

    // Team side OTP verification
    public function verify(Request $request, $id)
    {
        $request->validate([
            'otp' => 'required|digits:4',
        ]);

        $booking = Booking::findOrFail($id);

        if ($booking->otp_verified) {
            return back()->with('info', 'OTP already verified for this booking.');
        }

        if ($booking->otp !== $request->otp) {
            return back()->withErrors(['otp' => 'Invalid OTP entered.']);
        }

        $booking->update([
            'otp_verified' => true,
            'otp' => null, // Clear OTP after verification
            'status' => 'completed',
        ]);

        return back()->with('success', 'OTP verified successfully. Service completed.');
    }

    // Admin: Show all bookings
    public function showBookings()
    {
        $bookings = Booking::with('user')->latest()->get();
        return view('Admin.bookings.index', compact('bookings'));
    }
}
