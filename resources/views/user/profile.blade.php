@extends('layouts.app')

@section('content')

    {{-- Show errors --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show container mt-4" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show container mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="container-fuild my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary fw-5 text-center py-4">
                        <h3 class="fw-light mb-0">Complete Your Profile</h3>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-end">
                            <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">🚪 Logout</a>
                        </li>
                    </ul>

                    <div class="card-body p-4 p-md-5">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- Name & Email --}}
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Full Name</label>
                                    <p class="form-control-plaintext bg-light border rounded px-3 py-2">
                                        {{ Auth::user()->name }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email Address</label>
                                    <p class="form-control-plaintext bg-light border rounded px-3 py-2">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                            </div>

                            {{-- Phone & Age --}}
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Enter phone number" value="{{ old('phone') }}" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" name="age" id="age" class="form-control"
                                            placeholder="Enter age" value="{{ old('age') }}" required>
                                        <label for="age">Age</label>
                                    </div>
                                    @error('age') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="form-floating mb-4">
                                <textarea name="address" id="address" class="form-control" style="height: 100px" placeholder="Enter your address" required>{{ old('address') }}</textarea>
                                <label for="address">Address</label>
                                @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            {{-- Specialization --}}
                            <div class="form-floating mb-4">
                                <textarea name="specialization" id="specialization" class="form-control" style="height: 100px"
                                    placeholder="Tell us about your skills">{{ old('specialization') }}</textarea>
                                <label for="specialization">About Me / Skills</label>
                                @error('specialization') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            {{-- Gender, Languages, Experience --}}
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="">Select Gender</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" name="language" id="languages" class="form-control"
                                            placeholder="e.g. Hindi, English" value="{{ old('language') }}">
                                        <label for="languages">Languages</label>
                                    </div>
                                    @error('language') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="number" name="experience" id="experience" class="form-control"
                                            placeholder="Years of experience" value="{{ old('experience') }}" required>
                                        <label for="experience">Experience (years)</label>
                                    </div>
                                    @error('experience') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            {{-- Profile Image --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Upload Profile Image</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-lg">
                                    <i class="fas fa-check-circle me-2"></i> Complete Profile
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center py-3 bg-light">
                        <small>
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-decoration-none">Sign in</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
