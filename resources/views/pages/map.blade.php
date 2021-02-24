@extends('layouts.master')

@section('head')
    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
            
    <!-- Load scripts -->
    <script src="js/map.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    
    <link href="{{ asset('css/map.css') }}" rel="stylesheet"/>
    
    <style>
        #map {
            height: 600px;
            width: 90vw;
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