@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/partnerorg.css') }}">
@endsection

@section('body')
<div class="body">
    <div class="heading">
        <div class="heading heading-main">
            <h1>Partner Organizations</h1>
        </div>
        <div class="heading heading-sub">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. </p>
        </div>
    </div>

    <button class="button button-viewmore">
        <div class="elipse">
            <i class="fa fa-arrow-down" style="font-size:20px;"></i>
        </div>
        <div class="text">
            <h10>Scroll down for more</h10>
        </div>
</button>

    <div class="container container-left">
        <img class="logo" src="{{ asset('images/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('images/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>

    <div class="container container-mid">
    <img class="logo" src="{{ asset('images/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('images/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>

    <div class="container container-right">
    <img class="logo" src="{{ asset('images/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('images/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>
</div>
@endsection