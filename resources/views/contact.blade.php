@extends('base.base')

@section('content')
    <div class="isolate dark:bg-gray-900 px-6 py-20 sm:py-20 lg:px-8">
        <!-- Contact Us -->
        <div class="text-center mb-10 lg:mb-16">
            <h2 class="text-4xl font-bold tracking-tight text-green-800 dark:text-green-600 sm:text-5xl">Contact Us</h2>
            <p class="mt-2 text-lg leading-8 text-gray-500 dark:text-gray-300">Any question or remarks? Just write us a message!</p>
        </div>

        <!-- Contact Information -->
        <div class="mx-auto max-w-7xl grid grid-cols-1 gap-8 lg:grid-cols-2">
            <div class="bg-green-800 text-white rounded-lg p-8 shadow-lg sm:mx-auto sm:max-w-md lg:max-w-none lg:mx-0">
                <h3 class="text-3xl font-bold mb-4">Contact Information</h3>
                <p class="text-md leading-6 mb-6">Should you have any questions or concerns, you can reach us by filling out the contact form, calling us, visiting our office, finding us on social networks, or emailing us at:</p>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32" class="flex-shrink-0">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg> 
                        <span>0812-1111-8456</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32" class="flex-shrink-0">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                        <span>hello@fore.coffee</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32" class="flex-shrink-0">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        <span>Gedung Graha Ganesha, Lantai 1 Suite 120 & 130, Jl. Hayam Wuruk No. 28, RT 014/ RW 001, Kelurahan Kebon Klapa, Kecamatan Gambir, Jakarta Pusat, DKI Jakarta</span>
                    </li>
                </ul>
            </div>

            <!-- Form -->
            <div class="lg:pl-8">
                <form action="#" class="mx-auto max-w-xl sm:mt-10 lg:mt-0">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">First name</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Last name</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Phone number</label>
                            <div class="relative mt-2.5">
                                <div class="absolute inset-y-0 left-0 flex items-center">
                                    <label for="country" class="sr-only">Country</label>
                                    <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent py-0 pl-4 pr-9 text-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                        <option>ID</option>
                                        <option>US</option>
                                        <option>EU</option>
                                    </select>
                                </div>
                                <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-24 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Message</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="block w-full rounded-full bg-green-800 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection