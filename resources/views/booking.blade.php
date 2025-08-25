@extends('layouts.app')

@section('content')
    <div class="container-fuild py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h3 class="card-title mb-0">
                            <i class="bi bi-calendar-check me-2"></i>Book Your Service
                        </h3>
                        <p class="mb-0 mt-2">Fill in your details to schedule your booking</p>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Enter your full name" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-telephone"></i>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}" placeholder="Enter your phone number" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label fw-semibold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your complete address"
                                        required>{{ old('address') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="maid_type" class="form-label fw-semibold">Maid Type</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-people"></i>
                                    </span>
                                    <select class="form-select" id="maid_type" name="maid_type" required>
                                        <option value="">Select Maid Type</option>

                                        <option value="Daily Cleaner"
                                            {{ old('maid_type') == 'Daily Cleaner' ? 'selected' : '' }}>
                                            Daily Cleaner
                                        </option>

                                        <!-- Cooking Options -->
                                        <optgroup label="Cooking">
                                            <option value="Cook - On Requirement"
                                                {{ old('maid_type') == 'Cook - On Requirement' ? 'selected' : '' }}>
                                                Cook (On Requirement)
                                            </option>
                                            <option value="Cook - Monthly Subscription"
                                                {{ old('maid_type') == 'Cook - Monthly Subscription' ? 'selected' : '' }}>
                                                Cook (Monthly Subscription)
                                            </option>
                                        </optgroup>

                                        <option value="Full-time" {{ old('maid_type') == 'Full-time' ? 'selected' : '' }}>
                                            Full-time
                                        </option>

                                        <option value="Baby Care" {{ old('maid_type') == 'Baby Care' ? 'selected' : '' }}>
                                            Baby Care
                                        </option>

                                        <!-- Dishwashing Options -->
                                        <optgroup label="Dishwashing">
                                            <option value="Dishwashing - On Requirement"
                                                {{ old('maid_type') == 'Dishwashing - On Requirement' ? 'selected' : '' }}>
                                                Dishwashing (On Requirement)
                                            </option>
                                            <option value="Dishwashing - Monthly Subscription"
                                                {{ old('maid_type') == 'Dishwashing - Monthly Subscription' ? 'selected' : '' }}>
                                                Dishwashing (Monthly Subscription)
                                            </option>
                                        </optgroup>
                                    </select>

                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="service_date" class="form-label fw-semibold">Service Date & Time</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-clock"></i>
                                    </span>
                                    <input type="datetime-local" class="form-control" id="service_date" name="service_date"
                                        value="{{ old('service_date') }}" required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send me-2"></i>Submit & Send OTP
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
@endsection
