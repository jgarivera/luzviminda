@extends('layouts.master')

@section('head')
    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
            
    <!-- Load scripts -->
    <script src="js/map.js" defer></script>

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
    <!-- Map container -->
    <div id="map"></div>
@endsection