<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    {{-- Loading Screen --}}
    <link href="{{ asset('css/please-wait.css') }}">
    <script src="{{ asset('js/please-wait.min.js') }}"></script>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300,400,500,700" rel="stylesheet">

    {{-- Custom Front End CSS --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="body_bck">
    <div id="app">

        <nav class="navbar navbar-default navbar-fixed-top" id="nav_color">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <ul class="nav navbar-nav navbar-left" id="nav_item_left">
                        <li>
                            <a class="navbar-brand" href="{{ url('/') }}" id="mod_txt">PersonalPage</a>
                        </li>
                    </ul>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="nav_item_right">
                        <!-- Right side Links -->
                        <li><a href="{{ url('/') }}" id="mod_txt"><i class="fa fa-home fa-1x"></i>&#8195;Home&#8195;</a></li>
                        <li><a href="{{ url('/about') }}" id="mod_txt"><i class="fa fa-user-o fa-1x"></i>&#8195;About Me&#8195;</a></li>
                        <li><a href="{{ url('/portfolio') }}" id="mod_txt"><i class="fa fa-terminal fa-1x"></i>&#8195;My Work&#8195;</a></li>
                        <li><a href="{{ url('/contact') }}" id="mod_txt"><i class="fa fa-send fa-1x"></i>&#8195;Contact&#8195;</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/ripples.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</body>
</html>
