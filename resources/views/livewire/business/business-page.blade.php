<div>
    <!-- Hero Section -->
    <section class="hero-section relative  flex items-center ">
        <div class="relative min-h-[70vh] w-full">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/business/hero.jpg') }}');">
            </div>
            <div style="clip-path: polygon(0 0, 50% 0, 25% 100%, 0 100%);"
                class="absolute bottom-0 right-0 w-[100%] min-h-[100%] bg-white  ">
            </div>
            <div style="clip-path: polygon(0 0,  100% 0 , 0 100%);"
                class="absolute top-0 left-0 w-[13%] min-h-[35%] bg-primary-700/70 bg-opacity-70 ">
            </div>
            <div style="clip-path: polygon(0 20%, 0% 100%, 20% 100%);"
                class="absolute bottom-0 right-0 w-[100%] min-h-[100%] bg-securtek-lime/90  ">
            </div>

            <div class="relative z-10 max-w-7xl h-full pt-32  px-4 sm:px-6 lg:px-32 text-white">
                <div class="">
                    <h1 class="text-5xl text-primary-800 lg:text-6xl font-bold mb-4">
                        Business
                    </h1>
                    <p class="text-xl lg:text-2xl font-semibold italic text-orange-500">
                        Any size, any field, every solution.
                    </p>
                </div>
            </div>

        </div>

        <!-- Dealer Finder -->
        <div class="absolute bottom-0 left-0 right-0 bg-securtek-lime text-black py-6 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <span class="font-semibold text-white text-xl">Find your nearest dealer:</span>
                    <select class="px-4 py-2 rounded-lg bg-blue-600 text-white font-semibold">
                        <option>Province</option>
                        <option>Alberta</option>
                        <option>British Columbia</option>
                        <option>Saskatchewan</option>
                    </select>
                    <select class="px-4 py-2 rounded-lg bg-blue-600 text-white font-semibold">
                        <option>City</option>
                        <option>Calgary</option>
                        <option>Edmonton</option>
                        <option>Vancouver</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Package Pricing -->

    <section class="py-10 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <p class="text-2xl font-semibold text-white mb-10">
                From the highest standard of business security with ULC certified monitoring, enterprise-grade
                access control, to inventory management with theft prevention and video surveillance, customize your
                business solutions with SecurTek.
            </p>
            <div class=" flex flex-col md:flex-row gap-10">
                <div
                    class="bg-white border border-orange-600 flex items-center py-4 gap-4 text-black rounded-lg px-8 max-w-xl mx-auto mb-8">
                    <div>
                        <h3 class="text-2xl font-bold text-orange-600 mb-4">Commercial Packages </h3>
                        <div class="text-6xl font-bold text-blue-600 mb-4">
                            $44<sup class="text-xl">.95/mo.*</sup>
                        </div>
                    </div>
                    <ul class="text-sm text-gray-500   space-y-3  mb-6">
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            24/7 professional monitoring
                        </li>
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Cancel/Verify Alarm
                        </li>
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Commercial Reports
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Event Notifications
                        </li>
                        <li class="flex text-left">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Includes 20 + additional features *Conditions apply
                        </li>
                    </ul>
                </div>
               <div class="space-y-3 mt-4">
                    <button class="w-full bg-accent-500 hover:bg-accent-600 btn-primary">CONTACT US</button>
                    <button
                        class="w-full bg-transparent text-accent-500 hover:bg-orange-500 border font-semibold border-orange-500 hover:text-white btn-primary">
                        SEE ALL BUNDLESS</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Camera Features -->
    <section class="py-7 bg-gray-100">
        <div class="max-full flex flex-col gap-7">
            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center flex relative col-span-1 overflow-hidden bg-[url('https://images.pexels.com/photos/2882509/pexels-photo-2882509.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop')] "
                    style="background-image: url('{{ asset('images/business/security.jpg') }}')">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Security</h3>
                        <p class="text-gray-800 text-xl font-semibold mb-6">Stop burglars in their tracks</p>
                        <p class="text-gray-800 text-sm mb-6">
                            With around the clock monitoring of your door, window and motion sensors you can rest easy
                            knowing your business is safe and secure. </p>
                    </div>

                </div>

                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-cover overflow-hidden bg-[url('https://images.pexels.com/photos/3992949/pexels-photo-3992949.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop')] "
                    style="background-image: url('{{ asset('images/business/monitoring.jpg') }}')">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Building Monitoring</h3>
                        <p class="text-gray-800 font-semibold mb-6">
                            Don’t get caught in hot water
                        </p>
                        <p class="text-gray-800 text-sm mb-6">
                            Quick detection of harmful elements is critical to protecting your business, your customers
                            and your employees. Let us be the first to know about smoke, fire, water or carbon monoxide
                            so we can send help and prevent damage.
                        </p>

                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-cover overflow-hidden bg-[url('https://images.pexels.com/photos/4386405/pexels-photo-4386405.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/business/worker-safety.jpg') }}')">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Worker Safety</h3>
                        <p class="text-gray-800 font-semibold text-xl mb-6">
                            Ensure your employees' safety
                        </p>
                        <p class="text-gray-800 text-sm mb-6">
                            Those working in industries such as: home healthcare, social work, utilities, security,
                            hospitality and more face many on-the-job risks such as: slips, trips and falls, verbal or
                            physical abuse, and workplace accidents. Our SoloProtect lone-worker safety solution reduces
                            risks to your employees’ personal safety as they carry out their normal job functions. </p>

                    </div>
                </div>
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center flex relative bg-cover bg-right col-span-1 overflow-hidden bg-[url('https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/business/access-control.jpg') }}')">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Access Control</h3>
                        <p class="text-gray-800 mb-6">
                            Keep your secrets safe with us </p>
                        <p class="text-gray-800 text-sm mb-6">
                            Make sure sensitive information about your business doesn’t end up in the wrong hands. With
                            Access Control, you can determine which employees and visitors have access to what areas of
                            your business or office building.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
