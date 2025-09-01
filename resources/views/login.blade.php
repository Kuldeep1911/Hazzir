@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-sm-5">
                    <!-- Logo Header -->
                    <div class="text-center mb-4">
                        <div class="bg-primary bg-gradient d-inline-flex p-3 rounded-3 mb-3">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="white"/>
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="#0d6efd"/>
                                <path d="M18 12C18 11.4477 17.5523 11 17 11H15.5C14.9477 11 14.5 11.4477 14.5 12C14.5 12.5523 14.9477 13 15.5 13H17C17.5523 13 18 12.5523 18 12Z" fill="#0d6efd"/>
                            </svg>
                        </div>
                        <h2 class="fw-bold mb-2">Haazir Login</h2>
                        <p class="text-muted">Sign in to your account to continue</p>
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                   placeholder="name@example.com" required autofocus>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="password" placeholder="••••••••" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot password?</a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            Sign In
                        </button>

                        {{-- Divider --}}
                        <div class="text-center my-3">
                            <span class="text-muted">OR</span>
                        </div>

                        {{-- Google Login --}}
                        <div class="d-grid mb-3">
                            <a href="{{ route('google.login') }}" class="btn btn-danger btn-lg w-100">
                                <i class="fab fa-google me-2"></i> Continue with Google
                            </a>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">Don't have an account?
                                <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Sign up</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    if (togglePassword && password) {
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye');
            this.querySelector('i').classList.toggle('bi-eye-slash');
        });
    }

    // Add loading state to form submission
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function() {
            const submitButton = this.querySelector('button[type="submit"]');
            const spinner = submitButton.querySelector('.spinner-border');
            submitButton.disabled = true;
            spinner.classList.remove('d-none');
        });
    }
});
</script>
@endsection
