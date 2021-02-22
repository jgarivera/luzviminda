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
                <a class="uk-navbar-item uk-logo nav-link" href="#"><img class="nav-logo" src="{{ asset("images/Luz-Logo.png") }}" />Luzviminda</a>
            </div>
            
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a style="nav-link" href="#">Home</a></li>
                    <li><a style="nav-link" href="#">Partners</a></li>
                </ul>
                <!-- <div class="uk-navbar-item">
                    <a class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon" data-uk-toggle="" data-uk-navbar-toggle-icon="" href="#offcanvas-nav" aria-expanded="false"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
                    <a href="#" class="uk-button uk-button-secondary uk-visible@m"><span data-uk-icon="sign-in" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"></polygon><polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"></polygon></svg></span>SIGN UP</a>
                </div> -->
            </div>
        </nav>
        @section('body')
        @show
    </body>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</html>