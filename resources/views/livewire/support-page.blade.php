<div>
    <!-- Hero Section -->
    <section class="hero-section relative  flex items-center ">
        <div class="relative min-h-[65vh] w-full">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/support/hero.jpg') }}');">
            </div>
            <div style="clip-path: polygon(0 0, 50% 0, 25% 100%, 0 100%);"
                class="absolute bottom-0 right-0 w-[100%] min-h-[100%] bg-white  ">
            </div>
            <div style="clip-path: polygon(0 0,  100% 0 , 0 100%);"
                class="absolute top-0 left-0 w-[13%] min-h-[30%] bg-primary-700/70 bg-opacity-70 ">
            </div>
            <div style="clip-path: polygon(0 15%, 0% 100%, 20% 100%);"
                class="absolute bottom-0 right-0 w-[100%] min-h-[100%] bg-securtek-lime/90  ">
            </div>

            <div class="relative z-10 max-w-7xl h-full pt-20  px-4 sm:px-6 lg:px-32 text-white">
                <div class="">
                    <h1 class="text-5xl text-primary-800 lg:text-6xl font-bold mb-4">
                        Support
                    </h1>
                </div>
            </div>

        </div>

        <!-- Dealer Finder -->
        <div class="absolute bottom-0 left-0 right-0 bg-securtek-lime text-black py-4 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between">
                <p class="text-xl text-white font-semibold mb-2 sm:mb-0">
                    Need some help? We are happy to assist you and answer your questions.
                </p>
                <a href="{{ route('contact') }}" class="btn-secondary flex items-center gap-5 text-xl px-6 py-3">
                    <i class="fa-solid fa-phone"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <section class=" bg-gray-100 flex relative  justify-center  ">
        <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
            class="absolute bottom-0 hidden md:block right-0 w-[8%] min-h-[30%] bg-securtek-lime/70 bg-opacity-70 ">
        </div>

        <div class="bg-gray-100 p-8">

            <div class="max-w-5xl mx-auto  p-6">
                <p class="text-gray-700 text-center text-xl mb-4">
                    SecurTek houses its own technical support team which is available to customers 24 hours a day, 7
                    days a week. This team has extensive installation and technical support training including remote
                    panel access programming via the Canadian Security Association (CANASA) to provide first level
                    support and troubleshooting for all residential and business owner needs.
                </p>

                <h2 class="text-5xl font-bold text-center text-gray-800 mb-4">Additional support</h2>

                <ul class="list-disc text-2xl list-inside mb-4">
                    <li>
                        <span class="text-gray-800">SecurTek Customer Guide - </span>
                        <a href="#" class="text-green-500 hover:text-green-700">Click Here</a>
                    </li>
                    <li>
                        <span class="text-gray-800">Alarm.com Support - </span>
                        <a href="#" class="text-green-500 hover:text-green-700">Click Here</a>
                    </li>
                    <li>
                        <span class="text-gray-800">How to Set Up and Use Alarm.com - </span>
                        <a href="#" class="text-green-500 hover:text-green-700">YouTube Link</a>
                    </li>
                </ul>
            </div>

        </div>


    </section>
</div>
