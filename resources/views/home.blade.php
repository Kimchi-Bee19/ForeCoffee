@extends('base.base')

@section('content')
    <!-- Hero Section -->
    <div class="bg-stone-100 dark:bg-stone-800">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-7xl lg:flex lg:items-center lg:justify-between">
                <!-- Text Section -->
                <div class="text-center lg:text-left lg:w-1/2 lg:pr-12 lg:justify-start">
                    <h1 class="text-4xl font-bold tracking-tight text-green-900 dark:text-green-600 sm:text-4xl lg:text-[6rem] lg:leading-[6rem]">Grind The Essentials</h1>
                    <h3 class="mt-3 text-lg leading-7 text-lime-600 dark:text-lime-400 sm:text-xl lg:text-3xl lg:mt-6">Made with Indonesia’s Finest Beans for your everyday modern coffee experience</h3>
                </div>
                <!-- Image Section -->
                <div class="mt-8 lg:mt-0 lg:w-1/2 lg:flex lg:justify-end">
                    <img class="mx-auto sm:w-2/3 lg:w-[90%]" src="{{url('/images/Header Coffee.png')}}" alt="Fore Coffee">
                </div>
            </div>
        </div>
    </div>

    <!-- Story Section -->
    <div class="py-24 px-6 lg:px-24 dark:bg-gray-900 dark:text-gray-300">
        <!-- Title Section -->
        <div class="text-center mb-4 lg:mb-7">
            <h2 class="text-4xl font-bold text-green-900 dark:text-green-600 sm:text-5xl lg:text-7xl">Our Story</h2>
        </div>

        <!-- Content Section -->
        <div class="flex flex-col mx-4 lg:flex-row lg:items-center lg:justify-between">
            <!-- Image Section -->
            <div class="lg:w-1/2 lg:pr-6 mb-8 lg:mb-0 flex justify-center lg:justify-start">
                <img class="w-full lg:w-[90%] h-auto object-cover" src="{{url('/images/Story.png')}}" alt="Story">
            </div>

            <!-- Text Section -->
            <div class="lg:w-1/2 flex flex-col justify-center px-2">
                <p class="mb-4 text-lg text-gray-800 dark:text-gray-200 leading-7">Established in 2018, Fore Coffee is a passionate coffee startup aiming to brew the best specialty coffee for our customers. As our name derived from the word forest, we aim to grow fast, strong, tall and bring life to our surroundings. We want our existence to increase coffee quality for our community.</p>
                <p class="mb-8 text-lg text-gray-800 dark:text-gray-200 leading-7">Leveraging network and experience, we are using the latest tech for our tools and bean blend. Directly from the selected farmers, high-quality beans are processed and roasted to perfection by ourselves then passed on to our skilled baristas, excitedly preparing the cup of happiness to be served to you especially.</p>
                <div class="lg:ml-0 lg:self-start">
                    <button class="bg-green-800 text-white py-2 px-4 rounded-full hover:bg-green-700 flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-2">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div>
        <!-- Background Section -->
        <div class="bg-gradient-to-r from-red-100 to-lime-100 dark:from-red-700 dark:to-lime-700 py-16 px-4 sm:px-8 md:px-12 lg:px-24 xl:px-32">
            <!-- Title Section -->
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-4xl font-bold text-green-900 dark:text-green-600 sm:text-5xl lg:text-7xl mb-3">Benefits & Promo</h2>
                <h3 class="text-2xl text-lime-600 dark:text-lime-400 sm:text-3xl">for your daily caffeine intake!</h3>
            </div>
            <!-- Card Section -->
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Treats Foreveryday -->
                <div class="group relative bg-white dark:bg-gray-800 border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-72 md:w-80 lg:w-96">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 dark:bg-gray-700 group-hover:opacity-75">
                        <img src="{{url('/images/Treats Foreveryday.jpg')}}" alt="Treats Foreveryday" class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <!-- Saturday Free Upsize -->
                <div class="group relative bg-white dark:bg-gray-800 border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-72 md:w-80 lg:w-96">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 dark:bg-gray-700 group-hover:opacity-75">
                        <img src="{{url('/images/Saturday Free Upsize.jpg')}}" alt="Saturday Free Upsize" class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <!-- Euforeia Festive Deals -->
                <div class="group relative bg-white dark:bg-gray-800 border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-72 md:w-80 lg:w-96">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 dark:bg-gray-700 group-hover:opacity-75">
                        <img src="{{url('/images/Euforeia Festive Deals.jpg')}}" alt="Euforeia Festive Deals" class="h-full w-full object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection