<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\BookingController;

// ======================= PUBLIC ROUTES =========================
Route::get('/', [HomeController::class, 'home'])->name('home');

// Auth Routes
Route::get('/register', [AuthController::class, 'loadRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'loadLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ======================= PROTECTED ROUTES =======================
Route::middleware(['auth'])->group(function () {

    // ---------- User Profile ----------
    Route::get('/user/profile', function () {
        return view('user.profile'); // profile form
    })->name('user.profile');

    // show profile
    Route::get('/profile/{id}', [HomeController::class, 'showProfile'])
        ->name('profile.show');   // ✅ FIXED NAME

    Route::post('/profile/update', [AuthController::class, 'updateProfile'])
        ->name('profile.update');   // ✅ FIXED NAME

    // ---------- User Dashboard ----------
    Route::get('/user/dashboard',[HomeController::class,'dashboard'])->name('user.dashboard');


    // ---------- Admin Dashboard ----------
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // ---------- Client Dashboard ----------
    Route::get('/client/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');
});

// ======================= EXTRA PAGES ============================
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/offers', [HomeController::class, 'offers'])->name('offers');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/how-it-works', [HomeController::class, 'howItWorks'])->name('how-it-works');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

// ======================= FALLBACK ===============================
Route::fallback(function () {
    return view('errors.404');
});

// Booking routes only for logged-in users
// Route::middleware(['auth'])->group(function () {
//     Route::get('/booking?id', [BookingController::class, 'create'])->name('bookings.create');
//     Route::post('/booking', [BookingController::class, 'store'])->name('bookings.store');
//     Route::get('/verify/{id}', [BookingController::class, 'showVerifyForm'])->name('bookings.verify.form');
//     Route::post('/verify/{id}', [BookingController::class, 'verify'])->name('bookings.verify');
//     // Route::get('/success', [BookingController::class, 'success'])->name('bookings.success');
//     // Route::get('/bookings/success/{id}', [BookingController::class, 'success'])->name('bookings.success');
//     // web.php
// Route::get('/bookings/success', [BookingController::class, 'success'])
//     ->name('bookings.success');


// });

Route::middleware('auth')->group(function () {
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/success/{id}', [BookingController::class, 'success'])->name('bookings.success');
    Route::post('/bookings/verify/{id}', [BookingController::class, 'verify'])->name('bookings.verify');
});
