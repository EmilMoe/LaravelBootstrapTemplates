<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head profile="http://www.w3.org/2005/10/profile">
        <title>
            @yield('title', config('app.name', 'Laravel'))
        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-url" content="{{ url('/') }}">

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">

        @yield('head')
    </head>
    <body class="h-100">
        <div id="app" class="h-100">
            @include('EmilMoe\Templates::parts.navbar')

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        @if(env('APP_ENV') !== 'local')
            <script src="//cdn.polyfill.io/v2/polyfill.min.js"></script>
        @endif
        <script src="{{ url(mix('js/app.js')) }}"></script>
    </body>
</html>