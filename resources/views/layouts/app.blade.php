<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon/Favicon-sotoya-32x32.ico"/>

    @yield('title')
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accessory.css') }}" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=ManRegular:wght@200;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ManBold:wght@800&display=swap" rel="stylesheet"> --}}

    <style>

        nav {
            background-color: #FFFFFF;
        }
        
        body {
            margin: 0;
            padding-top: 0px !important;
            background-color: #18A75A;
        }

        footer {
            background-color: #f9f9f9;
        }

        .app-container {
            margin-left: auto;
            margin-right: auto;
            /* max-width: 1366px; */
            overflow-x: hidden
        }

        @font-face {
            font-family: 'ManRegular';
            src: url("../fonts/manrope/manrope-regular.ttf");
        }
        @font-face {
            font-family: 'ManBold';
            src: url("../fonts/manrope/manrope-Bold.otf");
        }
        /* @font-face {
            font-family: 'ManRegular';
            src: url("../fonts/latin-extended/manrope-regular.otf");
        }
        @font-face {
            font-family: 'ManBold';
            src: url("../fonts/latin-extended/manrope-extrabold.otf");
        } */
        main {
            font-family: 'ManRegular';
            color:#020000;
        }
        .fontbold {
            font-family: 'ManBold';
        }

        .invalid-feedback {
            color:red;
            padding-top:16px;
            margin-bottom:16px;
        }

        input::placeholder {
            color:#020000;
            opacity: 0.4;
        }

    </style>


    @yield('styles')

</head>

<body class="bg-grey h-screen antialiased leading-none" onresize="onResize()" ondragstart="return false;" ondrop="return false;">

    @include('partials.accessory')

    <div class="app-container text-primary">
        @include('layouts.header')
        @yield('content')
        @yield('footer')
    </div>

    @yield('scripts')
    <script src="{{ asset('js/accessory.js') }}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>

        onResize();
        function onResize() {
            document.getElementById("main-content").style.marginTop = (document.getElementsByTagName("nav")[0].clientHeight) + "px";
        }
        $("#nav-toggle").click(function() {

            $("#nav-content-mobile").toggle();

            $(this).find("svg").toggleClass("hidden");

        });

    </script>
</body>

</html>