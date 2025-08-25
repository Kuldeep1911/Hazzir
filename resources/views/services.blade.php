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
            <!-- Meal Preparation Service -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-utensils fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Daily Meal Preparation</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Fresh, home-cooked meals prepared daily in your kitchen.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Customized menu planning</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Grocery shopping assistance</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Breakfast, lunch & dinner prep</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Special diet accommodations</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>

            <!-- Weekly Cooking Service -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-blender fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Weekly Bulk Cooking</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Prepare a week's worth of meals in one efficient session.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Meal prepping & portioning</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Proper food storage guidance</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Freezer-friendly meals</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nutritionally balanced options</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>

            <!-- Cooking with Cleaning -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-concierge-bell fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Cooking + Cleaning Package</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Complete service that includes cooking and kitchen cleanup.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Meal preparation service</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Post-cooking kitchen cleaning</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Utensil & appliance sanitization</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Pantry organization</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>

            <!-- Special Occasion Cooking -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-birthday-cake fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Special Occasion Cooking</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Professional cooking for parties, gatherings, and celebrations.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Event menu planning</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Hors d'oeuvres & main courses</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Serving during event</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Post-event cleanup</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>

            <!-- Dietary Specific Cooking -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Diet-Specific Meals</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Specialized cooking for specific dietary needs and preferences.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Keto, Paleo & Vegan options</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Gluten-free & allergy-friendly</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Medically prescribed diets</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nutritionist consultation available</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>

            <!-- Kitchen Organization -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-boxes fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Kitchen Organization</h4>
                    </div>
                    <div class="card-body text-center py-2">
                        <p class="card-text text-muted">Optimize your kitchen space for efficient cooking and cleaning.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Pantry sorting & labeling</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Utensil & cookware organization</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Spice rack management</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Refrigerator optimization</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 text-center">
                        <a href="#" class="btn btn-primary rounded-pill px-4">Book Service</a>
                    </div>
                </div>
            </div>
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

