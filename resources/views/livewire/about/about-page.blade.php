<div class="flex flex-col gap-0">
    <!-- Hero Section -->
    <section class="hero-section relative w-screen overflow-hidden min-h-[70vh] lg:min-h-screen flex items-center">
        <!-- Background Carousel -->
        <div class="absolute inset-0 z-0">
            <div id="hero-carousel" class="relative w-full h-full">
                <div class="hero-image active absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('images/about/hero.jpg') }}');">
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



        <!-- Text Content Carousel -->
        <div class="relative z-10 -translate-y-1/2 max-w-full text-left px-4 sm:px-6 lg:px-20 text-white">
            <div class="max-w-2xl">
                <h1 id="hero-title"
                    class="text-4xl lg:text-7xl transition-all duration-500  font-bold mb-6 animate-fade-in">
                    About SecurTek
                </h1>
                <p id="hero-subtitle" class="text-xl mb-8 transition-all duration-500  text-blue-100 animate-fade-in">
                    Did you know that having a professionally monitored security system can save you up to 20% on your
                    home insurance annually?
                </p>

            </div>
        </div>

        <!-- Help Banner -->
        <div class="absolute bottom-0 left-0 right-0 bg-securtek-lime text-black py-4 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between">
                <p class="text-xl text-white font-semibold mb-2 sm:mb-0">
                    Need some help? We are happy to assist you and answer your questions.
                </p>
                <button class="btn-secondary flex items-center gap-5 text-xl px-6 py-3">
                    <i class="fa-solid fa-phone"></i>
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <div>
        <!-- Contact Form Section -->
        <section class="bg-blue-600 relative text-white py-16">
            <div style="clip-path: polygon(0 0 ,0 100%, 100% 0);"
                class="absolute top-0 hidden md:block left-0 w-[20%] min-h-[40%] bg-securtek-lime/70 bg-opacity-70 ">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Contact Info -->
                    <div class="flex flex-col items-center space-y-6">
                        <div class="text-white text-center">
                            <i class="fa-regular fa-comment-dots text-2xl md:text-4xl lg:text-7xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl text-center font-bold mb-2">Contact Us</h2>
                            <p class="text-3xl text-center text-blue-200">1-877-777-7590</p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg p-8">
                        @if (session()->has('message'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="submitContact" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" wire:model="name" placeholder="Name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900">
                                    @error('name')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <input type="email" wire:model="email" placeholder="Email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900">
                                    @error('email')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <textarea wire:model="message" placeholder="Message" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900"></textarea>
                                @error('message')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" id="recaptcha"
                                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="recaptcha" class="text-sm text-gray-600">I'm not a robot</label>
                            </div>
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors">
                                SEND
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- 24/7 Monitoring Section -->
        <section class=" overflow-hidden bg-white">
            <div class="max-w-full mx-auto ">
                <div class="grid grid-cols-1 min-h-[80vh]  lg:grid-cols-2  ">
                    <div class="order-2 py-10 flex justify-center  items-center flex-col  relative text-center lg:order-1">

                        <div style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
                            class="absolute top-0 hidden md:block right-0 w-[20%] min-h-[40%] bg-green-700/70 bg-opacity-70 ">
                        </div>
                        <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
                            class="absolute bottom-0 hidden md:block right-0 w-[20%] min-h-[40%] bg-primary-700/70 bg-opacity-70 ">
                        </div>
                        <div class="text-blue-600 mx-auto mb-6">
                            <svg class="w-20 w-20 mx-auto" aria-hidden="true" data-prefix="fal" data-icon="eye"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                class="svg-inline--fa fa-eye fa-w-18 fa-7x">
                                <path fill="currentColor"
                                    d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-5xl font-bold text-blue-600 mb-6">24/7 Monitoring</h2>
                        <p class="text-gray-600 max-w-xl text-lg  mb-6">
                            SecurTek monitoring continues even in the event of a
                            network outage, with fully redundant monitoring networks
                            and backup power systems.
                        </p>
                        <p class="text-gray-600 max-w-xl text-lg  mb-6">
                            Our monitoring stations are Underwriters Laboratories
                            of Canada (ULC) listed. ULC listed monitoring
                            companies have met the highest national standards
                            for monitoring, response times, and false alarms.
                        </p>
                        <p class="text-gray-600 max-w-xl text-lg ">
                            Live your life, knowing your home is protected 24
                            hours a day, 7 days a week and 365 days a year.
                        </p>
                        <p class="text-blue-600 font-semibold mt-4">No exceptions.</p>
                    </div>
                    <div class="order-1 relative w-full h-full ">
                        <img src="{{ asset('images/about/24-7-monitoring.jpg') }}"
                            alt="24/7 Monitoring" class=" w-full object-cover h-full ">
                    </div>
                </div>
            </div>
        </section>

        <!-- Professional Installation Section -->
        <section class=" overflow-hidden bg-gray-50">
            <div class="max-w-full mx-auto ">
                <div class="grid min-h-[80vh]  grid-cols-1 lg:grid-cols-2">
                    <div>
                        <img src="{{asset('images/about/professional-installation.jpg')}}"
                            alt="Professional Installation" class=" w-full h-full  object-cover">
                    </div>
                    <div class="flex flex-col relative py-10 text-center justify-center items-center">
                        <div style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
                            class="absolute top-0 hidden md:block right-0 w-[20%] min-h-[40%] bg-primary-700/70 bg-opacity-70 ">
                        </div>
                        <div style="clip-path: polygon(0 0, 100% 0, 0 100%);"
                            class="absolute bottom-0 hidden md:block left-0 w-[20%] min-h-[25%] bg-green-700/70 bg-opacity-70 ">
                        </div>

                        <div class="text-blue-600 mx-auto mb-6">
                            <svg class="w-20 h-20" aria-hidden="true" data-prefix="far" data-icon="toolbox"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-toolbox fa-w-16 fa-7x">
                                <path fill="currentColor"
                                    d="M512 237.25c0-8.49-3.37-16.62-9.37-22.63l-45.26-45.26c-6-6-14.14-9.37-22.63-9.37H384V80c0-26.51-21.49-48-48-48H176c-26.51 0-48 21.49-48 48v80H77.26c-8.49 0-16.63 3.37-22.63 9.37L9.37 214.63c-6 6-9.37 14.14-9.37 22.63L.01 304 0 448c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32V237.25zM176 80h160v80H176V80zM48 243.88L83.88 208h344.23L464 243.88l.01 60.12H376v-16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v16H184v-16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v16H48.01L48 243.88zM464 432H48v-80h88v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16h144v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16h88v80z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-5xl font-bold text-blue-600 mb-6">Professional Installation</h2>
                        <p class="text-gray-600 max-w-xl mb-6">Never second guess your safety.</p>
                        <p class="text-gray-600 max-w-xl mb-6">
                            When it comes to security choose professionals with the
                            expertise and knowledge to do it right.
                        </p>
                        <p class="text-gray-600 max-w-xl">
                            Our nationwide network of authorized dealers will come
                            to work with you and provide the best options for your
                            home security needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Facts Section -->
        <section class=" relative py-10 min-h-[90vh] flex justify-center items-center bg-primary-100">
            <div style="clip-path: polygon(0 0%, 100% 0%, 0% 100%);"
                class="absolute z-10 top-0 left-0 w-[25%] min-h-[80%] bg-primary-700/70  ">
            </div>
            <div style="clip-path: polygon(0 0%, 0 100% , 100% 100%);"
                class="absolute z-10 bottom-0 left-0 w-[17%] min-h-[40%] bg-securtek-lime/70  ">
            </div>
            <div class="max-w-5xl relative mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <h2 class=" text-3xl lg:text-6xl font-bold text-blue-600 mb-16">Quick Facts</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Monitoring Centres -->
                    <div class="text-center">
                        <div class="text-blue-600 mb-6 lg:mb-10 flex justify-center">
                            <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6Z" />
                            </svg>
                        </div>
                        <div class=" text-2xl lg:text-6xl font-bold text-blue-600 mb-2">2</div>
                        <h3 class="text-3xl font-semibold text-blue-600 mb-2">Monitoring Centres</h3>
                        <p class="text-gray-600 text-xl">Located in Canada</p>
                        <p class="text-xl text-gray-500 mt-2">
                            ULC certified, Fire Diamond
                            Certification, 24/7 monitoring
                        </p>
                    </div>

                    <!-- Customers -->
                    <div class="text-center">
                        <div class="text-blue-600 mb-6 lg:mb-10 flex justify-center">
                            <i class="fa-solid fa-users  text-7xl"></i>
                        </div>
                        <div class=" text-2xl lg:text-6xl font-bold text-blue-600 mb-2">100K</div>
                        <h3 class="text-3xl font-semibold text-blue-600 mb-2">Customers</h3>
                        <p class="text-gray-600 text-xl">& Counting</p>
                        <p class="text-xl text-gray-500 mt-2">
                            We are proud to serve both
                            residential & commercial customers
                        </p>
                    </div>

                    <!-- Authorized Dealers -->
                    <div class="text-center">
                        <div class="text-blue-600 mb-6 lg:mb-10 flex justify-center">
                            <i class="fa-solid fa-shop text-7xl"></i>
                        </div>
                        <div class=" text-2xl lg:text-6xl font-bold text-blue-600 mb-2">66</div>
                        <h3 class="text-3xl font-semibold text-blue-600 mb-2">Authorized Dealers</h3>
                        <p class="text-gray-600 text-xl">& Counting</p>
                        <p class="text-xl text-gray-500 mt-2">
                            From coast to coast
                            across Canada
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Support Section -->
        <section class=" bg-gray-50">
            <div class="max-w-full ">
                <div class="grid grid-cols-1 min-h-[80vh]  lg:grid-cols-2  ">
                    <div class="flex justify-center  py-10 items-center flex-col relative text-center">
                        <div style="clip-path: polygon(0 0%, 40% 0% , 100% 100%, 0 100%);"
                            class="absolute z-10 top-0 left-0 w-[20%] min-h-[20%] bg-primary-700/70  ">
                        </div>
                        <div style="clip-path: polygon(0 0%, 100% 0% , 100% 100%, 60% 100%);"
                            class="absolute z-10 bottom-0 right-0 w-[20%] min-h-[10%] bg-securtek-lime/70  ">
                        </div>
                        <div class="text-blue-600 mx-auto mb-6">
                            <i class="fa-solid fa-headset text-7xl"></i>
                        </div>
                        <h2 class="text-5xl font-bold text-blue-600 mb-6">Support</h2>
                        <p class="text-gray-600 max-w-xl text-center mb-6">
                            We house our own technical support team that is armed with
                            advanced installation and technical support training acquired
                            via the Canadian Security Association (CANASA) to
                            troubleshoot remote service and on-site programming issues.
                        </p>
                        <p class="text-gray-600  max-w-xl text-center">
                            Our live local technical support is provided 24 hours a day 7
                            days a week.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('images/about/support.jpg') }}"
                            alt="Support" class=" w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class=" bg-white">
            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-2 ">
                    <div class="  lg:order-1">
                        <img src="{{asset('images/about/history.jpg')}}"
                            alt="History" class=" w-full h-full object-cover">
                    </div>
                    <div class="order-1 flex flex-col py-10 items-center justify-center relative lg:py-10">
                         <div style="clip-path: polygon( 100% 0% , 100% 100%, 0% 100%);"
                            class="absolute z-10 bottom-0 right-0 w-[25%] min-h-[50%] bg-securtek-lime/70  ">
                        </div>
                        <div class="text-blue-600 mb-6">
                            <i class="fa-solid fa-clock-rotate-left text-7xl"></i>
                        </div>
                        <h2 class="text-5xl font-bold text-blue-600 mb-6">History</h2>
                        <p class="text-gray-600 max-w-xl text-center mb-6">
                            Established in 1995, SecurTek is a leading provider of
                            monitored security systems in Canada. We currently serve
                            nearly 100,000 residential and commercial customers and
                            dozens of Authorized Dealers providing local sales and
                            service.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class=" min-h-[50vh] flex justify-center items-center relative bg-gray-100">
            <div style="clip-path: polygon(0 0%, 100% 0%, 0% 100%);"
                class="absolute z-10 top-0 left-0 w-[25%] min-h-[80%] bg-primary-700/70  ">
            </div>
            <div style="clip-path: polygon(0 0%, 0 100% , 100% 100%);"
                class="absolute z-10 bottom-0 left-0 w-[17%] min-h-[40%] bg-securtek-lime/70  ">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center items-center space-x-8 lg:space-x-16">
                    <!-- BBB Logo -->
                    <div class="mb-8 lg:mb-0">
                        <div class="bg-blue-800 text-white px-6 py-4 rounded-lg">
                            <div class="text-2xl font-bold">BBB</div>
                            <div class="text-xs">ACCREDITED BUSINESS</div>
                        </div>
                    </div>

                    <!-- BOLD Group Logo -->
                    <div class="mb-8 lg:mb-0">
                        <div class="text-4xl font-bold">
                            <span class="text-red-600">BOLD</span>
                            <div class="text-red-600 text-lg">GROUP</div>
                        </div>
                    </div>

                    <!-- Bosch Logo -->
                    <div class="mb-8 lg:mb-0">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">B</span>
                            </div>
                            <span class="text-2xl font-bold text-red-600">BOSCH</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Locations Section -->
        <section class="bg-blue-600 min-h-[30vh] flex items-center justify-center text-white py-16">
            <div class="max-w-7xl mx-auto px-4 flex gap-10 items-center sm:px-6 lg:px-8 text-center">
                <h2 class="lg:text-5xl text-xl font-bold ">Our Locations</h2>
                <button
                    class="bg-securtek-lime text-white text-xl font-semibold py-3 px-8 rounded-lg hover:bg-lime-400 transition-colors">
                    FIND A DEALER
                </button>
            </div>
        </section>
    </div>
</div>
