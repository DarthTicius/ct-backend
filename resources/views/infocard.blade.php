<div class="container mx-auto lg:px-20 mt-20">

    <div>
        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
            <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                    <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                        {{ $thecar->yearOfProduction }} | {{ $thecar->car['specification'] }}
                    </h3>
                    <div class="flex justify-between flex-col lg:flex-row">
                        <p class="mt-6 text-base text-gray-500">City: {{ $thecar->location['city'] }}</p>
                        <p class="mt-6 text-base text-gray-500">Country: {{ $thecar->location['countryCode'] }}</p>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center">
                            <h4
                                class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-indigo-600 uppercase bg-white">
                                What's included</h4>
                            <div class="flex-1 border-t-2 border-gray-200"></div>
                        </div>
                        <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700">Manufacturer: {{ $thecar->manufacturerCode }}
                                </p>
                            </li>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700"> Body: {{ $thecar->car['body'] }} /
                                    {{ $thecar->car['bodyDetailed'] }}</p>
                            </li>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700">Horsepower: {{ $thecar->horsepower }} </p>
                            </li>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700">CC: {{ $thecar->cubicCapacity }}</p>
                            </li>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700">Cylinder: {{ $thecar->cylinder }}</p>
                            </li>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-700">Mileage: {{ $thecar->mileageByUnit }}
                                    ({{ $thecar->mileageUnit }})</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-6 py-8 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12"
                    style="cursor: auto;">
                    <div class="flex items-center justify-center mt-4 text-3xl font-extrabold text-gray-900">
                        <span>{{ $thecar->price }}</span>
                    </div>
                    <div class="mt-6">
                        <div class="rounded-md shadow">
                            <a href="#"
                                class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-900">
                                Call
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="rounded-md shadow">
                            <a href="#"
                                class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-900">
                                Message
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
