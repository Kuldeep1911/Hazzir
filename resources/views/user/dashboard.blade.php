@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="container my-5">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-5 bg-light">

                {{-- Profile Section --}}
                <div class="card border-0 mb-4 p-4 shadow-sm rounded-3 profile-card">
                    <div class="row align-items-center">
                        <div class="col-md-auto text-center mb-3 mb-md-0">
                            <img src="{{ $user->image->url ?? 'https://i.pravatar.cc/150?img=12' }}"
                                class="rounded-circle border border-4 border-white shadow profile-img" width="150"
                                height="150" alt="Profile Image">
                        </div>
                        <div class="col-md">
                            <h2 class="mb-1 fw-bold text-dark">👤 Welcome, {{ Auth::user()->name }}</h2>
                            <p class="text-muted lead">Your personal dashboard at a glance ✨</p>
                            <hr class="my-3">
                            <ul class="list-unstyled row mb-0">
                                <li class="col-md-6 mb-2"><strong>Email:</strong> {{ $user->email }}</li>
                                <li class="col-md-6 mb-2"><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</li>
                                <li class="col-md-6 mb-2"><strong>Age:</strong> {{ $user->age ?? 'N/A' }}</li>
                                <li class="col-md-6 mb-2"><strong>Gender:</strong> {{ ucfirst($user->gender ?? 'N/A') }}
                                </li>
                                <li class="col-md-6 mb-2"><strong>Experience:</strong> {{ $user->experience ?? 0 }} years
                                </li>
                                <li class="col-md-6 mb-2"><strong>Specialization:</strong>
                                    {{ $user->specialization ?? 'N/A' }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="fw-bold text-dark">✍️ About Me</h5>
                        <p class="text-muted">{{ $user->description ?? 'No description provided.' }}</p>
                    </div>
                </div>

                {{-- Dashboard Stats + Quick Actions --}}
                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="card h-100 p-4 border-0 shadow-sm rounded-3">
                            <h4 class="mb-3 fw-bold text-dark">📊 Dashboard Stats</h4>
                            <div class="row text-center g-3">
                                <div class="col-md-4">
                                    <a href="{{route('user.bookings.list')}}" data-bs-toggle="modal" data-bs-target="#bookingsModal" style="text-decoration: none;">
                                        <div class="stat-card bg-gradient-primary text-white p-4 rounded-4 shadow hover-lift"
                                            style="cursor: pointer;" id="viewBookingsBtn">
                                            <h6>Bookings</h6>
                                            <h2 class="fw-bold mb-0">
                                                {{ $bookings->isNotEmpty() ? $bookings[0]->count : 0 }}
                                            </h2>
                                        </div>
                                    </a>


                                </div>
                                <div class="col-md-4">
                                    <div class="stat-card bg-gradient-success text-white p-4 rounded-4 shadow hover-lift">
                                        <h6>Notifications</h6>
                                        <h2 class="fw-bold mb-0">5</h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-card bg-gradient-info text-white p-4 rounded-4 shadow hover-lift">
                                        <h6>Messages</h6>
                                        <h2 class="fw-bold mb-0">3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Quick Actions --}}
                    <div class="col-md-4">
                        <div class="card h-100 p-4 border-0 shadow-sm rounded-3">
                            <h4 class="mb-3 fw-bold text-dark">🔗 Quick Actions</h4>
                            <div class="list-group list-group-flush">
                                <a href="{{ route('home') }}"
                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center hover-scale">
                                    <i class="fas fa-home me-3 text-primary"></i> Go to Home
                                </a>
                                <a href="{{ route('services') }}"
                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center hover-scale">
                                    <i class="fas fa-briefcase me-3 text-success"></i> View Services
                                </a>
                                <a href="{{ route('logout') }}"
                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center text-danger hover-scale">
                                    <i class="fas fa-sign-out-alt me-3"></i> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- modal --}}
    <!-- Bookings Modal -->
<div class="modal fade" id="bookingsModal" tabindex="-1" aria-labelledby="bookingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="bookingsModalLabel">📅 Your Bookings</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Details</th>
                            <th>OTP</th>
                            <th>Maid Name</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id="bookingsTableBody">
                        @forelse ($booking as $index => $book)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="mb-1"><strong>Booking ID:</strong> {{ $book->id }}</div>
                                    <div class="mb-1"><strong>Service:</strong> {{ $book->service_id ?? 'N/A' }}</div>

                                </td>
                                <td>{{ $book->otp ?? 'N/A' }}</td>
                                <td>{{ $book->team_id->name ?? 'N/A' }}</td>
                                <td>
                                    @if ($book->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif ($book->status == 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @elseif ($book->status == 'completed')
                                        <span class="badge bg-primary">Completed</span>
                                    @elseif ($book->status == 'cancelled')
                                        <span class="badge bg-danger">Cancelled</span>
                                    @else
                                        <span class="badge bg-secondary">{{ ucfirst($book->status) }}</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($book->created_at)->format('M d, Y h:i A') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No bookings found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    {{-- Custom Styling --}}
    <style>
        /* Gradients */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #1cc88a, #13855c);
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #36b9cc, #258391);
        }

        /* Hover effects */
        .hover-scale {
            transition: transform 0.2s ease-in-out;
        }

        .hover-scale:hover {
            transform: translateX(5px);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }

        /* Profile Card */
        .profile-card {
            background: #f8f9fc;
            border-left: 5px solid #4e73df;
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            border-left: 5px solid #1cc88a;
            transform: translateY(-4px);
        }

        .profile-img {
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.08);
        }
    </style>
@section('scripts')



@endsection
@endsection
