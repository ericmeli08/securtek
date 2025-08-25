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
