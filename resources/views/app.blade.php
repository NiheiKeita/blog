<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
        <title inertia>暇なエンジニア</title>
        <link rel="icon" href="/imgs/favicon.ico">
        <!-- Scripts -->
        @vite('resources/js/app.js') @inertiaHead  @routes
    </head>

    <body class="font-sans antialiased">
    @inertia
    </body>
</html>
