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
            src: url("../fonts/manrope/manrope-extrabold.ttf");
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

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            /* padding: 10px; */
            border: 1px solid #888;
            width: 80%;
            max-width: 570px;
        }
        #close {
            color: #aaaaaa;
            float: right;
            font-size: 20px;
            font-weight: bold;
        }
        #close:hover,
        #close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
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

        var selectmodal = document.getElementById("select-modal");
        var selectbtn = document.getElementById("modal-select-button");
        var selectbtn_mobile = document.getElementById("modal-select-button-mobile");
        var selectspan = document.getElementById("close");

        selectbtn.onclick = function() {
            selectmodal.style.display = "block";
        }
        selectbtn_mobile.onclick = function() {
            selectmodal.style.display = "block";
        }
        selectspan.onclick = function() {
            selectmodal.style.display = "none";
        }
        window.onclick = function(event) {
            
            var modal = document.getElementById("voir-modal");
            
            if (event.target == selectmodal || event.target == modal) {
                selectmodal.style.display = "none";
                modal.style.display = "none";
            }
        }

    </script>
</body>

</html>