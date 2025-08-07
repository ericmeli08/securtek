<style>

    /* Dropdown desktop styles */
   
</style>

<nav class="bg-white shadow-lg relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="text-3xl md:text-5xl italic font-bold text-securtek-blue">
                        SecurTek
                        <span class="text-xs text-center font-normal text-gray-900 block">SAFE. SECURE. 24/7</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex flex-col-reverse items-end gap-7">
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Home -->
                    <div class="relative dropdown">
                        <a href="{{ route('home') }}"
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('home*') ? 'text-securtek-blue font-semibold' : '' }}">
                            Home
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu w-[250px] bg-primary-500 rounded-[0px] border-t-4 border-t-primary-800 text-white">
                            <a href="{{ route('home-security') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Home Security
                            </a>
                            <a href="{{ route('cameras') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Cameras
                            </a>
                            <a href="{{ route('packages') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Packages
                            </a>
                            <a href="{{ route('warranty') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Warranty
                            </a>
                        </div>
                    </div>

                    <!-- Business -->
                    <div class="relative dropdown">
                        <a href="{{ route('business') }}"
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('business*') ? 'text-securtek-blue font-semibold' : '' }}">
                            Business
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu w-[250px] bg-primary-500 rounded-[0px] border-t-4 border-t-primary-800 text-white">
                            <a href="{{ route('certification') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                ULC Certification
                            </a>
                            <a href="{{ route('warranty') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Warranty
                            </a>
                        </div>
                    </div>

                    <!-- About -->
                    <div class="relative dropdown">
                        <a href="{{ route('about') }}"
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('about*') ? 'text-securtek-blue font-semibold' : '' }}">
                            About
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu w-[250px] bg-primary-500 rounded-[0px] border-t-4 border-t-primary-800 text-white">
                            <a href="{{ route('our-team') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Our Team
                            </a>
                            <a href="{{ route('partners') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Partners and Affiliations
                            </a>
                            <a href="{{ route('careers') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Careers
                            </a>
                            <a href="{{ route('support') }}"
                                class="block px-4 py-2 text-white hover:bg-primary-800 transition-colors">
                                Support
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('support') }}"
                        class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 {{ request()->routeIs('support') ? 'text-securtek-blue font-semibold' : '' }}">Support</a>
                    <a href="{{ route('contact') }}"
                        class="text-gray-700 flex items-center hover:text-securtek-blue transition-colors duration-300 {{ request()->routeIs('contact') ? 'text-securtek-blue font-semibold' : '' }}">
                        Contact
                    </a>
                    <a href="{{ route('search') }}" class="pl-5">
                        <svg class="w-6 h-6 text-securtek-blue font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </a>
                </div>

                <!-- User Actions -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('become-dealer') }}" class="text-blue-600 hover:text-blue-800 text-sm">Become a Dealer</a>
                    <span class="text-gray-400">|</span>
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">Login</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" id="mobile-menu-button" class="text-gray-700 hover:text-securtek-blue focus:outline-none transition-colors duration-200">
                    <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-white shadow-lg border-t border-gray-200 absolute top-full left-0 w-full z-50">
        <div class="px-4 py-2">
            <!-- User Actions Mobile -->
            <div class="flex items-center space-x-4 py-3 border-b border-gray-200 mb-2">
                <a href="{{ route('become-dealer') }}" class="text-blue-600 hover:text-blue-800 text-sm">
                    Become a Dealer
                </a>
                <span class="text-gray-400">|</span>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">
                    Login
                </a>
            </div>

            <!-- Navigation Items -->
            <div class="space-y-1">
                <!-- Home Mobile -->
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('home') }}"
                            class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200 flex-1 {{ request()->routeIs('home*') ? 'text-securtek-blue font-semibold' : '' }}">
                            Home
                        </a>
                        <button onclick="toggleMobileSubmenu('home-submenu', 'home-chevron')"
                                class="p-2 text-gray-700 hover:text-securtek-blue transition-colors duration-200">
                            <svg id="home-chevron" class="w-4 h-4 chevron-rotate" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="home-submenu" class="mobile-submenu">
                        <a href="{{ route('home-security') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Home Security
                        </a>
                        <a href="{{ route('cameras') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Cameras
                        </a>
                        <a href="{{ route('packages') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Packages
                        </a>
                        <a href="{{ route('warranty') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Warranty
                        </a>
                    </div>
                </div>

                <!-- Business Mobile -->
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('business') }}"
                            class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200 flex-1 {{ request()->routeIs('business*') ? 'text-securtek-blue font-semibold' : '' }}">
                            Business
                        </a>
                        <button onclick="toggleMobileSubmenu('business-submenu', 'business-chevron')"
                                class="p-2 text-gray-700 hover:text-securtek-blue transition-colors duration-200">
                            <svg id="business-chevron" class="w-4 h-4 chevron-rotate" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="business-submenu" class="mobile-submenu">
                        <a href="{{ route('certification') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            ULC Certification
                        </a>
                        <a href="{{ route('warranty') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Warranty
                        </a>
                    </div>
                </div>

                <!-- About Mobile -->
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('about') }}"
                            class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200 flex-1 {{ request()->routeIs('about*') ? 'text-securtek-blue font-semibold' : '' }}">
                            About
                        </a>
                        <button onclick="toggleMobileSubmenu('about-submenu', 'about-chevron')"
                                class="p-2 text-gray-700 hover:text-securtek-blue transition-colors duration-200">
                            <svg id="about-chevron" class="w-4 h-4 chevron-rotate" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="about-submenu" class="mobile-submenu">
                        <a href="{{ route('our-team') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Our Team
                        </a>
                        <a href="{{ route('partners') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Partners and Affiliations
                        </a>
                        <a href="{{ route('careers') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Careers
                        </a>
                        <a href="{{ route('support') }}" class="block py-2 pl-4 text-gray-600 hover:text-securtek-blue transition-colors duration-200">
                            Support
                        </a>
                    </div>
                </div>

                <!-- Support Mobile -->
                <a href="{{ route('support') }}"
                    class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200 {{ request()->routeIs('support') ? 'text-securtek-blue font-semibold' : '' }}">
                    Support
                </a>

                <!-- Contact Mobile -->
                <a href="{{ route('contact') }}"
                    class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-securtek-blue font-semibold' : '' }}">
                    Contact
                </a>

                <!-- Search Mobile -->
                <a href="{{ route('search') }}" class="block py-3 text-gray-700 hover:text-securtek-blue transition-colors duration-200">
                    <svg class="w-6 h-6 text-securtek-blue inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="ml-2">Search</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Overlay pour fermer le menu mobile -->
