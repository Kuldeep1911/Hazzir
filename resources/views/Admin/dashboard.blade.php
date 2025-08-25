@extends('Admin.Layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4 border-0 rounded-3 bg-light">
        <h2 class="mb-4 text-danger">⚙️ Admin Panel</h2>
        <p class="text-muted">Manage users, monitor activity, and control the system from here.</p>

        <div class="row">
            <!-- User Management -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">👥 Manage Users</h5>
                    <p class="text-muted">View, edit and remove users.</p>
                    <a href="" class="btn btn-primary">Go</a>
                </div>
            </div>

            <!-- Reports -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">📊 Reports</h5>
                    <p class="text-muted">Check system reports and analytics.</p>
                    <a href="" class="btn btn-success">View</a>
                </div>
            </div>

            <!-- Settings -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">⚙️ Settings</h5>
                    <p class="text-muted">Update application settings.</p>
                    <a href="" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>

        <!-- Extra Cards -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">📩 Messages</h5>
                    <p class="text-muted">View and reply to user inquiries.</p>
                    <a href="" class="btn btn-info">Check</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">📰 Announcements</h5>
                    <p class="text-muted">Post updates and announcements.</p>
                    <a href="" class="btn btn-secondary">Post</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4 h-100">
                    <h5 class="text-dark">🔒 Security</h5>
                    <p class="text-muted">Manage roles and permissions.</p>
                    <a href="" class="btn btn-dark">Manage</a>
                </div>
            </div>
        </div>

        <!-- Logout -->
        <div class="text-end mt-3">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger">🚪 Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
