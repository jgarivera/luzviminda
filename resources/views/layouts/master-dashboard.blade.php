<!DOCTYPE html>
<html lang="en">
    <!-- Header section -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/app.css') }}">
        @section('head')
        @show
    </head>

    <!-- Body section -->
    <body class="uk-height-viewport">
        <nav class="nav uk-navbar" id="navbar" data-uk-navbar="">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo nav-link" href="{{ route('index') }}"><img class="nav-logo" src="{{ asset("images/Luz-Logo.png") }}" />Luzviminda</a>
            </div>

            <div class="uk-navbar-right nav-right">
                <a class="nav-link" href="#offcanvas-usage" uk-toggle>OPEN THE SIDENAV</a>
            </div>
        </nav>

        <!-- Side nav -->
        <div id="offcanvas-usage" uk-offcanvas="flip: true">
            <div class="uk-offcanvas-bar side-nav">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                
                <h3>Welcome</h3>
                <img src="{{ asset('images/jci-logo.jpg')}}">
                <h4>JCI Cebu Sinulog</h4>

                <hr class="side-nav-hr">

                <ul class="side-nav-links">
                    <li>
                        @if(Route::current()->getName() === 'dashboard.index')
                            <span class="dot"></span>
                        @endif
                        <a href="{{ route('dashboard.index') }}" class="nav-link">Dashboard</a></li>
                    <li>
                        @if(Route::current()->getName() === 'dashboard.records-manager')
                            <span class="dot"></span>
                        @endif
                        <a href="{{ route('dashboard.records-manager') }}" class="nav-link">Records</a>
                    </li>
                    <li>
                        @if(Route::current()->getName() === 'dashboard.org-page-editor')
                            <span class="dot"></span>
                        @endif
                        <a href="{{ route('dashboard.org-page-editor') }}"class="nav-link">Editor</a>
                    </li>
                    <li>
                        <a href="{{ route('index') }}"class="nav-link">Logout</a>
                    </li>
                </ul>

                <hr class="side-nav-hr">
            </div>
        </div>

        <div class="body-container">
            @section('body')
            @show
        </div>
    </body>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</html>