<div id="mobile-overlay" class="mobile-overlay md:hidden"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    let isMobileMenuOpen = false;

    // Toggle mobile menu
    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;

        if (isMobileMenuOpen) {
            mobileMenu.classList.add('open');
            mobileOverlay.classList.add('active');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.remove('open');
            mobileOverlay.classList.remove('active');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';

            // Fermer tous les sous-menus
            closeAllSubmenus();
        }
    }

    // Fermer tous les sous-menus
    function closeAllSubmenus() {
        const submenus = document.querySelectorAll('.mobile-submenu');
        const chevrons = document.querySelectorAll('.chevron-rotate');

        submenus.forEach(submenu => {
            submenu.classList.remove('open');
        });

        chevrons.forEach(chevron => {
            chevron.classList.remove('rotated');
        });
    }

    // Event listeners
    mobileMenuButton.addEventListener('click', toggleMobileMenu);
    mobileOverlay.addEventListener('click', toggleMobileMenu);

    // Fermer le menu si on clique sur un lien de navigation
    const mobileNavLinks = mobileMenu.querySelectorAll('a');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Ne pas fermer si c'est un lien de sous-menu et que le sous-menu n'est pas ouvert
            const parentSubmenu = this.closest('.mobile-submenu');
            if (!parentSubmenu || parentSubmenu.classList.contains('open')) {
                setTimeout(() => {
                    toggleMobileMenu();
                }, 150);
            }
        });
    });

    // Empêcher la propagation des clics dans le menu mobile
    mobileMenu.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

// Fonction globale pour toggle des sous-menus mobiles
function toggleMobileSubmenu(submenuId, chevronId) {
    const submenu = document.getElementById(submenuId);
    const chevron = document.getElementById(chevronId);

    if (submenu && chevron) {
        submenu.classList.toggle('open');
        chevron.classList.toggle('rotated');
    }
}
</script>
