<?php

// app/Http/Controllers/ServiceController.php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOption;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // List all services
    public function index()
    {
        $services = Service::with('options')->latest()->paginate(10);
        return view('Admin.services.index', compact('services'));
    }

    // Show create form
    public function create()
    {
        return view('Admin.services.create');
    }

    // Store service + options
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'nullable|string',
            'options' => 'required|array|min:1',
            'options.*' => 'required|string|max:200',
        ]);

        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        foreach ($request->options as $option) {
            ServiceOption::create([
                'service_id' => $service->id,
                'option_name' => $option,
            ]);
        }

        return redirect()->route('admin.services')->with('success', 'Service created successfully.');
    }

    // Delete service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }

    // Team Dashboard
    public function dashboard()
    {
        $user = Auth::user();


        // सिर्फ़ logged in team member की bookings
        $bookings = Booking::where('team_id', $user->id)->latest()->take(5)->get();

        return view('team.dashboard', compact('bookings', 'user'));
    }

    public function services()
    {
        $user = Auth::user();
        $services = Booking::where('team_id', $user->id)->get();



        return view('team.services', compact('services'));
    }

    public function totalServices()
    {
        $user = Auth::user();
        $total = Booking::where('team_id', $user->id)->count();

        return view('team.totalServices', compact('total'));
    }

    public function performance()
    {
        $user = Auth::user();
        $completed = Booking::where('team_id', $user->id)->where('status', 'completed')->count();
        $pending = Booking::where('team_id', $user->id)->where('status', 'pending')->count();

        return view('team.performance', compact('completed', 'pending'));
    }
}
