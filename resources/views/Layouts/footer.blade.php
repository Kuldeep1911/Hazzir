<!-- Footer -->
<footer class="bg-dark text-light pt-5">
    <div class="container">
        <div class="row gy-4">

            <!-- About -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-about">
                    <a href="#" class="footer-logo h4 d-block "><img src="{{asset('assets/img/haazir_logo.png')}}" alt="haazir logo" style="height: 70px"></a>
                    <p>Premium at-home services delivered by verified professionals. Quality guaranteed, hassle-free
                        experience.</p>
                    <div class="social-links d-flex gap-3 mt-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Offers</a></li>
                        <li><a href="#" class="text-light text-decoration-none">How It Works</a></li>
                        <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-links">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Salon & Beauty</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Home Cleaning</a></li>
                        <li><a href="#" class="text-light text-decoration-none">AC Repair</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Plumbing</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Electrician</a></li>
                    </ul>
                </div>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-newsletter">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-light text-decoration-none">FAQs</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Cancellation Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- Download App -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h5>Download Our App</h5>
                    <p>Book services faster and get exclusive app-only offers.</p>
                    <div class="app-download d-flex flex-column gap-2">
                        <a href="#"><img class="img-fluid" style="max-width:150px;"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png"
                                alt="Google Play"></a>
                        <a href="#"><img class="img-fluid" style="max-width:150px;"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/2560px-Download_on_the_App_Store_Badge.svg.png"
                                alt="App Store"></a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="footer-bottom text-center py-3 border-top mt-4">
            <p class="mb-0">&copy; 2023 Haazir. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Floating Buttons -->
<div class="floating-buttons position-fixed" style="bottom:20px; right:20px; z-index:999;">
    <a href="https://wa.me/+917523822832" class="btn btn-success rounded-circle mb-2">
        <i class="fab fa-whatsapp fs-4"></i>
    </a>
    <a href="tel:+919876543210" class="btn btn-primary rounded-circle">
        <i class="fas fa-phone fs-4"></i>
    </a>
</div>


<script>
    document.addEventListener("scroll", function () {
    const header = document.querySelector(".transparent-header");
    header.classList.toggle("scrolled", window.scrollY > 50);
});

document.addEventListener("DOMContentLoaded", function () {
    // Loader hide after page fully loads
window.addEventListener("load", function () {
    const loaderOverlay = document.getElementById("loader");
    if (loaderOverlay) {
        loaderOverlay.style.transition = "opacity 0.5s ease";
        loaderOverlay.style.opacity = "0";
        setTimeout(() => loaderOverlay.style.display = "none", 500);
    }
});

    // Intersection Observer for animations
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // animate only once
                }
            });
        },
        { threshold: 0.2 } // 20% visible triggers animation
    );

    const elements = document.querySelectorAll(
        ".hero-content, .hero-image, .service-card, .food-card, .promo-card, .popular-card, .step, .testimonial-card, .faq-item, .footer-container, .footer-about, .footer-links, .footer-newsletter, .footer-bottom, .service-icon, .hero h1, .section-title h2, .hero p, .section-title p"
    );

    elements.forEach((el) => observer.observe(el));

    // FAQ Accordion
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const isActive = question.classList.contains('active');

            // Close all answers first
            document.querySelectorAll('.faq-answer').forEach(ans => ans.classList.remove('show'));
            document.querySelectorAll('.faq-question').forEach(q => q.classList.remove('active'));

            // Open clicked one if it wasn't active
            if (!isActive) {
                question.classList.add('active');
                answer.classList.add('show');
            }
        });
    });

    // Mobile Menu Toggle
    const mobileMenu = document.querySelector('.mobile-menu');
    const nav = document.querySelector('nav ul');

    if (mobileMenu && nav) {
        mobileMenu.addEventListener('click', () => {
            nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
        });
    }
});
</script>

</body>

</html>
