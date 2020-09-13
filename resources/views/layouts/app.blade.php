<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/font_size.css')}}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accessory.css') }}" rel="stylesheet">
    <style>

        nav {
            background-color: #FFFFFF;
        }
        footer {
            background-color: #f9f9f9;
        }
        body {
            margin: 0;
            background-color: #18A75A;
        }
        .app-container {
            margin-left: auto;
            margin-right: auto;
            /* max-width: 1366px; */
            overflow-x: hidden
        }

        body {
            padding-top: 0px !important;
        }

        @font-face {
            font-family: 'ManRegular';
            src: url("../fonts/manrope/manrope-regular.ttf");
        }
        @font-face {
            font-family: 'ManBold';
            src: url("../fonts/manrope/manrope-bold.ttf");
        }
        main {
            font-family: 'ManRegular';
            color:black;
        }
        .fontbold {
            font-family: 'ManBold';
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