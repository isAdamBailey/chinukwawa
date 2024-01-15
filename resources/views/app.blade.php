<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Chinuk-Wawa') }}</title>
        <meta name="description"
              content="Chinook Wawa is a hybrid language consisting of simplified Chinookan, combined with contributions from Nuuchahnulth (Nootkan), Canadian French, English, and other languages. It originated on the lower Columbia River, where it once was the predominant medium of intertribal and interethnic communication. Even after English came into general use on the lower Columbia, Chinuk Wawa survived for generations in families and communities shaped by the meeting of the region’s historically diverse tribes and races.">
        <meta name="keywords"
              content="Chinook, Chinuk, Wawa, Chinuk Wawa, Jargon, Pacific Northwest, Language, Native American, Indigenous, First Nations, Native, American, Native American Language, Indigenous Language, First Nations Language, American Language, Indigenous Language, First Nations Language, Vancouver, Fort Vancouver, Chinook Jargon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.bunny.net/css?family=oswald:200,400,700" rel="stylesheet"/>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PNM13E3C96"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-PNM13E3C96');
    </script>

    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
