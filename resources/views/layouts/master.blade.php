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
        <nav style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0));" class="uk-navbar nav" data-uk-navbar="">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo nav-link" href="{{ route('index') }}"><img class="nav-logo" src="{{ asset("images/Luz-Logo.png") }}" />LuzViMinda</a>
            </div>
            
            <div class="uk-navbar-right nav-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('partner-orgs') }}">Partners</a></li>
                </ul>
            </div>
        </nav>

        <div class="body-container">
            @section('body')
            @show
        </div>
    </body>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</html>