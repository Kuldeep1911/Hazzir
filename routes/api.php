<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// ======================= PUBLIC ROUTES =========================
Route::get('/', [ApiController::class, 'homeApi']);
Route::get('/about', [ApiController::class, 'aboutApi']);
Route::get('/gallery', [ApiController::class, 'galleryApi']);
Route::get('/services', [ApiController::class, 'servicesApiPublic']);
Route::get('/offers', [ApiController::class, 'offersApi']);
Route::get('/how-it-works', [ApiController::class, 'howItWorksApi']);
Route::get('/contact', [ApiController::class, 'contactApi']);
Route::get('/features', [ApiController::class, 'featuresApi']);
Route::get('/privacy', [ApiController::class, 'privacyApi']);
Route::get('/terms', [ApiController::class, 'termsApi']);

// ======================= AUTH ROUTES =========================
Route::post('/register', [ApiController::class, 'registerApi']);
Route::post('/login', [ApiController::class, 'loginApi']);

// ======================= PROTECTED ROUTES =======================
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [ApiController::class, 'logoutApi']);
    Route::get('/profile', [ApiController::class, 'profileApi']);
    Route::post('/profile/update', [ApiController::class, 'updateProfileApi']);

    // User (role 0)
    Route::get('/user/dashboard', [ApiController::class, 'dashboardApi']);
    Route::get('/user/bookings', [ApiController::class, 'getBookingsApi']);
    Route::post('/bookings', [ApiController::class, 'createBooking']);
    Route::get('/bookings/success/{id}', [ApiController::class, 'successBookingApi']);
    Route::post('/bookings/verify/{id}', [ApiController::class, 'verifyBookingApi']);

    // Admin (role 1)
    Route::get('/admin/dashboard', [ApiController::class, 'adminDashboardApi']);
    Route::get('/admin/users', [ApiController::class, 'showUsersApi']);
    Route::get('/admin/bookings', [ApiController::class, 'showBookingsApi']);
    Route::post('/admin/services', [ApiController::class, 'storeServiceApi']);
    Route::delete('/admin/services/{id}', [ApiController::class, 'destroyServiceApi']);
    Route::post('/admin/bookings/{id}/allot-maid', [ApiController::class, 'allotMaidApi']);

    // Team (role 2)
    Route::get('/team/dashboard', [ApiController::class, 'teamDashboardApi']);
    Route::get('/team/services', [ApiController::class, 'teamServicesApi']);
    Route::get('/team/total-services', [ApiController::class, 'teamTotalServicesApi']);
    Route::get('/team/performance', [ApiController::class, 'teamPerformanceApi']);
});

Route::fallback(function () {
    return response()->json([
        'status' => false,
        'message' => 'API route not found'
    ], 404);
});

