<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- photoswipe CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    @vite(['resources/style/app.scss', 'resources/js/app.js'])

</head>

<body class="antialiased ">

    @include('Header')
    <div
        class="relative mt-20 container max-w-1.5xl mx-auto items-top justify-center min-h-screen bg-white sm:items-center py-4 sm:pt-0 lg:px-0 ">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class=" mx-auto px-4 sm:px-6 lg:px-0">
            @if ($cars)
                <?php
                ['car' => $car, 'standardImages' => $standardImages] = $cars[0];
                ?>
                @include('hero.hero', ['thecar' => $cars[0]])
                @include('details', ['thecar' => $cars[0]])
                @include('infocard', ['thecar' => $cars[0]])
                @include('description', ['thecar' => $cars[0]])
                @include('infocard', ['thecar' => $cars[0]])
                @include('relatedcars', ['thecar' => $cars[0]])
            @endif
        </div>
    </div>
    </div>

    @include('footer')
</body>

</html>
