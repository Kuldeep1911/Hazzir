@extends('layouts.app')

@section('title', 'Welcome to Our Site')

@section('content')
    <!-- Header -->


<!-- Hero Section -->
<section class="hero py-5">
    <div class="container  row hero-container d-flex flex-column flex-lg-row align-items-center justify-content-between">

        <!-- Hero Content -->
        <div class="hero-content text-center text-lg-start mb-4 mb-lg-0 col-lg-8 border-lg-end pe-lg-4">
            <h1 id="typewriter" class="fw-bold">
            <!-- Typewriter effect commented out. Using default text below. -->
            Premium At-Home Services On Demand
            </h1>

            {{--
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                const texts = [
                "Premium At-Home Services On Demand",
                "Trusted Professionals, Hassle-Free Experience",
                "Quality Service, Right at Your Doorstep",
                "Book Today, Relax Tomorrow"
                ];

                const el = document.getElementById("typewriter");
                let textIndex = 0;
                let charIndex = 0;
                let isDeleting = false;

                function type() {
                const currentText = texts[textIndex];

                if (isDeleting) {
                    el.textContent = currentText.substring(0, charIndex--);
                } else {
                    el.textContent = currentText.substring(0, charIndex++);
                }

                if (!isDeleting && charIndex === currentText.length) {
                    setTimeout(() => isDeleting = true, 1200);
                } else if (isDeleting && charIndex < 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                }

                setTimeout(type, isDeleting ? 50 : 90);
                }

                type();
            });
            </script>
            --}}

            <p class="mt-3 text-dark">
            Book certified professionals for all your home service needs. Quality guaranteed, hassle-free
            experience.
            </p>

            <div class="hero-buttons mt-4">
            <a href="#chefs" class="btn btn-primary me-2 mb-2">Book Now</a>
            <a href="#" class="btn  btn-secondary text-dark mb-2">See Offers</a>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="hero-image text-center text-lg-end col-lg-4 ps-lg-4 ">
            <div class="hero-bg"></div>
            <img src="{{ asset('assets/img/lady_home.png') }}" alt="Professional at work" class="img-fluid">
        </div>
    </div>
