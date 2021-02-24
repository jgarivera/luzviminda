@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/orgprofile.css') }}">
    <title>Organization Profile</title>
@endsection

@section('body')
<!--
<section class="sec1">
    <div class="orgcolor"></div> 
    <div class="heading"> 
        <button class="button-back" onclick="window.location.href='{{ route('partner-orgs') }}'">
            <i class="fa fa-arrow-left" style="font-size:15 px;"></i> Back 
        </button>
        

        <h1>Resilient PH</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper.
        Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. </p>

        <button class="button-donatenow" onclick="window.location.href='{{ route('donation-form1-resilientph') }}'">Donate Now!</button>
        
    </div><!--heading-->
<!--
    <div class="containerIMG">
       <img src="{{asset('images/volunteers.jpg')}}"/>
    </div> 

    <div class="overlay1">
        <div class="logo">
            <img src="{{ asset('images/resilient ph logo.png') }}" />
        </div>
    </div> 
</section>
-->
<div class="uk-container">
        <div id="forMore" class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="images/sample-logo.png">
                            </div>
                            <div class="uk-width-expand" style="text-align: left">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Cebu Sinulog PH</h3>
                                <!-- organization date established -->
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="{{ route('org-profile') }}" class="uk-button uk-button-text">Visit Organization</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="images/sample-logo.png">
                            </div>
                            <div class="uk-width-expand" style="text-align: left">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Cebu Sinulog PH</h3>
                                <!-- organization date established -->
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="{{ route('org-profile') }}" class="uk-button uk-button-text">Visit Organization</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="images/sample-logo.png">
                            </div>
                            <div class="uk-width-expand" style="text-align: left">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Cebu Sinulog PH</h3>
                                <!-- organization date established -->
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="{{ route('org-profile') }}" class="uk-button uk-button-text">Visit Organization</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

<section class="sec2">
    <h1>What We Do</h1>

        <div class="container container-left">
            <div class="elipse">
                <i class="fa fa-users"  style="font-size:40px; color: #14976B;"></i>
            </div>
            
            <h2>Community Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>

        <div class="container container-mid"> <div class="elipse">
                <i class="fa fa-archive" style="font-size:40px; color: #14976B;"></i>
            </div>
            
            <h2>Donation Drives</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>

        <div class="container container-right"> 
            <div class="elipse">  
                <i class="fa fa-credit-card-alt" style="font-size:40px; color: #14976B;"></i>
            </div>
            
            <h2>Funds Management</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
        
        </div>
</section>

<section class="sec3">

<h1>Stories</h1>
    <div class="containerStories container-left">
        <div class="storyPic">
            <img src="{{asset('images/fundraiser.jpg')}}"/>
        </div>
        <h2>Fundraising Events</h2>
        <div class="StoriesLine"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        </p>
        <button class="button button-readmore" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>
        
    <div class="containerStories container-mid">
        <div class="storyPic">
            <img src="{{asset('images/donorRecepient.jpg')}}"/>
        </div>
        <h2>Donor and Recipient Moments</h2>
        <div class="StoriesLine"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        </p>
        <button class="button button-readmore" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>

    <div class="containerStories container-right">
    <div class="storyPic">
            <img src="{{asset('images/donate.jpg')}}"/>
        </div>
        <h2>#RollyPH Donation Drive</h2>
        <div class="StoriesLine"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
        </p>
        <button class="button button-readmore" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>

</section>


@endsection