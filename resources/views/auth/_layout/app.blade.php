<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - {{ config('app.name') }}</title>
    <!-- Fonts -->
    
    <!-- @yield('css') -->
    @include('layouts.partials.links')
</head>
<body>
    <div  class="wrapper">
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.partials.footer')
    </div>

    <!-- Scripts -->
    @include('layouts.partials.scripts')
</body>
</html>