</section>




    <!-- Services Grid -->
    <?php
    $services = [
        [
            'icon' => 'fas fa-cut fa-2x',
            'title' => 'Salon & Beauty',
            'desc' => 'Haircuts, styling, facials, manicures & more at home',
        ],
        [
            'icon' => 'fas fa-broom fa-2x',
            'title' => 'Home Cleaning',
            'desc' => 'Deep cleaning, regular maid service, sofa & carpet cleaning',
        ],
        [
            'icon' => 'fas fa-tools fa-2x',
            'title' => 'AC Repair',
            'desc' => 'Installation, servicing, gas refill & repairs',
        ],
        [
            'icon' => 'fas fa-faucet fa-2x',
            'title' => 'Plumbing',
            'desc' => 'Leak repairs, pipe installation, bathroom fittings',
        ],
        [
            'icon' => 'fas fa-bolt fa-2x',
            'title' => 'Electrician',
            'desc' => 'Wiring, switchboards, appliance repairs & more',
        ],
        [
            'icon' => 'fas fa-paint-roller fa-2x',
            'title' => 'Painting',
            'desc' => 'Interior, exterior, wall texture & waterproofing',
        ],
    ];
    ?>

    <section class="section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Our Service Categories</h2>
                <p>Choose from a wide range of professional services for your home</p>
            </div>

            <div class="row g-4">
                <?php foreach($services as $service): ?>
                <div class="col-12 col-sm-6 col-lg-4 ">
                    <div class="service-card text-center p-4  rounded h-100 shadow shadow-lg">
                        <div class="service-icon mb-3">
                            <i class="<?= $service['icon'] ?>"></i>
                        </div>
                        <h3><?= $service['title'] ?></h3>
                        <p><?= $service['desc'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>




    <section class="section py-5 bg-light position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Image Section -->
                <div class="col-lg-6 position-relative">
                    <div class="image-overlay-wrapper position-relative">
                        <img src="{{ asset('assets/img/veg_sheif_boy.png') }}" alt="haazir lady"
                            class="img-fluid rounded-4 shadow-lg border border-3 border-white"
                            style="height: 650px; width: 90%; object-fit: fill;">


                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                    <div class="content-wrapper p-5  rounded-4  border border-2 border-light">

                        <h2 class="text-dark mb-4 fw-bold display-5">
                            Why Choose <span class="text-primary">Haazir</span>?
                        </h2>

                        <p class="text-muted fs-5 mb-4">
                            Experience the convenience of trusted professionals at your doorstep.
                            We ensure <span class="fw-semibold text-primary">quality, reliability, and peace of mind</span>
                            so you can focus on what truly matters.
                        </p>

                        <!-- Features List -->
                        <div class="features-list">
                            <div class="d-flex align-items-center mb-4 feature-item">
                                <div class="feature-icon bg-gradient text-primary rounded-circle d-flex align-items-center justify-content-center me-3 shadow"
                                    style="width: 50px; height: 50px; ">
                                    <i class="fas fa-user-shield fs-5"></i>
                                </div>
                                <span class="text-dark fs-5">Professional & Verified Experts</span>
                            </div>

                            <div class="d-flex align-items-center mb-4 feature-item">
                                <div class="feature-icon bg-gradient text-primary rounded-circle d-flex align-items-center justify-content-center me-3 shadow"
                                    style="width: 50px; height: 50px; background: linear-gradient(45deg, #007bff, #00c6ff);">
                                    <i class="fas fa-clock fs-5"></i>
                                </div>
                                <span class="text-dark fs-5">On-Time Service Guarantee</span>
                            </div>

                            <div class="d-flex align-items-center mb-4 feature-item">
                                <div class="feature-icon bg-gradient text-primary rounded-circle d-flex align-items-center justify-content-center me-3 shadow"
                                    style="width: 50px; height: 50px; background: linear-gradient(45deg, #007bff, #00c6ff);">
                                    <i class="fas fa-shield-alt fs-5"></i>
                                </div>
                                <span class="text-dark fs-5">Assured Quality & Reliability</span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <button class="btn btn-gradient btn-lg mt-4 px-5 py-3 rounded-pill fw-bold shadow-lg border-0">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">🔥 Special Offers</h2>
                <p class="text-muted">Grab our best deals before they’re gone!</p>
            </div>

            <!-- Offer Cards -->
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card h-100 shadow border-0 rounded-3">
                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2 px-3 py-2">30% OFF</span>
                            <img src="{{asset('assets/img/cleaner.png')}}"
                                class="card-img-top img-fluid rounded-top" alt="Deep cleaning service">
                        </div>
                        <div class="card-body text-center ">
                            <h5 class="card-title fw-bold">Complete Home Deep Cleaning</h5>
                            <p class="card-text mt-2 mb-3">
                                <span class="fw-bold text-success fs-5">₹1,499</span>
                                <span class="text-muted text-decoration-line-through ms-2">₹2,199</span>
                            </p>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary mt-auto">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                 <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 end-0 m-2 px-3 py-2">30% OFF</span>
                            </div>
                        <img src="{{asset('assets/img/plumber.png')}}"
                            class="card-img-top" alt="Plumbing service">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bathroom Pipe Leak Repair</h5>
                            <p class="card-text mt-2 mb-3">
                                <span class="fw-bold text-success fs-5">₹1,499</span>
                                <span class="text-muted text-decoration-line-through ms-2">₹2,199</span>
                            </p>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary w-100">Book Now</a>
                        </div>
                    </div>
                </div>


                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card h-100 shadow border-0 rounded-3">
                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-2">40% OFF</span>
                            <img src="{{asset('assets/img/salon_team.png')}}"
                                class="card-img-top img-fluid rounded-top" alt="Salon service">
                        </div>
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title fw-bold">Premium Salon Package</h5>
                            <p class="card-text mt-2 mb-3">
                                <span class="fw-bold text-success fs-5">₹999</span>
                                <span class="text-muted text-decoration-line-through ms-2">₹1,699</span>
                            </p>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary mt-auto">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Services Section -->
    <section class="py-5 reveal">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Popular Services</h2>
                <p class="text-muted">Most booked services by our customers</p>
            </div>

            <!-- Service Cards -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="Haircut service">
                        <div class="card-body text-center">
                            <h5 class="card-title">Men's Haircut & Beard Styling</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold text-success fs-5">₹299</span>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i> 4.8
                                </span>
                            </div>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0 rounded-3">
                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-2">25% OFF</span>
                            <img src="{{asset('assets/img/ac_service.png')}}"
                                class="card-img-top img-fluid rounded-top" alt="AC service"
                                style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title fw-bold">AC General Service Package</h5>
                             <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold text-success fs-5">₹599</span>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i> 4.9
                                </span>
                            </div>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary mt-auto">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="Electrical service">
                        <div class="card-body text-center">
                            <h5 class="card-title">Switchboard & Wiring Repair</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold text-success fs-5">₹599</span>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i> 4.9
                                </span>
                            </div>
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary w-100">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- How It Works -->
        <section class="section how-it-works py-5 bg-primary text-white reveal" id="how-it-works">
            <div class="container text-center">

                <!-- Section Title -->
                <div class="mb-5">
                    <h2 class="fw-bold display-5 text-light  ">How <span style="color: #ff7b00">Haazir</span> Works</h2>
                    <p class="text-white fs-5">Get your home services in just <span class="fw-semibold text-primary">3
                            simple
                            steps</span></p>
                </div>

                <!-- Steps Wrapper -->
                <div class="row g-4 justify-content-center">

                    <!-- Step 1 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-4 fw-bold mb-3"
                                    style="width:60px; height:60px;">
                                    1
                                </div>
                                <h3 class="fw-bold text-dark">Choose Your Service</h3>
                                <p class="text-muted mt-3">Browse our wide range of services and select what you need.
                                    Customize options if available.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-4 fw-bold mb-3"
                                    style="width:60px; height:60px;">
                                    2
                                </div>
                                <h3 class="fw-bold text-dark">Schedule Appointment</h3>
                                <p class="text-muted mt-3">Pick a date and time that works for you. We even offer same-day
                                    services for urgent needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-4 fw-bold mb-3"
                                    style="width:60px; height:60px;">
                                    3
                                </div>
                                <h3 class="fw-bold text-dark">Enjoy Professional Service</h3>
                                <p class="text-muted mt-3">Our certified professional arrives at your doorstep at the
                                    scheduled
                                    time to provide a seamless experience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="section testimonials reveal">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Customers Say</h2>
                    <p>Trusted by thousands of happy customers across the city</p>
                </div>

                <div class="testimonial-grid">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="{{ $testimonial->avatar }}" alt="{{ $testimonial->name }}">
                                </div>
                                <div class="testimonial-user">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <div class="testimonial-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($testimonial->rating))
                                                <i class="fas fa-star"></i>
                                            @elseif($i - $testimonial->rating < 1)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="testimonial-text">"{{ $testimonial->message }}"</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- FAQ -->
        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Find answers to common questions about our services</p>
                </div>

                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do I book a service?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can book a service through our website or mobile app. Simply select the service you need,
                                choose your preferred date and time, and make the payment. You'll receive a confirmation
                                with
                                the professional's details.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Are your professionals verified?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, all our professionals go through a rigorous verification process including background
                                checks, identity verification, and skill assessments. We only onboard qualified and
                                experienced
                                professionals.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What if I need to reschedule or cancel?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can reschedule or cancel your appointment up to 2 hours before the scheduled time without
                                any
                                charges through your account dashboard or by contacting our customer support.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What safety measures do you have in place?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>All our professionals follow strict safety protocols including wearing masks, using
                                sanitizers,
                                and maintaining social distancing. They undergo regular health check-ups and are fully
                                vaccinated.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How are the prices determined?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our prices are transparent and based on industry standards, service complexity, and time
                                required. You'll see the final price before booking with no hidden charges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
