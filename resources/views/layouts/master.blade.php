<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIY Rocket: @yield('title')</title>
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet">
    <link rel="icon" href="{{url('./img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{url('./img/favicon.ico')}}" type="image/x-icon" />
</head>

<body>
    <header class="header">
        @include('partials.top-bar')
        @include('partials.nav')
    </header>
    @yield('content')
    <footer class="footer">
        @include('partials.footer')
    </footer>
    <script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>