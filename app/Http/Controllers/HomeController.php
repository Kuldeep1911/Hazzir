<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        // Middleware can be applied here if needed
    }

    // Dashboard for different roles
    public function dashboard()
    {
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }

    // Login Page
    public function login()
    {
        return view('login');
    }

    // Register Page
    public function register()
    {
        return view('register');
    }
    // Home Page
    public function home()
    {
        $testimonials = [
            (object)[
                'name' => 'Priya Sharma',
                'avatar' => 'https://randomuser.me/api/portraits/women/43.jpg',
                'rating' => 5,
                'message' => 'The beautician arrived right on time and did an amazing job with my haircut and facial. The convenience of getting salon services at home is unbeatable!',
            ],
            (object)[
                'name' => 'Rahul Patel',
                'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'rating' => 5,
                'message' => 'I booked an electrician to fix my wiring issues. The professional was knowledgeable, fixed the problem quickly, and cleaned up after himself. Highly recommended!',
            ],
            (object)[
                'name' => 'Ananya Gupta',
                'avatar' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'rating' => 4.5,
                'message' => 'The deep cleaning service transformed my apartment! They paid attention to every detail and used eco-friendly products. Will definitely book again.',
            ],
        ];

        $cheif = DB::table('users')
    ->where('role', 0)
    ->orderBy('created_at', 'desc')
    ->take(8)
    ->get();


        return view('home', compact('testimonials', 'cheif'));
    }

    //show profile
    public function showProfile($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if (!$user) {
            abort(404); // User not found
        }
        return view('profileshow', compact('user'));
    }

    // About Page
    public function about()
    {
        return view('about');
    }

    // Services Page
    public function services()
    {
        return view('services');
    }

    // Offers Page
    public function offers()
    {
        return view('offers');
    }

    // Booking Page
    public function booking()
    {
        return view('booking');
    }

    // How It Works Page
    public function howItWorks()
    {
        return view('how-it-works');
    }

    // Contact Page
    public function contact()
    {
        return view('contact');
    }

    // Features Page (optional)
    public function features()
    {
        return view('features');
    }

    // Privacy Policy Page (optional)
    public function privacy()
    {
        return view('privacy');
    }

    // Terms of Service Page (optional)
    public function terms()
    {
        return view('terms');
    }
}
