@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
    h1, p, h10, h12, h11, h13 {
        position: absolute;
        font-style: normal;
        color: rgba(255, 255, 255, 0.8);
        left: 0px;
        line-height: 24px;
    }

    p {
        font-weight: normal;
        font-size: 20px;
        }

    h1 {
        font-weight: bold;
        font-size: 40px;
        }
    
    
    h10 {
        top: 0px;
        font-weight: bold;
        font-size: 17px;
    }

    h12 {
        top: 10px;
        font-weight: bold;
        font-size: 17px;
    }

    h11 {
        top: 30px;
        font-weight: normal;
        font-size: 13px;
    }

    h13 {
        left: 25%;
        top: 8px;
        font-weight: normal;
        font-size: 15px;
    }

    i {
        margin: 6px;
        color: white;
    }

    </style>

    <style>
    .body {
        position: relative;
        width: 100%;
        height: 1880px;
    }

    .heading {
        position: absolute;
        width: 1180px;
        height: 250px;
        left: 90px;
        top: 100px;
    }

    .heading-main {
        left: 0px;
        width: 1080px;
        height: 75px;
        top: 0px;
    }

    .heading-sub {
        position: absolute;
        width: 810px;
        height: 75px;
        top: 75px;
        left: 0px;
    }

    .button {
        position: absolute;
        background: rgba(255, 255, 255, 0.2);
        height: 40px;
        border-radius: 50px;
    }

    .button-viewmore {
        width: 240px;
        left: 90px;
        top: 350px;
        border: 1px solid rgba(255, 255, 255, 0.8);
        background: none;
        box-sizing: border-box;
        font-weight: bold;
        font-size: 17px;
        color: rgba(255, 255, 255, 0.8);
    }

    .button-visitbutton {
        width: 85%;
        left: 20px;
        top: 375px;
        border: 1px solid rgba(255, 255, 255, 0.8);
        background: none;
        box-sizing: border-box;
        font-weight: bold;
        font-size: 17px;
        color: rgba(255, 255, 255, 0.8);
    }

    .elipse {
        position: absolute;
        width: 30px;
        height: 30px;
        left: 5px;
        top: 4px;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
    }

    .text {
        position: absolute;
        width: 215px;
        height: 35px;
        left: 45px;
        top: 7px;
    }

    .container {
        background: rgba(20, 151, 107, 0.20);
        position: absolute;
        width: 330px;
        height: 440px;
        top: 500px;
    }

    .container-left {
        left: 90px;
    }

    .container-mid {
        left: 470px;
    }

    .container-right {
        left: 850px;
    }

    .logo {
        border-radius: 50%;
        background-position: left top;
        background-repeat: repeat;
        padding: 20px;
        width: 100px;
        height: 100px;
    }

    .org {
        position: absolute;
        top: 20px;
        width: 200px;
        height: 70px;
        left: 100px;
    }

    .box {
        position: absolute;
        top: 0px;
        width: 100%;
        height: 200px;
    }

    .orgimage {
        position: absolute;
        object-fit: cover;
        top: 100px;
        width: 100%;
        height: 250px;
        left: -20px;
    }
    </style>
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