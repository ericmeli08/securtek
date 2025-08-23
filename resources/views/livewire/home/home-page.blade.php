<div class="flex flex-col">
    <!-- Hero Section -->
      <section class="hero-section relative w-screen overflow-hidden min-h-[70vh] lg:min-h-screen flex items-center">
        <!-- Background Carousel -->
        <div class="absolute inset-0 z-0">
            <div id="hero-carousel" class="relative w-full h-full">
                <div class="hero-image active absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://images.pexels.com/photos/1146603/pexels-photo-1146603.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
                </div>
                <div class="hero-image inactive absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://images.pexels.com/photos/4483762/pexels-photo-4483762.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
                </div>
                <div class="hero-image inactive absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://images.pexels.com/photos/5439434/pexels-photo-5439434.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
                </div>
            </div>
        </div>
        {{-- <img class="absolute   w-[200vw] min-h-[100%] object-cover  lg:min-h-[1000%]" src="{{ asset('images/slide-triangle-overlay.svg') }}"
            alt=""> --}}

        <div class="absolute top-0 left-0 w-full h-full ">
            <div class="w-full  h-full relative">

                <!-- Bas droite (bleu foncé en triangle) -->
                <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
                    class="absolute bottom-0 right-0 w-[10%] min-h-[25%] bg-primary-700/50 bg-opacity-70 ">
                </div>

                <!-- Haut centre-droit (bleu clair transparent en triangle) -->
                <div style="clip-path: polygon(0 0, 100% 0, 30% 100%, 0 100%);"
                    class="absolute hidden md:block top-0 bottom-0  w-[65%] min-h-[100%] bg-primary-700/50 bg-opacity-60 ">
                </div>
                <div style="clip-path: polygon(0 0, 100% 0, 5% 100%, 0 100%);"
                    class="absolute md:hidden top-0 bottom-0  w-[98%] min-h-[100%] bg-primary-700/50 bg-opacity-60 "></div>

                <div style="clip-path: polygon(0 100%, 0 0, 100% 100%);"
                    class="absolute bottom-0 hidden md:block left-0 w-[20%] min-h-[40%] bg-green-700/90 bg-opacity-70 ">
                </div>
                <div style="clip-path: polygon(0 100%, 0 0, 100% 100%);"
                    class="absolute bottom-0 md:hidden left-0 w-[60%] min-h-[50%] bg-green-700 bg-opacity-70 ">
                </div>
                <div style="clip-path: polygon(0 0, 100% 0, 1% 100%, 0 100%);"
                    class="absolute top-0 bottom-0 hidden md:block w-[45%] min-h-[100%] bg-primary-700/60 bg-opacity-60 ">
                </div>
                <div style="clip-path: polygon(0 0, 70% 0, 0 100%);"
                    class="absolute top-0 left-0 md:hidden w-[100%] min-h-[100%] bg-primary-700/60 bg-opacity-60 "></div>

            </div>
        </div>


        <!-- Chevron controls -->
        <button id="prev-btn"
            class="absolute hidden md:block left-4 top-1/2 transform w-10 h-10 -translate-y-1/2 text-white text-9xl z-20 hover:text-gray-300 transition">
            <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                class="svg-inline--fa fa-chevron-left fa-w-8 fa-7x">
                <path fill="currentColor"
                    d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"
                    class=""></path>
            </svg>
        </button>
        <button id="next-btn"
            class="absolute hidden md:block right-4 top-1/2 transform w-10 h-10 -translate-y-1/2 text-white text-9xl z-20 hover:text-gray-300 transition">
            <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                class="svg-inline--fa fa-chevron-right fa-w-8 fa-7x">
                <path fill="currentColor"
                    d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"
                    class=""></path>
            </svg>
        </button>

        <!-- Text Content Carousel -->
        <div class="relative z-10 -translate-y-1/2 max-w-full text-left px-4 sm:px-6 lg:px-[17%] text-white">
            <div class="max-w-2xl">
                <h1 id="hero-title"
                    class="text-4xl lg:text-7xl transition-all duration-500  font-bold mb-6 animate-fade-in">
                    Simplify life!
                </h1>
                <p id="hero-subtitle"
                    class="text-lg lg:text-3xl mb-8 transition-all duration-500  text-blue-100 animate-fade-in">
                    Security solutions & the latest technology
                </p>
                <button
                    class="btn border border-white rounded-[10px] text-md lg:text-lg px-8 lg:px-12 py-2 hover:bg-white hover:text-blue-600 transition-colors duration-500 cursor-pointer animate-fade-in">
                    LEARN MORE
                </button>
            </div>
        </div>

        <!-- Help Banner -->
          <div class="absolute bottom-0 left-0 right-0 bg-securtek-lime text-black py-3 lg:py-4 z-20">
            <div class=" max-w-7xl content-container section-padding">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-lg sm:text-xl text-white font-semibold text-center sm:text-left">
                        Need some help? We are happy to assist you and answer your questions.
                    </p>
                    <button class="btn-secondary flex items-center gap-3 text-lg sm:text-xl px-4 sm:px-6 py-2 sm:py-3 whitespace-nowrap">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/>
                        </svg>
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Interactive Security Section -->
    <section class="min-h-[60vh] lg:min-h-[80vh] bg-white overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
            <div class="flex flex-col justify-center items-center relative section-padding py-12 lg:py-16">
                <!-- Geometric overlays -->
                <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
                        class="absolute bottom-0 right-0 w-[25%] min-h-[35%] bg-primary-700/70 bg-opacity-70 ">
                    </div>
                    <div style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
                        class="absolute top-0 right-0 w-[25%] min-h-[35%] bg-green-700/70 bg-opacity-70 ">
                    </div>
                <div class="text-center max-w-lg">
                    <div class="text-primary-500 mb-6 flex justify-center">
                        <svg class="w-12 h-12 lg:w-14 lg:h-14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1Z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl text-primary-500 font-bold mb-4 lg:mb-6 leading-tight">
                        Interactive<br class="hidden sm:block">Security
                    </h2>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mb-4 lg:mb-6">
                        Be in control whether you're home or away
                    </h3>
                    <p class="text-gray-600 text-base sm:text-lg lg:text-xl mb-6 lg:mb-8 leading-relaxed">
                        Home is where the heart is. Protect your home - and what's inside -
                        with Interactive and Touchscreen security options.
                    </p>
                    <button class="btn-secondary">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="relative min-h-[300px] lg:min-h-full">
                <img src="https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                     alt="Interactive Security" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Control on the Go Section -->
    <section class="min-h-[60vh] lg:min-h-[80vh] bg-gray-50 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
            <div class="order-2 lg:order-1 relative min-h-[300px] lg:min-h-full">
                <img src="https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                     alt="Smart Control" 
                     class="w-full h-full object-cover">
            </div>
            <div class="order-1 lg:order-2 flex flex-col justify-center items-center relative section-padding py-12 lg:py-16">
                <!-- Geometric overlays -->
                <div style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
                        class="absolute top-0 right-0 w-[25%] min-h-[35%] bg-primary-700/70 bg-opacity-70 ">
                    </div>
                    <div style="clip-path: polygon(0 0, 0 100%, 100% 100%);"
                        class="absolute bottom-0 left-0 w-[25%] min-h-[35%] bg-green-700/70 bg-opacity-70 ">
                    </div>
                <div class="text-center max-w-lg">
                    <div class="text-primary-500 mb-6 flex justify-center">
                        <svg class="w-12 h-12 lg:w-14 lg:h-14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21C5,22.11 5.89,23 7,23H17C18.11,23 19,22.11 19,21V3C19,1.89 18.11,1 17,1Z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl text-primary-500 font-bold mb-4 lg:mb-6 leading-tight">
                        Control on the Go
                    </h2>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mb-4 lg:mb-6">
                        Lights, locks, and thermostats
                    </h3>
                    <p class="text-gray-600 text-base sm:text-lg lg:text-xl mb-6 lg:mb-8 leading-relaxed">
                        Home Automation keeps you protected and connected -
                        whenever you are, right from your smartphone!
                    </p>
                    <button class="btn-secondary">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Section -->
    <section class="min-h-[60vh] lg:min-h-[80vh] bg-white overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
            <div class="flex flex-col justify-center items-center relative section-padding py-12 lg:py-16">
                <!-- Geometric overlays -->
               <div style="clip-path: polygon(0 0, 30% 0, 100% 100%, 0 100%);"
                        class="absolute top-0 left-0 w-[20%] min-h-[20%] bg-primary-700/70 bg-opacity-70 ">
                    </div>
                    <div style="clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 100%);"
                        class="absolute bottom-0 right-0 w-[25%] min-h-[12%] bg-green-700/70 bg-opacity-70 ">
                    </div>
                <div class="text-center max-w-lg">
                    <div class="text-primary-700 mb-6 flex justify-center">
                        <svg class="w-12 h-12 lg:w-14 lg:h-14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-primary-700 mb-4 lg:mb-6">
                        Safety
                    </h2>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mb-4 lg:mb-6">
                        Your life. Protected.
                    </h3>
                    <p class="text-gray-600 text-base sm:text-lg lg:text-xl mb-6 lg:mb-8 leading-relaxed">
                        Professionally monitored fire protection monitors air for smoke violations at a price
                        you can budget. Installed fast-alarm devices provide advanced sensors for
                        smoke, fire, or carbon monoxide.
                    </p>
                    <button class="btn-secondary">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="relative min-h-[300px] lg:min-h-full">
                <img src="https://images.pexels.com/photos/7640744/pexels-photo-7640744.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                     alt="Fire Safety" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Medical Alert Section -->
    <section class="min-h-[60vh] lg:min-h-[80vh] bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-radial from-primary-100/40 to-white"></div>
        
        <!-- Geometric overlays -->
        <div style="clip-path: polygon(0 0, 100% 0%, 0 100%);"
                    class="absolute top-0 left-0 w-[20%] min-h-[70%] bg-primary-700/70 bg-opacity-70 ">
                </div>
                <div style="clip-path: polygon(0 0, 0 100% , 100% 100%);"
                    class="absolute bottom-0 left-0 w-[13%] min-h-[45%] bg-green-700/70 bg-opacity-70 ">
                </div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full section-padding py-12 lg:py-16">
            <div class="text-center max-w-2xl">
                <div class="text-primary-700 mb-6 flex justify-center">
                    <svg class="w-14 h-14 lg:w-16 lg:h-16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,2A2,2 0 0,1 14,4A2,2 0 0,1 12,6A2,2 0 0,1 10,4A2,2 0 0,1 12,2M21,9V7L15,1H9V3H15V9H21M7,10A2,2 0 0,1 9,12A2,2 0 0,1 7,14A2,2 0 0,1 5,12A2,2 0 0,1 7,10M19,15H21V13H19V11H17V13H15V15H17V17H19V15M12,13.5A0.5,0.5 0 0,1 12.5,14A0.5,0.5 0 0,1 12,14.5A0.5,0.5 0 0,1 11.5,14A0.5,0.5 0 0,1 12,13.5M6,13V20H4L4,15H2V13H6M10,13H14L14,20H10V13Z" />
                    </svg>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-primary-700 font-bold mb-4 lg:mb-6">Medical Alert</h2>
                <h3 class="text-xl sm:text-2xl text-gray-700 font-semibold mb-4 lg:mb-6">
                    The freedom to live independently
                </h3>
                <p class="text-gray-600 text-base sm:text-lg mb-6 lg:mb-8 leading-relaxed max-w-xl mx-auto">
                    Enjoy peace of mind knowing that you or your loved ones have help available whenever it's needed.
                </p>
                <button class="btn-secondary">
                    LEARN MORE
                </button>
            </div>
        </div>
    </section>

    <!-- 24/7 Monitoring Section -->
    <section class="min-h-[60vh] lg:min-h-[80vh] bg-white overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
            <div class="order-2 lg:order-1 relative min-h-[300px] lg:min-h-full">
                <img src="https://images.pexels.com/photos/4545946/pexels-photo-4545946.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                     alt="24/7 Monitoring" 
                     class="w-full h-full object-cover">
            </div>
            <div class="order-1 lg:order-2 relative flex flex-col justify-center items-center section-padding py-12 lg:py-16">
                <!-- Geometric overlays -->
               <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
                        class="absolute bottom-0 right-0 w-[25%] min-h-[35%] bg-green-700/70 bg-opacity-70 ">
                    </div>
                <div class="text-center max-w-lg">
                    <div class="text-primary-700 mb-6 flex justify-center">
                        <svg class="w-14 h-14 lg:w-16 lg:h-16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15V18A1,1 0 0,1 22,19H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V19H2A1,1 0 0,1 1,18V15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M7.5,13A0.5,0.5 0 0,0 7,13.5A0.5,0.5 0 0,0 7.5,14A0.5,0.5 0 0,0 8,13.5A0.5,0.5 0 0,0 7.5,13M16.5,13A0.5,0.5 0 0,0 16,13.5A0.5,0.5 0 0,0 16.5,14A0.5,0.5 0 0,0 17,13.5A0.5,0.5 0 0,0 16.5,13Z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-primary-700 mb-4 lg:mb-6 leading-tight">
                        24/7 Monitoring
                    </h2>
                    <h3 class="text-xl sm:text-2xl lg:text-4xl font-semibold text-gray-700 mb-4 lg:mb-6">
                        Live life knowing your home is protected
                    </h3>
                    <p class="text-gray-600 text-base sm:text-lg lg:text-xl mb-6 lg:mb-8 leading-relaxed">
                        All our bundles include a testing backup for your security panel
                        and round the clock professional monitoring, provided by a
                        company that knows the importance of prompt response times!
                    </p>
                    <button class="btn-secondary">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('.hero-image');
        const titles = [
            'Simplify life!',
            'Protect your world.',
            'Smart home, smart you.'
        ];
        const subtitles = [
            'Security solutions & the latest technology',
            'Your safety is our priority',
            'Innovation meets comfort'
        ];

        const titleEl = document.getElementById('hero-title');
        const subtitleEl = document.getElementById('hero-subtitle');

        let currentIndex = 0;
        let intervalId;

        function showImage(index) {
            images.forEach((img, i) => {
                img.classList.toggle('active', i === index);
                img.classList.toggle('inactive', i !== index);
            });

            titleEl.textContent = titles[index];
            subtitleEl.textContent = subtitles[index];
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        }

        // Auto-slide every 4 seconds
        function startCarousel() {
            intervalId = setInterval(showNextImage, 4000);
        }

        // Stop auto-slide when user interacts
        function stopCarousel() {
            clearInterval(intervalId);
        }

        // Arrows
        document.getElementById('next-btn').addEventListener('click', () => {
            stopCarousel();
            showNextImage(); 
            startCarousel();
        });

        document.getElementById('prev-btn').addEventListener('click', () => {
            stopCarousel();
            showPrevImage();
            startCarousel();
        });

        showImage(currentIndex);
        startCarousel();
    });
</script>