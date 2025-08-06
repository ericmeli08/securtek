<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="text-5xl italic font-bold text-securtek-blue">
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
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('home-security') ? 'text-securtek-blue font-semibold' : '' }}">
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
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('home-security') ? 'text-securtek-blue font-semibold' : '' }}">
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
                            class="text-gray-700 hover:text-securtek-blue transition-colors duration-300 flex items-center {{ request()->routeIs('home-security') ? 'text-securtek-blue font-semibold' : '' }}">
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
                        class="text-gray-700 hover:text-securtek-blue transition-colors duration-300">Support</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 flex items-center hover:text-securtek-blue transition-colors duration-300">
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
                <button type="button" class="text-gray-700 hover:text-securtek-blue focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
