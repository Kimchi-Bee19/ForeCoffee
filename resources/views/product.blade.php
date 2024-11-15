@extends('base.base')

@section('content')
    <div class="min-h-screen">
        <!-- Menu -->
        <div class="text-center pb-10 py-7 bg-gradient-to-r from-red-100 to-lime-100 dark:bg-gradient-to-r dark:from-red-700 dark:to-lime-700">
            <h1 class="text-4xl sm:text-6xl md:text-8xl font-bold text-lime-800 dark:text-lime-400">MENU</h1>
        </div>


        <div class="dark:bg-gray-900 py-10 sm:py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Americano Series -->
                <div>
                    <h2 class="text-2xl sm:text-2xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-300 text-center">AMERICANO SERIES</h2>
                    <div class="mt-8 flex flex-wrap justify-center gap-6">
                        <!--  Iced Americano -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Americano Iced.jpg')}}" alt="Iced Americano" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Iced Americano
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Espresso shot dalam segelas air dengan menjaga ketebalan rasa kopinya</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 21.000</p>
                            </div>
                        </div>
                        <!-- Iced Americano -->
                        <!-- Iced Manuka Americano -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Manuka Americano Iced.jpg')}}" alt="Iced Manuka Americano" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Iced Manuka Americano
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Americano dengan madu Manuka yang pas untuk jadi energy booster</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 29.000</p>
                            </div>
                        </div>
                        <!-- Iced Manuka Americano -->
                        <!-- Triple Peach Americano -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Triple Peach Americano.jpg')}}" alt="Triple Peach Americano" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Triple Peach Americano
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Peach coffee perpaduan rasa kopi, tiga jenis buah peach dan aroma elderflower yang menciptakan sensasi kopi yang segar dan harmonis</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 29.000</p>
                            </div>
                        </div>
                        <!-- Triple Peach Americano -->
                        <!-- Berry Manuka Americano -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Berry Manuka Americano.jpg')}}" alt="Berry Manuka Americano" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Berry Manuka Americano
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Perpaduan rasa Stroberi dan Manuka dengan Classic Blend Fore yang menyegarkan</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 29.000</p>
                            </div>
                        </div>
                        <!-- Berry Manuka Americano -->
                    </div>
                </div>

                <!-- Coffee -->
                <div class="mt-12">
                    <h2 class="text-2xl sm:text-2xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-300 text-center">COFFEE</h2>
                    <div class="mt-8 flex flex-wrap justify-center gap-6">
                        <!-- Iced Café Malt Latte -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Cafe Malt Latte Iced.jpg')}}" alt="Classic Latte" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Iced Café Malt Latte
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Paduan latte dan sirup Irish yang menghasilkan aroma dan rasa lembut</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 33.000</p>
                            </div>
                        </div>
                        <!-- Iced Café Malt Latte -->
                         <!-- Iced Salted Caramel Mocha -->
                         <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Iced Salted Caramel Mocha.jpg')}}" alt="Iced Salted Caramel Mocha" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Iced Salted Caramel Mocha
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Perpaduan coklat, latte dari house blend Fore, dan gurihnya caramel</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 33.000</p>
                            </div>
                        </div>
                        <!-- Iced Salted Caramel Mocha -->
                        <!-- Iced Cappuccino -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Capucino Iced.jpg')}}" alt="Iced Cappuccino" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Iced Cappuccino
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Paduan espresso dengan susu sapi pilihan dan foam tebal di atasnya</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 29.000</p>
                            </div>
                        </div>
                        <!-- Iced Cappuccino -->
                        <!-- Double Iced Shaken Latte -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Double Iced Shaken Latte.jpg')}}" alt="Berry Manuka Americano" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Double Iced Shaken Latte
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Paduan klasik 2 shot espresso dengan susu dan krim</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 33.000</p>
                            </div>
                        </div>
                        <!-- Double Iced Shaken Latte -->
                    </div>
                </div>

                <!-- Foreveryone 1L -->
                <div class="mt-12">
                    <h2 class="text-2xl sm:text-2xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-300 text-center">FOREVERYONE 1L</h2>
                    <div class="mt-8 flex flex-wrap justify-center gap-6">
                        <!-- Butterscotch Sea Salt Latte 1L -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Butterscotch Sea Salt Latte 1L.jpg')}}" alt="Butterscotch Sea Salt Latte 1L" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Butterscotch Sea Salt Latte 1L
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Perpaduan butterscotch dan espresso house blend dengan topping cream sea salt yang lembut di atasnya</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 26.000</p>
                            </div>
                        </div>
                        <!-- Butterscotch Sea Salt Latte 1L -->
                         <!-- Aren Latte 1L -->
                         <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Aren Latte 1L.jpg')}}" alt="Aren Latte 1L" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Aren Latte 1L
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Rasa alami Aren Latte dalam ukuran 1 liter untuk dinikmati bersama keluarga di rumah</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 90.000</p>
                            </div>
                        </div>
                        <!-- Aren Latte 1L -->
                        <!-- Café Malt Latte 1L -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Café Malt Latte 1L.jpg')}}" alt="Café Malt Latte 1L" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Café Malt Latte 1L
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Paduan latte dan sirup Irish yang menghasilkan aroma dan rasa lembut</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 95.000</p>
                            </div>
                        </div>
                        <!-- Café Malt Latte 1L -->
                        <!-- Nutty Oat Latte 1L -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Nutty Oat Latte 1L.jpeg')}}" alt="Nutty Oat Latte 1L" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Nutty Oat Latte 1L
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Espresso dari biji kopi khas nusantara dipadukan susu oat gluten-free dan sensasi nutty dari hazelnut</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 124.000</p>
                            </div>
                        </div>
                        <!-- Nutty Oat Latte 1L -->
                    </div>
                </div>

                <!-- Fore Deli -->
                <div class="mt-12">
                    <h2 class="text-2xl sm:text-2xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-300 text-center">FORE DELI</h2>
                    <div class="mt-8 flex flex-wrap justify-center gap-6">
                        <!-- Mushroom Truffle Sandwich -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Mushroom Truffle Sandwich.png')}}" alt="Mushroom Truffle Sandwich" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Mushroom Truffle Sandwich
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Sandwich dengan roti taburan parsley, jamur, saus truffle dan keju cheddar</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 42.000</p>
                            </div>
                        </div>
                        <!-- Mushroom Truffle Sandwich -->
                        <!-- Cheesy Tuna Sandwich -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Cheesy Tuna Sandwich.png')}}" alt="Cheesy Tuna Sandwich" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Cheesy Tuna Sandwich
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Sandwich dengan roti taburan wijen hitam, tuna mayo, saus tartar, keju mozzarella, keju cheddar merah, bawang bombay dan paprika hijau</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 39.000</p>
                            </div>
                        </div>
                        <!-- Cheesy Tuna Sandwich -->
                        <!-- Asian Beef Black Pepper Sandwich -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Asian Beef Black Pepper Sandwich.jpg')}}" alt="Asian Beef Black Pepper Sandwich" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Asian Beef Black Pepper Sandwich
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Sandwich dengan potongan daging, saus black pepper, cheddar cheese, dan sauteed onion</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 39.000</p>
                            </div>
                        </div>
                        <!-- Asian Beef Black Pepper Sandwich -->
                        <!-- Blueberry Cheese Muffin -->
                        <div class="group relative bg-white border rounded-md shadow-md overflow-hidden flex flex-col w-full sm:w-64">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-56">
                                <img src="{{url('/images/Blueberry Cheese Muffin.png')}}" alt="Blueberry Cheese Muffin" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="p-4 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Blueberry Cheese Muffin
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">Bolu padat rasa vanilla dengan isian krim keju bluberi dan topping crumble</p>
                                </div>
                                <p class="mt-2 text-sm font-medium text-red-800 text-right">Rp 36.000</p>
                            </div>
                        </div>
                        <!-- Blueberry Cheese Muffin -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
