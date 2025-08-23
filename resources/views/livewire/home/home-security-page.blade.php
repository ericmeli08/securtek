<div>
    <!-- Hero Section -->
    <section class="hero-section relative  flex items-center ">
        <div class="relative min-h-[70vh] w-full">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/home/home-security/hero.jpg') }}');">
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
                        Home Security
                    </h1>
                    <p class="text-xl lg:text-2xl font-semibold italic text-orange-500">
                        Your home. Your control.
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

    <!-- Where do we come in? -->
    <section class="py-10 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-8">Where do we come in?</h2>
            <p class="text-xl mb-12 max-w-4xl italic mx-auto">
                If smartphone clients are all that's protecting your home, what happens when you're busy or asleep?
                Professionally monitored smart home security is the better way to go.
            </p>
            <div class=" flex flex-col md:flex-row gap-10">

                <div
                    class="bg-white border border-orange-600 flex items-center py-4 gap-4 text-black rounded-lg px-8 max-w-xl mx-auto mb-8">
                    <div>
                        <h3 class="text-2xl font-bold text-orange-600 mb-4">Home Security Package</h3>
                        <div class="text-6xl font-bold text-blue-600 mb-4">
                            $43<sup class="text-xl">.95/mo.*</sup>
                        </div>
                    </div>
                    <ul class="text-sm text-gray-500   space-y-5  mb-6">
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            24/7 professional monitoring
                        </li>
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Arm/Disarm from your smartphone
                        </li>
                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Touchscreen security panel
                        </li>

                        <li class="flex items-center">
                            <span class="text-gray-500 mr-2 "><i class="fa-solid fa-check"></i></span>
                            Automation control for system connected devices*
                        </li>
                    </ul>
                </div>
                <div class="space-y-3 mt-4">
                    <button class="w-full bg-accent-500 hover:bg-accent-600 hover:scale-105 btn-primary">CONTACT US</button>
                    <button class="w-full bg-accent-500 hover:bg-accent-600 hover:scale-105 btn-primary">SEE PACKAGES</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-7 bg-gray-100">
        <div class="max-full flex flex-col gap-7">

            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center flex relative col-span-1 bg-cover overflow-hidden bg-[url('{{ asset('images/home/home-security/arm-disarm.jpg') }}')] "
                    style="background-image: url('{{ asset('images/home/home-security/arm-disarm.jpg') }}');">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Arm/Disarm</h3>
                        <p class="text-gray-800 mb-6">
                            Skip the annoying beeping of your alarm being set while you struggle to get your shoes on
                            and race out the door. Arm and disarm your security system whenever it is convenient for you
                            - from anywhere!
                        </p>
                    </div>

                </div>

                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-cover overflow-hidden bg-[url('{{ asset('images/home/home-security/smart-thermostat.jpg') }}')] "
                    style="background-image: url('{{ asset('images/home/home-security/smart-thermostat.jpg') }}');">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Smart Thermostat</h3>
                        <p class="text-gray-800 mb-6">
                            No need to get up if the house feels chilly in the middle of the night. Crank up the
                            heat from the comfort of your bed on your smartphone!
                        </p>
                        <p class="text-gray-800 mb-6">
                            Save money by scheduling your smart thermostat to turn down the heat when you set your alarm
                            panel to 'away' and to warm back up before you get home from work
                        </p>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-bottom bg-cover overflow-hidden bg-[url('{{ asset('images/home/home-security/smart-power-outlet.webp') }}')] "
                    style="background-image: url('{{ asset('images/home/home-security/smart-power-outlet.jpg') }}');">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Smart Power Outlets</h3>
                        <p class="text-gray-800 mb-6">
                            “…Did I remember to turn off my hair straightener?” It doesn’t matter! Controlled by an app
                            on your smart phone or tablet, your smart power outlet allows you to turn off and on
                            whatever appliance you plug into it.
                        </p>

                    </div>
                </div>
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center bg-cover flex relative col-span-1 overflow-hidden bg-[url('https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/home/home-security/lighting-control.jpg') }}');">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Lighting Control</h3>
                        <p class="text-gray-800 mb-6">
                            Smart lighting easily enables you to light any room in your house either automatically or by
                            using your smartphone. Via smart bulbs, smart switches or smart power outlets you can make
                            your home look lived in - even when you're not there. Now that's a bright idea.
                        </p>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center bg-cover flex relative col-span-1 overflow-hidden bg-[url('https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/home/home-security/garage-door-control.jpg') }}');">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Garage Door Control</h3>
                        <p class="text-gray-800 mb-6">
                            Did you close the garage door? Now you can do it remotely. You’ll even get sent a
                            notification to your phone if the door is left open when it shouldn’t be.
                        </p>
                    </div>

                </div>

                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-cover bg-center overflow-hidden bg-[url('https://images.pexels.com/photos/7641825/pexels-photo-7641825.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/home/home-security/geofencing.jpg') }}');">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Geofencing</h3>
                        <p class="text-gray-800 mb-6">
                            Imagine if your house was smart enough to turn down the thermostat every time you left and
                            turn the porch light on when you return. GPS tracking on your mobile device paired with the
                            geofencing feature of your smart home automation system can do all that and much more.
                        </p>

                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 min-h-[70vh] relative md:grid-cols-3 gap-5">
                <!-- Smart Thermostat -->
                <div
                    class="relative col-span-2 bg-cover overflow-hidden bg-[url('https://images.pexels.com/photos/4386405/pexels-photo-4386405.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/home/home-security/temperature-detection.webp') }}');">
                    <div class="p-7 m-5 max-w-2xl h-fit mt-5 flex flex-col rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">High/Low Temperature Detection</h3>
                        <p class="text-gray-800 mb-6">
                            Going away on holidays? We'll let you know if the temperature drastically changes in your
                            home on account of a broken furnace or air conditioner. </p>
                    </div>
                </div>
                <!-- Arm/Disarm -->
                <div
                    class="bg-white justify-center bg-cover flex relative col-span-1 overflow-hidden bg-[url('https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=400&h=320&fit=crop')] "
                    style="background-image: url('{{ asset('images/home/home-security/instant-notifications.png') }}');">
                    <div class=" p-7 z-10 max-w-xs h-fit mt-5 flex flex-col  rounded-lg bg-gray-200/70 justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Instant Notifications</h3>
                        <p class="text-gray-800 mb-6">
                            Control your security system directly from your smartphone. Check recent activity, and
                            customize notifications for devices connected to your system. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
