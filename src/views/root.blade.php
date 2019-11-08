<!DOCTYPE html>
<html lang="en" class="{{ $class['html'] ?? '' }}">
    <head profile="http://www.w3.org/2005/10/profile">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <meta charset="utf-8">
        <title>{{ $pagetitle ?? '' }}
        </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-url" content="{{ url('/') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
        @yield('head')
    </head>
    <body class="{{ $class['body'] ?? '' }}">
        @if(isset($vue))
            <div id="app" class="h-100">
                @yield('content')
            </div>
        @else
            @yield('content')
        @endif

        @if(env('APP_ENV') !== 'local')
            <script src="//cdn.polyfill.io/v2/polyfill.min.js"></script>
        @endif
        <script src="{{ url(mix('js/app.js')) }}"></script>
    </body>
</html>