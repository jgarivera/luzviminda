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

    <style>
        .map-overlay {
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            position: absolute;
            width: 200px;
            top: 0;
            left: 0;
            padding: 10px;
        }
        
        .map-overlay .map-overlay-inner {
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .map-overlay-inner fieldset {
            border: none;
            padding: 0;
            margin: 0 0 10px;
        }
        
        .map-overlay-inner fieldset:last-child {
            margin: 0;
        }
        
        .map-overlay-inner select {
            width: 100%;
        }
        
        .map-overlay-inner label {
            display: block;
            font-weight: bold;
            margin: 0 0 5px;
        }
        
        .map-overlay-inner button {
            display: inline-block;
            width: 36px;
            height: 20px;
            border: none;
            cursor: pointer;
        }
        
        .map-overlay-inner button:focus {
            outline: none;
        }
        
        .map-overlay-inner button:hover {
            box-shadow: inset 0 0 0 3px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

@section('body')
    <!-- Map container -->
    <div id="map"></div>

    <div class="map-overlay top">
        <div class="map-overlay-inner">
            <h3>Municipality</h3>
            <p>Pangasinan, Pangasinan</p>
        </div>
    </div>
@endsection