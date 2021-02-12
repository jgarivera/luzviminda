@extends('layouts.master')

@section('head')
    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
    
    <style>
        body {
            margin: 0;
        }

        #map {
            height: 100vh;
            width: 100vw;
        }
    </style>

    <!-- Load map script -->
    <script src="js/map.js" defer></script>

    <h1>Luzviminda Home</h1>
@endsection

@section('body')
    <p>Body section</p>

    <!-- Map container -->
    <div id="map"></div>
@endsection