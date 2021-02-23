<!DOCTYPE html>
<html lang="en">
    <!-- Header section -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        @section('head')
        @show
    </head>

    <!-- Body section -->
    <body class="uk-height-viewport">
        <nav class="nav uk-navbar" id="navbar" data-uk-navbar="">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo nav-link" href="{{ route('index') }}"><img class="nav-logo" src="{{ asset("images/Luz-Logo.png") }}" />Luzviminda</a>
            </div>

            <div class="uk-navbar-right">
                <a href="#offcanvas-usage" uk-toggle>Open</a>
            </div>
        </nav>

        <!-- Side nav -->
        <div id="offcanvas-usage" uk-offcanvas="flip: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        @section('body')
        @show
    </body>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</html>