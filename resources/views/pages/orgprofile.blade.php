@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/orgprofile.css') }}">
@endsection

@section('body')
<section class="sec1">
    <div class="orgcolor"></div> 
    <div class="heading">
        <button class="button-back" href="#">
            <i class="fa fa-arrow-left" style="font-size:15 px;"></i>Back
        </button>

        <h1>Resilient PH</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper.
        Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. </p>

        <button class="button-donatenow">Donate Now!</button>
        
    </div><!--heading-->

    <div class="containerIMG">
       <img src="{{asset('images/volunteers.jpg')}}"/>
    </div> 

    <div class="overlay1">
        <div class="logo">
            <img src="{{ asset('images/resilient ph logo.png') }}" />
        </div>
    </div> 
</section>


<section class="sec2">
    <h1>What We Do</h1>

        <div class="container container-left">
            <div class="elipse">
                <i class="fa fa-arrow-down" style="font-size:50px; color: #14976B;"></i>
            </div>
            
            <h2>Consultancy Servies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>

        <div class="container container-mid"> <div class="elipse">
                <i class="fa fa-arrow-down" style="font-size:50px; color: #14976B;"></i>
            </div>
            
            <h2>Consultancy Servies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>

        <div class="container container-right"> 
            <div class="elipse">  
                <i class="fa fa-arrow-down" style="font-size:50px; color: #14976B;"></i>
            </div>
            
            <h2>Consultancy Servies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>

        <!---
        <button class="button button-viewmore">
                <div class="elipse">
                    <i class="fa fa-arrow-down" style="font-size:20px;"></i>
                </div>
                <div class="text">
                    <h10>Back</h10>
                </div>
            </button>-->
</section>

<section class="sec3">
    <div class="container container-left">
        <div class="elipse">
            <i class="fa fa-arrow-down" style="font-size:50px; color: #14976B;"></i>
        </div>
        
        <h2>Consultancy Servies</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
    
        <div class="box">
            <img class="orgimage" src="{{asset('images/helping-hand.jpeg')}}"/>
        </div>

        <button class="button button-visitbutton">Visit Organization</button>
    </div>
        
    <div class="container container-mid">
        <img class="logo1" src="{{ asset('images/sample-logo.png') }}" />
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
        <img class="logo1" src="{{ asset('images/sample-logo.png') }}" />
        <div class="org">
            <h12>Resilience PH</h12>
            <h11>Philippines</h11>
        </div>
        <div class="box">
            <img class="orgimage" src="{{asset('images/helping-hand.jpeg')}}"/>
        </div>
        <button class="button button-visitbutton">Visit Organization</button>
    </div>

</section>

@endsection