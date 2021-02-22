@extends('layouts.master')

@section('head')
    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
            
    <!-- Load scripts -->
    <script src="js/map.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
        }

        #map {
            height: 600px;
            width: 90vw;
        }
    </style>

    <style>
        .map-overlay {
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            position: absolute;
            width: 200px;
            top: 100px;
            left: 50px;
            padding: 10px;
        }

        .map-overlay .map-overlay-inner {
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            padding: 20px;
            margin-bottom: 10px;
            width: 250px;
        }
        #ov-province{
            margin-top: -20px;
            font-weight: bold;
        }
        #ov-municity{
            text-decoration: underline;
            margin-top: -20px;
        }
        #ov-gradient{
            width: 150px;
            margin-top: -10px;
            height: 10px;
            background-image: linear-gradient(to right, #dc2727, #f8b20c, #48e74f);
        }
        .ov-essinfo{
            text-indent: 20px;
        }
        #donoamount, #affected{
            margin-top: -20px;
        }
        #donodrive, #donoamount, #affected{
            font-size: medium;
        }
        #donodrive{
            margin-top: 10px;
        }
    </style>
@endsection

@section('body')
    <!-- Map container -->
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
@endsection