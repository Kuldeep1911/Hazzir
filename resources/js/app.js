import './bootstrap';
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Floating buttons
    const floatingButtons = document.querySelector('.floating-buttons');
    if (floatingButtons) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                floatingButtons.classList.add('show');
            } else {
                floatingButtons.classList.remove('show');
            }
        });
    }
});
