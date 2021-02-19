@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
    h10, h12, h11, h13 {
        position: absolute;
        font-style: normal;
        color: rgba(255, 255, 255, 0.8);
        left: 0px;
        line-height: 24px;
    }
    .orgcolor{
        position: absolute;
        width: 765px;
        height: 695px;
        left: -25px;
        top: -95px;
        background-color: #14976B;
    }
    
    .heading p {
        position: relative;
        margin-top:20px;

        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 29px;
        text-align: justify;
        color: rgba(255, 255, 255, 1);
        }

    .heading{
        position: absolute;
        width: 718px;
        height: 600px;
        top:0px;
        left:0px;
    }

    .heading h1 {
        position: relative;
        object-fit:container;
        left: 0px;
        top: 0px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 60px;
        line-height: 98px;
        color: #FFFFFF;
        }
    

    .containerIMG{
        position: relative;
        width: 734px;
        height: 695px;
        left: 740px;
        top: -95px;
        background-size: cover;
        background: linear-gradient(rgba(29, 38, 113, 0.8), rgba(195, 55, 100, 0.8));
    }

    
    .containerIMG img{
        object-fit: cover;
        width:780px;
        height: 100%;
    }
    
    .overlay1{
        position: absolute;
        width: 734px;
        height: 695px;
        left: 740px;
        top: -95px;
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.5);
        
    }

    .box {
        position: relative;
        top:180px;
        width: 400px;
        height: 400px;
        margin-left:auto;
        margin-right:auto;
    }

    .box img{
        object-fit:cover;
        min-width: 100%;
        height:100%;
        
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


    
    .button {
        position: absolute;
        background: rgba(255, 255, 255, 0.2);
        height: 40px;
        border-radius: 50px;
    }

    .button-viewmore {
        width: 240px;
        left: 90px;
        top: 750px;
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
        top: 900px;
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

    

    
    </style>
@endsection

@section('body')
<div class="body">
    <div class="orgcolor"></div> 
    <div class="heading">
        <h1>Resilient PH</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. </p>
    </div>

    <div class="containerIMG">
        <img src="{{asset('css/volunteers.jpg')}}"/>
    </div> 
    <div class="overlay1">
        <div class="box">
            <img src="{{ asset('css/resilient ph logo.png') }}" />
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
        <img class="logo" src="{{ asset('css/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('css/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>

    <div class="container container-mid">
    <img class="logo" src="{{ asset('css/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('css/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>

    <div class="container container-right">
    <img class="logo" src="{{ asset('css/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('css/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>
</div>
@endsection