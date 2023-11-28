<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <!-- Fetch project name dynamically -->
    <title inertia>{{ config('app.name', 'Blog') }}</title>

    <!-- Scripts -->
    @vite('resources/js/app.js') @inertiaHead  @routes
  </head>

  <body class="font-sans antialiased">
    @inertia
  </body>
</html>
