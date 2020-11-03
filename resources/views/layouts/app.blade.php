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
    <!-- Vendor Scripts -->
    <script src="{{ asset('temp/assets/js/plugins/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/popper.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/waypoint.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/jquery.slimScroll.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/imagesloaded.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/jquery.steps.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/jquery.countdown.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('temp/assets/js/plugins/slick.min.js') }}" defer></script>

    <!-- Slices Scripts -->
    <script src="{{ asset('temp/assets/js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Slices - Pizzeria HTML Template</title>

    <!-- Vendor Stylesheets -->
    <link rel="stylesheet" href="{{asset('temp/assets/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/css/plugins/slick-theme.css')}}">
    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{asset('temp/assets/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/fonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Slices Style sheet -->
    <link rel="stylesheet" href="{{asset('temp/assets/css/style.css')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('temp/assets/favicon.ico')}}">
</head>
<body>
<div id="app">
    <div class="ct-preloader">
        <div class="ct-preloader-inner">
            <div class="lds-ripple">

            </div>
        </div>
    </div>
    @include('header')
    <main>
        <router-view></router-view>
        {{--@yield('content')--}}
    </main>
    @include('footer')
</div>
</body>
</html>
