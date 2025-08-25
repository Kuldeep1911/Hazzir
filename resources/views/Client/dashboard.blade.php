@extends('layouts.app')

@section('title', 'Client Dashboard')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4 border-0 rounded-3">
        <h2 class="mb-4 text-success">💼 Client Dashboard</h2>
        <p class="text-muted">Track your projects, requests, and communicate with the team.</p>

        <div class="row">
            <!-- Active Projects -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4">
                    <h5>📁 Active Projects</h5>
                    <p class="text-muted">Monitor your ongoing projects.</p>
                    <a href="#" class="btn btn-success">View</a>
                </div>
            </div>

            <!-- Support -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4">
                    <h5>📞 Support</h5>
                    <p class="text-muted">Get help from our team anytime.</p>
                    <a href="#" class="btn btn-info">Contact</a>
                </div>
            </div>

            <!-- Invoices -->
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-4">
                    <h5>💳 Invoices</h5>
                    <p class="text-muted">View and download your invoices.</p>
                    <a href="#" class="btn btn-dark">Check</a>
                </div>
            </div>
        </div>

        <div class="text-end">
            <a href="{{ route('logout') }}" class="btn btn-danger">🚪 Logout</a>
        </div>
    </div>
</div>
@endsection
