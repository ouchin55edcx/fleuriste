// Navbar scroll effect
// Navbar scroll effect
window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    var navLinks = navbar.querySelectorAll('.nav-link');
    var menuToggle = document.getElementById('menuToggle');

    if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-md');
        navbar.classList.remove('bg-transparent');
        navLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-gray-600');
        });
        menuToggle.classList.remove('text-white');
        menuToggle.classList.add('text-gray-600');
    } else {
        navbar.classList.remove('bg-white', 'shadow-md');
        navbar.classList.add('bg-transparent');
        navLinks.forEach(link => {
            link.classList.remove('text-gray-600');
            link.classList.add('text-white');
        });
        menuToggle.classList.remove('text-gray-600');
        menuToggle.classList.add('text-white');
    }
});

// Mobile menu toggle
document.getElementById('menuToggle').addEventListener('click', function () {
    var mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when clicking outside
document.addEventListener('click', function (event) {
    var mobileMenu = document.getElementById('mobileMenu');
    var menuToggle = document.getElementById('menuToggle');
    if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
        mobileMenu.classList.add('hidden');
    }
});

