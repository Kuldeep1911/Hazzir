<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;

// ======================= PUBLIC ROUTES =========================
Route::get('/', [HomeController::class, 'home'])->name('home');

// Auth Routes
Route::get('/register', [AuthController::class, 'loadRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'loadLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post')->middleware('throttle:5,1');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Google OAuth Routes
Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// ======================= PROTECTED ROUTES =======================
Route::middleware(['auth'])->group(function () {

    // ---------- User Profile ----------
    Route::get('/user/profile', function () {
        return view('user.profile'); // profile form
    })->name('user.profile');

    Route::get('/profile/{id}', [HomeController::class, 'showProfile'])->name('profile.show');
    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

    // ---------- User Dashboard (role 0 only) ----------
    Route::middleware('checkRole:0')->group(function () {
        Route::get('/user/dashboard', [HomeController::class, 'dashboard'])->name('user.dashboard');
    });

    // ---------- Admin Dashboard (role 1 only) ----------
    Route::middleware('checkRole:1')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/Admin/Users', [AdminController::class, 'showUsers'])->name('admin.users');
        Route::get('/admin/showbooking', [BookingController::class, 'showBookings'])->name('admin.showbooking');
        // Route::get('/admin/bookings', [BookingController::class, 'search'])->name('admin.showbooking');

        Route::prefix('admin')->group(function () {
            Route::resource('users', App\Http\Controllers\Admin\UserController::class);
            Route::get('services', [ServiceController::class, 'index'])->name('admin.services');
            Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
            Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
            Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');
            Route::post('/bookings/{id}/allot-maid', [BookingController::class, 'allotMaid'])->name('bookings.allotMaid');
        });
    });

    // ---------- Team Dashboard (role 2 only) ----------
    Route::middleware('checkRole:2')->group(function () {
        Route::get('/team/dashboard', [ServiceController::class, 'dashboard'])->name('team.dashboard');
        Route::get('/team/services', [ServiceController::class, 'services'])->name('team.services');
        Route::get('/team/total-services', [ServiceController::class, 'totalServices'])->name('team.totalServices');
        Route::get('/team/performance', [ServiceController::class, 'performance'])->name('team.performance');
    });
});

// ======================= EXTRA PAGES ============================
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
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

// ======================= BOOKING ROUTES =========================
Route::middleware(['auth', 'checkRole:0'])->group(function () {
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/success/{id}', [BookingController::class, 'success'])->name('bookings.success');
    Route::post('/bookings/verify/{id}', [BookingController::class, 'verify'])->name('bookings.verify');
});
