<div>
    <!-- Hero Section -->
    <section class="hero-section relative  flex items-center ">
        <div class="relative min-h-[65vh] w-full">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/about/partners/hero.jpg') }}');">
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
                       Partners and <br/> Affiliations
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

    <section class="bg-white flex relative items-center justify-center min-h-[50vh] px-4">
        <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
            class="absolute bottom-0 hidden md:block right-0 w-[8%] min-h-[30%] bg-securtek-lime/70 bg-opacity-70 ">
        </div>
        <div class="max-w-4xl flex flex-wrap text-center">



        </div>
    </section>
</div>
