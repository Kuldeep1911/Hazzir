<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ApiController extends Controller
{
    // ================= AUTH =================
    public function registerApi(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0
        ]);

        return response()->json(['status' => true, 'user' => $user], 201);
    }

    public function loginApi(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['status' => false, 'message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json(['status' => true, 'user' => $user, 'token' => $token]);
    }

    public function logoutApi(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['status' => true, 'message' => 'Logged out']);
    }

    public function profileApi(Request $request)
    {
        return response()->json(['status' => true, 'user' => $request->user()]);
    }

    public function updateProfileApi(Request $request)
    {
        $user = $request->user();

        if ($request->has('name')) $user->name = $request->name;
        if ($request->has('password')) $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['status' => true, 'user' => $user]);
    }

    // ================= USER =================
    public function dashboardApi()
    {
        return response()->json(['message' => 'User Dashboard']);
    }

    public function getBookingsApi()
    {
        return response()->json(['message' => 'User bookings list']);
    }

    public function storeBookingApi()
    {
        return response()->json(['message' => 'Booking stored']);
    }

    public function successBookingApi($id)
    {
        return response()->json(['message' => "Booking $id success"]);
    }

    public function verifyBookingApi($id)
    {
        return response()->json(['message' => "Booking $id verified"]);
    }

    // ================= ADMIN =================
    public function adminDashboardApi()
    {
        return response()->json(['message' => 'Admin Dashboard']);
    }

    public function showUsersApi()
    {
        return response()->json(['message' => 'Users list']);
    }

    public function showBookingsApi()
    {
        return response()->json(['message' => 'Admin bookings list']);
    }

    public function storeServiceApi()
    {
        return response()->json(['message' => 'Service stored']);
    }

    public function destroyServiceApi($id)
    {
        return response()->json(['message' => "Service $id deleted"]);
    }

    public function allotMaidApi($id)
    {
        return response()->json(['message' => "Maid allotted for booking $id"]);
    }

    // ================= TEAM =================
    public function teamDashboardApi()
    {
        return response()->json(['message' => 'Team Dashboard']);
    }

    public function teamServicesApi()
    {
        return response()->json(['message' => 'Team services']);
    }

    public function teamTotalServicesApi()
    {
        return response()->json(['message' => 'Team total services']);
    }

    public function teamPerformanceApi()
    {
        return response()->json(['message' => 'Team performance']);
    }

    // ================= PUBLIC PAGES =================
    public function homeApi() { return response()->json(['page' => 'Home']); }
    public function aboutApi() { return response()->json(['page' => 'About Us']); }
    public function galleryApi() { return response()->json(['page' => 'Gallery']); }
    public function servicesApiPublic() { return response()->json(['page' => 'Services']); }
    public function offersApi() { return response()->json(['page' => 'Offers']); }
    public function howItWorksApi() { return response()->json(['page' => 'How It Works']); }
    public function contactApi() { return response()->json(['page' => 'Contact']); }
    public function featuresApi() { return response()->json(['page' => 'Features']); }
    public function privacyApi() { return response()->json(['page' => 'Privacy Policy']); }
    public function termsApi() { return response()->json(['page' => 'Terms & Conditions']); }
}
