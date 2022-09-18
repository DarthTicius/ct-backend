<div class="block lg:grid lg:grid-cols-[minmax(0,1.5fr),minmax(0,1fr)]  lg:gap-8 mt-24 relative">
    <div class="block">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">
            {{ $thecar->yearOfProduction }} | {{ $thecar->car['specification'] }}
        </h1>

        <div class="mt-3">
            <h2 class="sr-only">Product information</h2>
            <p class="text-3xl tracking-tight text-gray-900">{{ $thecar->price }}</p>
        </div>

        <div class="mt-3 prose lg:max-w-[80ch]">
            {!! $thecar->description['fr_FR'] !!}
        </div>
    </div>
    <div class="block relative">

        <div aria-hidden="true" class="pointer-events-none relative lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full">
            <div
                class="relative lg:absolute transform sm:left-0 sm:top-1/2 sm:translate-x-8 lg:left-0 lg:-top-1/4 lg:translate-y-1/2 lg:translate-x-0">
                <div class="flex items-center space-x-6 lg:space-x-8">
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                            <img src={{ $thecar->standardImages[0]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[1]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[2]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[3]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[4]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[5]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src={{ $thecar->standardImages[6]['url'] }} alt=""
                                class="h-full w-full object-cover object-center" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
