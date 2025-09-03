<?php

// app/Http/Controllers/ServiceController.php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOption;
use Illuminate\Http\Request;

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
}
