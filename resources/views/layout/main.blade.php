<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal website of musician and web developer Giacomo Caruso">
    <meta name="og:title" content="Giacomo Caruso">
    <meta name="og:description" content="Personal website of musician and web developer Giacomo Caruso">
    <meta name="og:image" content="resources/assets/images/og_image_giacomo.png">
    <meta name="author" content="Giacomo Caruso">
    <title>Giacomo Caruso</title>
    @yield('header')

    <!-- FAVICONS -->
    <!-- Desktop browsers (including 16x6, 32x32 & 48x48 PNGs) -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Modern browsers (196x196 should cover all modern browsers) -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- iOS & other mobile devices (ideally 180x180, at least 120x120) -->
    <link rel="apple-touch-icon" href="{{ asset('touch-icon-iphone.png') }}">

    @include('layout.style')
</head>
<body>
    @yield('content')
</body>
@include('layout.script')
</html>
