document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.techbbq-nav-menu');

    mobileToggle.addEventListener('click', function() {
        navMenu.classList.toggle('mobile-active');
    });
});
