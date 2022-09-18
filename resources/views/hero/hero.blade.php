<section class="hero relative flex items-center min-h-[400px]">
    <div class="mx-auto w-full max-w-1.5xl text-center lg:text-left">
        <div class="px-4 sm:px-0 lg:w-[70ch]  xl:mr-4 prose mx-auto lg:mx-0">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">

                <span class="block xl:inline">{{ $thecar->yearOfProduction }}</span>
                <span class="block text-black xl:inline">{{ $thecar->car['specification'] }}</span>
            </h1>
            <p class="mx-auto mt-3 max-w-md text-lg text-black sm:text-xl md:mt-5 md:max-w-3xl">Anim aute id magna
                La voiture est une Ford Mustang fastback 67 d'origine avec un moteur
                Windsor 351 Construite sur une réplique d'Eleanor en 2002 par la société
                Shelby.</p>
        </div>
        <div
            class="relative flex items-center h-auto w-full mt-20 lg:mt-0 lg:absolute lg:inset-y-0 lg:right-0 lg:w-[calc(100%-70ch)]">
            @include('hero.slider', ['carimages' => $standardImages])
        </div>
</section>
