<div>
    <!-- Hero Section -->
    <section class="hero-section relative  flex items-center ">
        <div class="relative min-h-[65vh] w-full">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.pexels.com/photos/5063532/pexels-photo-5063532.jpeg?auto=compress&cs=tinysrgb&w=1920&h=800&fit=crop');">
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
                        Search
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
                <button class="btn-secondary flex items-center gap-5 text-xl px-6 py-3">
                    <i class="fa-solid fa-phone"></i>
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <section class="bg-white w-full flex relative items-center justify-center min-h-[50vh] px-4">
        <div style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"
            class="absolute bottom-0 hidden md:block right-0 w-[8%] min-h-[30%] bg-securtek-lime/70 bg-opacity-70 ">
        </div>
        <div class="w-7xl text-center">

            <!-- Search Input -->
            <div class="w-full relative px-3 py-2 border border-blue-300 rounded-[6px] mb-4">
                <input type="text" placeholder="Rechercher..."
                    class=" w-full focus:outline-none focus:ring focus:ring-neutral-50" />
                    <button class="absolute top-1/2 right-2 transform -translate-y-1/2 p-2 text-white bg-blue-500 rounded-lg">
                       <svg class="w-5 h-5" aria-hidden="true" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-7x"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" ></path></svg>
                    </button>
                <div class=" w-full relative">
                </div>
            </div>

            <div class="w-full flex items-center justify-end" >
             
    
                <!-- Sort Options -->
                <div class="flex border-b pb-5 mb-5 items-center gap-2 border-gray-300 justify-end w-full ">
                    <span> Sort by:</span>
                    <select class="border border-gray-300 rounded-lg p-2">
                        <option>Relevance</option>
                        <option>Date</option>
                    </select>
                </div>

            </div>
            <div class="w-full flex items-center justify-start" >
                <!-- No Results Section -->
                <div class="bg-yellow-200 text-center p-4 rounded-lg mb-2">
                    <span class="font-semibold">No Results</span>
                </div>

            </div>

            <!-- Footer Section -->
            <div class="mt-4">
                <a href="#" class="text-blue-500 hover:underline">Search for "fdafdaf" on Google</a>
            </div>



        </div>
    </section>
</div>
