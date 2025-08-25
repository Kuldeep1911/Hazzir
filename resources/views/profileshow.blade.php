@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="card-title   mb-0">
                        <i class="bi bi-person-circle me-2"></i>User Profile
                    </h3>
                    <p class="mb-0 mt-2">View your profile details below</p>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Picture" class="rounded-circle" style="width: 120px; height: 120px;">
                    </div>
                    <h4 class="text-center mb-3">{{ $user->name }}</h4>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
                    <p><strong>Address:</strong> {{ $user->address ?? 'N/A' }}</p>
                    <p><strong>Role:</strong>
                        @if($user->role == 0)
                            User
                        @elseif($user->role == 2)
                            Team
                        @else
                            Admin
                        @endif
                    </p>
                    <p><strong>Member Since:</strong> {{ $user->created_at }}</p>
                    <p><strong>member ID:</strong> <span class="h3 text text-primary">{{$user->confirmation_id}}</span></p>

                    <div class="text-center mt-4">
                        <a href="{{ route('bookings.create') }}" class="btn btn-primary">
                            <i class="bi bi-pencil-square me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
