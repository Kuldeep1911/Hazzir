@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 animate__animated animate__fadeInDown">
                <div class="card-header bg-success bg-gradient text-white text-center py-4 rounded-top-4">
                    <h2 class="h3 mb-1 fw-bold d-flex justify-content-center align-items-center gap-2">
                        Booking Confirmed ✅
                    </h2>
                    <p class="mb-0">Your booking has been successfully recorded.</p>
                </div>

                <div class="card-body p-4 p-md-5">
                    <div class="alert alert-warning text-center mb-4 border-0 shadow-sm animate__animated animate__pulse">
                        <h4 class="alert-heading fw-bold mb-0">Your OTP:</h4>
                        <p class="display-4 fw-bolder text-danger mt-2 mb-0">{{ $booking->otp }}</p>
                        <hr class="my-3">
                        <p class="mb-0 text-muted">Please provide this code to your service provider for verification.</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <div class="card h-100 bg-light border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-success fw-bold">Customer Details</h5>
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="mb-2"><strong>Name:</strong> {{ $user->name }}</li>
                                        <li class="mb-2"><strong>Phone:</strong> {{ $user->phone }}</li>
                                        <li><strong>Address:</strong> {{ $user->address }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card h-100 bg-light border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-success fw-bold">Booking Details</h5>
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="mb-2"><strong>Maid Type:</strong> {{ $booking->maid_type }}</li>
                                        <li class="mb-2"><strong>Confirmation ID:</strong> {{ $user->confirmation_id ?? 'NA' }}</li>
                                        <li><strong>Service Date:</strong> {{ $booking->service_date->format('d M Y, h:i A') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4 pt-3">
                        <a href="{{ route('bookings.create') }}"
                           class="btn btn-primary btn-lg rounded-pill shadow-sm px-5">
                            Book Another
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
