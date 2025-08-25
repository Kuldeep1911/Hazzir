@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center font-weight-light my-4">Create Haazir Account</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- Select Role --}}
                            <div class="form-floating mb-3">
                                <select class="form-select" id="role" name="role" required>
                                    <option value="">Select Role</option>
                                    <option value="0" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="2" {{ old('role') == 'team' ? 'selected' : '' }}>Team</option>
                                </select>
                                <label for="role">Register As</label>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="name"
                                    placeholder="Enter your full name" required autofocus />
                                <label for="name">Full Name</label>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="email"
                                    placeholder="name@example.com" required />
                                <label for="email">Email address</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="password" type="password" name="password"
                                            placeholder="Create a password" required />
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="password_confirmation" type="password"
                                            name="password_confirmation" placeholder="Confirm password" required />
                                        <label for="password_confirmation">Confirm Password</label>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block py-3">
                                    <i class="fas fa-user-plus me-2"></i> Create Account
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                Already have an account? Sign in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
@endsection
