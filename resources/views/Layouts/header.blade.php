<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('assets/img/haazir_logo.png') }}"
                     alt="Haazir Logo"
                     style="height: 80px; width: 200px;" />
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('offers') }}">Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                </ul>

                <!-- Auth Buttons -->
                <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ route('login') }}" class="btn btn-sm me-2"
                       style="background-color: #FF6B00; color: #fff; border: none;">
                       Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-sm"
                       style="background-color: #003D99; color: #fff; border: none;">
                       Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

</header>
