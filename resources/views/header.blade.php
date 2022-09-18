<!-- Mobile menu -->
<div class="backdop_menu relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed backdrop_bg  inset-0 bg-black bg-opacity-25"></div>

    <div class="fixed backdrop_nav_wrapper inset-0 z-40 flex">
        <div class="menu_ofscreen relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
            <div class="flex px-4 pt-5 pb-2">
                <button type="button" id="close_menu"
                    class="close_menu -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">

                        <button id="tabs-1-tab-1"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Cars</button>

                        <button id="tabs-1-tab-2"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Motorcycles</button>
                    </div>
                </div>


                <div id="tabs-1-panel-1" class="space-y-10 px-4 pt-10 pb-8" aria-labelledby="tabs-1-tab-1"
                    role="tabpanel" tabindex="0">
                    <div class="space-y-4">
                        <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                            <img class="h-full w-full object-cover" src="/images/car_1.jpeg" alt=""
                                class="object-cover object-center group-hover:opacity-75" />
                            <div class="flex flex-col justify-end">
                                <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                                    <a href="#" class="font-medium text-gray-900">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                            <img class="h-full w-full object-cover" src="/images/car_1.jpeg" alt=""
                                class="object-cover object-center group-hover:opacity-75" />
                            <div class="flex flex-col justify-end">
                                <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                                    <a href="#" class="font-medium text-gray-900">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Sell
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-10">
                        <div>
                            <p id="women-shoes-heading-mobile" class="font-medium text-gray-900">Make
                            </p>
                            <ul role="list" aria-labelledby="women-shoes-heading-mobile"
                                class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Aston Martin</a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Audi</a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Bentley</a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Chevy</a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Ferrari</a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Ford</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                </div>


            </div>

            <div class="border-t border-gray-200 py-6 px-4">
                <a href="#" class="-m-2 flex items-center p-2">
                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                        class="block h-auto w-5 flex-shrink-0">
                    <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                    <span class="sr-only">, change currency</span>
                </a>
            </div>
        </div>
    </div>
</div>

<header class="relative bg-white">
    <nav aria-label="Top" class="mx-auto max-w-1.5xl px-4 sm:px-6 lg:px-0">
        <div class="border-b border-gray-200">
            <div class="flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center lg:hidden">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" id="mobile_btn_menu"
                        class="mobile_btn_menu -ml-2 rounded-md bg-white p-2 text-gray-400">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Search</span>
                        <!-- Heroicon name: outline/magnifying-glass -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </a>
                </div>

                <!-- Flyout menus -->
                <div id="desktop_menu_warpper" class="desktop_menu_warpper hidden lg:block lg:flex-1 lg:self-stretch">
                    <div id="desktop_nav_wrapper" class="nav_wrapper flex h-full space-x-8">
                        <div class="flex nav_btn_wrapper">
                            <div class="relative flex">
                                <button type="button"
                                    class="nav_btn border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                                    aria-expanded="false">Buy</button>
                            </div>

                            <div class="nav_btn_data absolute inset-x-0 top-full z-10 text-sm text-gray-500">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div class="relative bg-white">
                                    <div class="mx-auto max-w-1.5xl px-8">
                                        <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                            <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                <div class="group relative text-base sm:text-sm">
                                                    <div
                                                        class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                        <img src="images/car_1.jpeg"
                                                            alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                            class="object-cover object-center">
                                                    </div>
                                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                        Car
                                                    </a>
                                                    <p aria-hidden="true" class="mt-1">Buy now</p>
                                                </div>

                                                <div class="group relative text-base sm:text-sm">
                                                    <div
                                                        class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                        <img src="images/moto_1.jpeg"
                                                            alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                            class="object-cover object-center">
                                                    </div>
                                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                        Motorcycle
                                                    </a>
                                                    <p aria-hidden="true" class="mt-1">Buy now</p>
                                                </div>
                                            </div>
                                            <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                                <div>
                                                    <p id="Clothing-heading" class="font-medium text-gray-900">
                                                        Cars</p>
                                                    <ul role="list" aria-labelledby="Clothing-heading"
                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Buy Cars</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Oldtimer
                                                                dealers</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">All
                                                                Makes</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div>
                                                    <p id="Accessories-heading" class="font-medium text-gray-900">
                                                        Motorcycles</p>
                                                    <ul role="list" aria-labelledby="Accessories-heading"
                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Buy
                                                                Motorbikes</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Motorbikes
                                                                Dealers</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">All
                                                                Makes</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex nav_btn_wrapper">
                            <div class="relative flex">
                                <button type="button"
                                    class="nav_btn border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                                    aria-expanded="false">Sell</button>
                            </div>


                            <div class="nav_btn_data absolute inset-x-0 top-full z-10 text-sm text-gray-500">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div class="relative bg-white">
                                    <div class="mx-auto max-w-1.5xl px-8">
                                        <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                            <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                <div class="group relative text-base sm:text-sm">
                                                    <div
                                                        class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                        <img src="/images/car_1.jpeg"
                                                            alt="Drawstring top with elastic loop closure and textured interior padding."
                                                            class="object-cover object-center">
                                                    </div>
                                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                        Cars
                                                    </a>
                                                    <p aria-hidden="true" class="mt-1">Sell now</p>
                                                </div>

                                                <div class="group relative text-base sm:text-sm">
                                                    <div
                                                        class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                        <img src="/images/moto_1.jpeg" alt=""
                                                            class="object-cover object-center">
                                                    </div>
                                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                        Motorcycles
                                                    </a>
                                                    <p aria-hidden="true" class="mt-1">Sell now</p>
                                                </div>
                                            </div>
                                            <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                                <div>
                                                    <p id="Clothing-heading" class="font-medium text-gray-900">
                                                        Cars</p>
                                                    <ul role="list" aria-labelledby="Clothing-heading"
                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Sell
                                                                Cars</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">How it
                                                                works</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Price
                                                                list</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div>
                                                    <p id="Accessories-heading" class="font-medium text-gray-900">
                                                        Motorbikes</p>
                                                    <ul role="list" aria-labelledby="Accessories-heading"
                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Sell
                                                                motorbikes</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">How it
                                                                works</a>
                                                        </li>

                                                        <li class="flex">
                                                            <a href="#" class="hover:text-gray-800">Price
                                                                list</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="nav_btn flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                    </div>
                </div>

                <!-- Logo -->
                <a href="#" class="flex">
                    <span class="sr-only">CT Trader</span>

                    <img class="h-3 w-auto" src="/images/svg/ct-logo.svg" alt="">
                </a>

                <div class="flex flex-1 items-center justify-end">
                    <a href="#" class="hidden text-gray-700 hover:text-gray-800 lg:flex lg:items-center">
                        <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                            class="block h-auto w-5 flex-shrink-0">
                        <span class="ml-3 block text-sm font-medium">CAD</span>
                        <span class="sr-only">, change currency</span>
                    </a>

                    <!-- Search -->
                    <a href="#" class="ml-6 hidden p-2 text-gray-400 hover:text-gray-500 lg:block">
                        <span class="sr-only">Search</span>
                        <!-- Heroicon name: outline/magnifying-glass -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </a>

                    <!-- Account -->
                    <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                        <span class="sr-only">Account</span>
                        <!-- Heroicon name: outline/user -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>


                </div>
            </div>
        </div>
    </nav>
</header>
