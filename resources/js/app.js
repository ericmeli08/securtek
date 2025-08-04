// import './bootstrap';

// Auto-hide navigation dropdown on mobile when clicking outside
document.addEventListener('click', function(event) {
    const dropdowns = document.querySelectorAll('.dropdown-menu');
    dropdowns.forEach(dropdown => {
        if (!dropdown.closest('.dropdown').contains(event.target)) {
            dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
            dropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
        }
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
