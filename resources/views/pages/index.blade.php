@extends('layouts.master')

@section('head')

    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
        
    <!-- Load scripts -->
    <script src="js/map.js" defer></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <style>
        body {
            margin: 0;
        }
    
        #map {
            height: 600px;
            width: 90vw;
        }
    </style>
@endsection

@section('body')
    <div class="content">
        <h1>News</h1>
        <blockquote class="twitter-tweet">
            <p lang="tl" dir="ltr">Bilang tugon sa mga tawag at pagpapahayag ng kagustuhan ng mga kababayan natin na magbigay at magpadala ng tulong sa mga nasalanta ni Bagyong ROLLY, activated nang muli ang ating Donations line and focal person. Paalala lang po, mag-iingat sa mga bogus solicitation. <a href="https://t.co/31FyDrXiKF">pic.twitter.com/31FyDrXiKF</a></p>&mdash; NDRRMC (@NDRRMC_OpCen)
            <a href="https://twitter.com/NDRRMC_OpCen/status/1323838129472638977?ref_src=twsrc%5Etfw">November 4, 2020</a>
        </blockquote>
        
        <!-- https://help.twitter.com/en/using-twitter/how-to-embed-a-tweet -->
        
        <!-- Map container -->
        <div id="map"></div>

        <a href="" class="dash">Go to DashBoard</h3>
        <a href=""class="login">Login</a>
    </div>
@endsection