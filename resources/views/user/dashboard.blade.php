@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="container my-5">
    <div class="card shadow border-0 rounded-lg">
        <div class="card-body p-5">
            <div class="card border-0 mb-4 p-4 shadow-sm bg-light">
                <div class="row align-items-center">
                    <div class="col-md-auto text-center mb-3 mb-md-0">
                        <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://via.placeholder.com/150' }}"
                             class="rounded-circle border border-white border-3" width="150" height="150" alt="Profile Image">
                    </div>
                    <div class="col-md">
                        <h2 class="mb-1 text-dark">👤 Welcome, {{ Auth::user()->name }}</h2>
                        <p class="text-muted lead">Your personal dashboard at a glance.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled row mb-0">
                            <li class="col-md-6 mb-2"><strong>Email:</strong> {{ $user->email }}</li>
                            <li class="col-md-6 mb-2"><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</li>
                            <li class="col-md-6 mb-2"><strong>Age:</strong> {{ $user->age ?? 'N/A' }}</li>
                            <li class="col-md-6 mb-2"><strong>Gender:</strong> {{ ucfirst($user->gender ?? 'N/A') }}</li>
                            <li class="col-md-6 mb-2"><strong>Experience:</strong> {{ $user->experience ?? 0 }} years</li>
                            <li class="col-md-6 mb-2"><strong>Specialization:</strong> {{ $user->specialization ?? 'N/A' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="text-dark">✍️ About Me</h5>
                    <p class="text-muted">{{ $user->description ?? 'No description provided.' }}</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-8">
                    <div class="card h-100 p-4 border-0 shadow-sm">
                        <h4 class="mb-3 text-dark">📊 Dashboard Stats</h4>
                        <div class="row text-center g-3">
                            <div class="col-md-4">
                                <div class="card p-3 bg-primary text-white border-0">
                                    <h5 class="mb-1">Bookings</h5>
                                    <p class="display-6 fw-bold mb-0">12</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 bg-success text-white border-0">
                                    <h5 class="mb-1">Notifications</h5>
                                    <p class="display-6 fw-bold mb-0">5</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 bg-info text-white border-0">
                                    <h5 class="mb-1">Messages</h5>
                                    <p class="display-6 fw-bold mb-0">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 p-4 border-0 shadow-sm">
                        <h4 class="mb-3 text-dark">🔗 Quick Actions</h4>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                <i class="fas fa-home me-3 text-primary"></i> Go to Home
                            </a>
                            <a href="{{ route('services') }}" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                <i class="fas fa-briefcase me-3 text-success"></i> View Services
                            </a>
                            <a href="{{ route('logout') }}" class="list-group-item list-group-item-action border-0 d-flex align-items-center text-danger">
                                <i class="fas fa-sign-out-alt me-3"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Remember to include Font Awesome in your project for the icons to render. --}}
{{-- e.g., <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> --}}
