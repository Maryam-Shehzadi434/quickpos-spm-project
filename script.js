// SCRUM-20: Mobile Hamburger Menu Toggle
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const nav = document.querySelector('nav');

if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function() {
        nav.classList.toggle('active');
    });
}