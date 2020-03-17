<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIY Rocket: @yield('title')</title>
    <link rel="stylesheet" href="./css/style.bundle.css" />
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
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
    <script src="js/bundle.js"></script>
</body>

</html>