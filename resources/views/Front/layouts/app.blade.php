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

    <!--============================== CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/eduvibe-font.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/magnifypopup.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/vendor/jqueru-ui-min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/assets/css/style.css') }}">
    <style>
        .speed-logo {
            font-weight: 900;
            letter-spacing: .3rem
        }

        .speed-logo span {
            font-weight: 400;
            font-size: 18px
        }

        .glitch-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: left;
            text-align: center;
        }

        .glitch {
            position: relative;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            color: #b0a4a4;
            letter-spacing: 4px;
            z-index: 1;
        }

        .nav-logo .glitch{
            font-size: 15px;
            color: #000000;
            font-weight: 800
        }

        .glitch:before,
        .glitch:after {
            display: block;
            content: attr(data-glitch);
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.8;
        }

        .glitch:before {
            animation: glitch-color 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            color: #0011ff;
            z-index: -1;
        }

        .glitch:after {
            animation: glitch-color 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
            color: #ff0000;
            z-index: -2;
        }

        .nav-logo .glitch:before {
            animation: glitch-color 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            color: #0011ff00;

        }
        .nav-logo .glitch:after {
            animation: glitch-color 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
            color: #ff00003a;

        }

        @keyframes glitch-color {
            0% {
                transform: translate(0);
            }

            20% {
                transform: translate(-3px, 3px);
            }

            40% {
                transform: translate(-3px, -3px);
            }

            60% {
                transform: translate(3px, 3px);
            }

            80% {
                transform: translate(3px, -3px);
            }

            to {
                transform: translate(0);
            }
        }
    </style>
    @stack('styles')
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="main-wrapper">
        {{-- main nav --}}
        @include('Front.layouts.main-nav', ['years' => App\Models\Year::all()])

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
