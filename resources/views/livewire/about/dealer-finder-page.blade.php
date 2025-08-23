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
                        Find a Dealer
                    </h1>
                </div>
            </div>

        </div>

        <!-- Dealer Finder -->
        <div class="absolute bottom-0 left-0 right-0 bg-securtek-lime text-black py-4 z-20">
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <p class="text-2xl text-white font-semibold mb-2 sm:mb-0">
                    Find your nearest dealer
                </p>
                <!-- Filtres de recherche -->
                <div class="bg-white/10  backdrop-blur-sm rounded-lg p-6">
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">
                        <!-- Pays -->
                        <div>
                            <select wire:model.live="selectedCountry"
                                class="w-full px-3 py-2 bg-white text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Province -->
                        <div>
                            <select wire:model.live="selectedProvince"
                                class="w-full px-3 py-2 bg-white text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50"
                                {{ !$selectedCountry ? 'disabled' : '' }}>
                                <option value="">Select Province</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Ville -->
                        <div>
                            <select wire:model.live="selectedCity"
                                class="w-full px-3 py-2 bg-white text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50"
                                {{ !$selectedProvince ? 'disabled' : '' }}>
                                <option value="">Select City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Clear filters button -->
                    @if ($selectedCountry || $selectedProvince || $selectedCity )
                        <div class="mt-4">
                            <button wire:click="clearFilters"
                                class="bg-white bg-opacity-20 hover:bg-opacity-30 text-black px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Clear All Filters
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Carte interactive -->
    <div class=" mx-auto ">

        <!-- Liste des dealers -->
        @if (count($dealers) > 0)
            <div class="space-y-8">
                <!-- Compteur de résultats -->
                <div class="bg-primary-50  md:pl-32 rounded-lg shadow-sm min-w-[100vw] p-6">
                    <h2 class="md:text-5xl text-4xl font-bold text-primary-600 mb-2">Locations Near You</h2>
                    <p class="text-gray-600">
                        Found {{ count(array_merge($dealers)) }}
                        dealer{{ count(array_merge($dealers)) !== 1 ? 's' : '' }}
                        in {{ count($dealers) }} province{{ count($dealers) !== 1 ? 's' : '' }}
                    </p>
                </div>

                <!-- Dealers groupés par province -->
                @foreach ($dealers as $province => $provinceDealers)
                    <div class="max-w-6xl px-4 sm:px-6 lg:px-8 py-12 mx-auto  p-6">
                        <div class="flex items-center border-b-4 pb-6">
                            <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">
                                {{ count($provinceDealers) }}
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900">{{ $province }}</h3>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                            @foreach ($provinceDealers as $dealer)
                                <div class="dealer-card  p-6  cursor-pointer ">

                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-1">
                                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                                {{ $dealer['name'] }}</h4>

                                            <div class="space-y-2">
                                                <div class="flex items-start text-sm text-gray-600">
                                                    <svg class="h-4 w-4 mr-2 mt-0.5 flex-shrink-0 text-blue-600"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    <div>
                                                        <div>{{ $dealer['address'] }}</div>
                                                        <div>{{ $dealer['city'] }}, {{ $dealer['province'] }}
                                                            {{ $dealer['postal_code'] }}</div>
                                                        <div>{{ $dealer['phone'] }}</div>
                                                    </div>
                                                </div>

                                                <div class="flex items-center text-sm text-gray-600">
                                                    <svg class="h-4 w-4 mr-2 flex-shrink-0 text-blue-600" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                    <a href="tel:{{ $dealer['phone'] }}"
                                                        class="hover:text-blue-600 transition-colors"
                                                        onclick="event.stopPropagation()">
                                                        {{ $dealer['phone'] }}
                                                    </a>
                                                </div>

                                                @if ($dealer['email'])
                                                    <div class="flex items-center text-sm text-gray-600">
                                                        <svg class="h-4 w-4 mr-2 flex-shrink-0 text-blue-600"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                        </svg>
                                                        <a href="mailto:{{ $dealer['email'] }}"
                                                            class="hover:text-blue-600 transition-colors"
                                                            onclick="event.stopPropagation()">
                                                            {{ $dealer['email'] }}
                                                        </a>
                                                    </div>
                                                @endif

                                                @if ($dealer['website'])
                                                    <div class="flex items-center text-sm text-gray-600">
                                                        <svg class="h-4 w-4 mr-2 flex-shrink-0 text-blue-600"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9-9a9 9 0 00-9 9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                        </svg>
                                                        <a href="https://{{ $dealer['website'] }}" target="_blank"
                                                            class="hover:text-blue-600 transition-colors"
                                                            onclick="event.stopPropagation()">
                                                            {{ $dealer['website'] }}
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex max-w-fit">
                                        <a href="{{ $dealer['google_maps_url'] }}" target="_blank"
                                            onclick="event.stopPropagation()"
                                            class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition-colors flex items-center justify-center">
                                            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m0 0L9 7" />
                                            </svg>
                                            Get Directions
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Aucun résultat -->
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <svg class="h-12 w-12 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No dealers found</h3>
                <p class="text-gray-600">
                    Try adjusting your search criteria or removing some filters.
                </p>
            </div>
        @endif
    </div>
</div>

