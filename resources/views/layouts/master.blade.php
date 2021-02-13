<!DOCTYPE html>
<html lang="en">
    <!-- Header section -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Landing Page</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        @section('head')
        @show
    </head>

    <!-- Body section -->
    <body>
        <img src="{{ asset('css/Luz-Logo.png') }}"><h2>LuzViMinda</h2>
            <div class="links">
                <a href="">Home</a>
                <a href="">Partners</a> 
            </div>
        @section('body')
        @show
    </body>
</html>