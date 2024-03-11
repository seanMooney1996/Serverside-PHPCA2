<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/mycss.css') }}" rel="stylesheet">

</head>
<body background="bg.gif" bgcolor="#000000" bgproperties="fixed">
    @include('layouts.nav')
    <div id="app">
        <header class="bg-grey-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
            </div>
        </header>
        <div>
        @yield('content')
        </div>
    </div>
    @include('layouts.footer')
    </div>
</body>
</html>
