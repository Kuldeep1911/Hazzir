@extends('layouts.app')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Maid Chef Services</h2>
                <p class="lead text-muted">Professional cooking and cleaning services for your home</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-hover">
                        <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                            <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class=" fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title fw-bold text-dark">{{ $service->name }}</h4>
                        </div>
                        <div class="card-body text-center py-2">
                            <p class="card-text text-muted">{{ $service->description }}</p>
                            <ul class="list-unstyled text-start mb-4">
                                @foreach($service->options as $option)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>{{ $option->option_name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4 text-center">
                            <a href="{{ route('bookings.create', $service->id) }}" class="btn btn-primary rounded-pill px-4">Book Service</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold">View All Maid Chef Services</a>
            </div>
        </div>
    </div>
</section>

<style>
.shadow-hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.09);
    transition: all 0.3s ease;
}
.shadow-hover:hover {
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}
.icon-wrapper {
    transition: all 0.3s ease;
}
.card:hover .icon-wrapper {
    background: linear-gradient(45deg, #4e54c8, #8f94fb) !important;
}
.card:hover .icon-wrapper i {
    color: white !important;
}
</style>
@endsection
