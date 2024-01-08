<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Chinuk Wawa</title>
    <meta name="description"
          content="Chinook Wawa is a hybrid language consisting of simplified Chinookan, combined with contributions from Nuuchahnulth (Nootkan), Canadian French, English, and other languages. It originated on the lower Columbia River, where it once was the predominant medium of intertribal and interethnic communication. Even after English came into general use on the lower Columbia, Chinuk Wawa survived for generations in families and communities shaped by the meeting of the region’s historically diverse tribes and races.">
    <meta name="keywords"
          content="Chinook, Chinuk, Wawa, Chinuk Wawa, Jargon, Pacific Northwest, Language, Native American, Indigenous, First Nations, Native, American, Native American Language, Indigenous Language, First Nations Language, American Language, Indigenous Language, First Nations Language, Vancouver, Fort Vancouver, Chinook Jargon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.bunny.net/css?family=oswald:200,400,700" rel="stylesheet"/>

</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X1Q722V223"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-X1Q722V223');
</script>

<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        {{ $slot }}

        <div class="flex justify-center mt-48 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                <div class="flex items-center gap-2">
                    <a href="https://adambailey.io"
                       class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             class="-mt-px mr-1 w-5 h-5 fill-red-600 group-hover:stroke-red-400 motion-safe:animate-bounce">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        Adam Bailey
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
