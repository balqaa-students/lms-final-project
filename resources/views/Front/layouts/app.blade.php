<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduVibe - Education HTML Template Using Bootstrap 5</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/eduvibe-font.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/magnifypopup.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/style.css')}}">
    @stack('styles')
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="main-wrapper">
        {{-- main nav --}}
        @include('Front.layouts.main-nav' , ['years' => app\Models\Year::all()])

        {{-- mobile-nav --}}
        @include('Front.layouts.mobile-nav')

        @yield('breadcrump')
        @yield('content')

        <!-- Start Footer Area  -->
        @include('Front.layouts.footer')
        <!-- End Footer Area  -->
    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    @include('Front.layouts.scripts')

    @stack('scripts')
</body>

</html>
