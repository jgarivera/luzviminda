@extends('layouts.master')

@section('head')
    <title>Landing Page</title>
    
    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
                
    <!-- Load scripts -->
    <script src="{{ asset('js/map.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        
        
    <!-- Load styles -->
    <style>
        .map-container {
            margin-bottom: 2em;
        }
        #map {
            margin-left: auto;
            margin-right: auto;
            height: 500px;
            width: 80vw;
            border: 1px solid #14976B;
            border-radius: 3px;
        }
    </style>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('body')
    <h1>Donation Map</h1>
    <!-- Map container -->
    <div class="map-container">
        <div id="map"></div>
        <div class="map-overlay top" style="stroke: black">
            <div class="map-overlay-inner">
                <p><i>You are currently hovering...</i> </p>
                <h3 id="ov-province">Province</h3>
                <h4 id="ov-municity">Municity</h4>
                <div id="ov-gradient"></div>
                <div class="ov-essinfo">
                    <h4 id="donodrive">No. of donation drives: <span id="ov-donodrive">0</span></h4>
                    <h4 id="donoamount">Total donations: <span id="ov-donoamount">0</span></h4>
                    <h4 id="affected">No. of affected people: <span id="ov-affected">0</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="center-content">
        <h1>News</h1>
        <blockquote class="twitter-tweet">
            <p lang="tl" dir="ltr">Bilang tugon sa mga tawag at pagpapahayag ng kagustuhan ng mga kababayan natin na magbigay at magpadala ng tulong sa mga nasalanta ni Bagyong ROLLY, activated nang muli ang ating Donations line and focal person. Paalala lang po, mag-iingat sa mga bogus solicitation. <a href="https://t.co/31FyDrXiKF">pic.twitter.com/31FyDrXiKF</a></p>&mdash; NDRRMC (@NDRRMC_OpCen)
            <a href="https://twitter.com/NDRRMC_OpCen/status/1323838129472638977?ref_src=twsrc%5Etfw">November 4, 2020</a>
        </blockquote>
        
        <!-- https://help.twitter.com/en/using-twitter/how-to-embed-a-tweet -->

        <a href="{{ route('login') }}" class="dash">Go to Dashboard</a>
    </div>
@endsection