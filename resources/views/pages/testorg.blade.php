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
    <!---WHAT WE DO-->
    <div class="uk-width-expand" style="text-align: center;">
        <h1 class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold; font-size: 60px; ">What We Do</h1>
    
        <div id="forMore" class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                    <div class="uk-card-header" style="border:none;">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" width="50" height="50" style="background: #191A1E; margin-top:20px">
                                    <i class="fa fa-users" style="font-size:50px; color: #14976B;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand" style="text-align: center;">
                        <h3 class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top:20px;">Community Services</h3>
                    </div>

                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                        <div class="uk-card-header" style="border:none;">
                            <div class="uk-grid-large uk-flex-center" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-border-circle" width="150" height="150" style="background: #191A1E; margin-top:20px">
                                        <i class="fa fa-archive" style="font-size:50px; color: #14976B;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand" style="text-align: center;">
                            <h3 class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                             font-size: 28px; margin-top:20px;">Donation Drives</h3>
                        </div>

                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                        </div>
                    </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                    <div class="uk-card-header" style="border:none;">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" style="background: #191A1E; margin-top:20px">
                                    <i class="fa fa-credit-card-alt" style="font-size:50px; color: #14976B;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand" style="text-align: center;">
                        <h3 class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                         font-size: 28px; margin-top:20px;">Funds Management</h3>
                    </div>

                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    </div><!--uk-width-expand-->
</div><!--container-->




























<div class="uk-container">
    <!---STORIES--->
    <div class="uk-width-expand" style="text-align: center;">
        <h1 class="uk-card-title uk-margin-remove-bottom uk-margin-xlarge-top" style="color:white; font-family: Montserrat; 
        font-weight: bold; font-size: 60px; ">Stories</h1>
    
        <div id="forMore" class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; margin-top: 145px;">
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" width="340px;" height="290px;" style="margin-top: -145px" alt="">
                    </div>
                    <div class="uk-width-expand" style="text-align: center;">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top:40px;">Fundraising Events</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                       
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button class="uk-button uk-button-large uk-text-capitalize uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="border: 1px solid #14976B; font-size: 18px; width:220px; color: #14976B; background:none;">Read More...</button>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; margin-top: 145px;">
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" width="340px;" height="290px;" style="margin-top: -145px" alt="">
                    </div>
                    <div class="uk-width-expand" style="text-align: center;">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top:40px;">Donor and Recipient</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                        
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button class="uk-button uk-button-large uk-text-capitalize uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="border: 1px solid #14976B; font-size: 18px; width:220px; color: #14976B; background:none;">Read More...</button>
                </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default" style="background: #222427; color:white; margin-top: 145px;">
                    <div class="uk-card-media-top">
                        <img src="images/helping-hand.jpeg" width="340px;" height="290px;" style="margin-top: -145px" alt="">
                    </div>
                    <div class="uk-width-expand" style="text-align: center;">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top:40px;">#RollyPH Donation Drive</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                        
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button class="uk-button uk-button-large uk-text-capitalize uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="border: 1px solid #14976B; font-size: 18px; width:220px; color: #14976B; background:none;">Read More...</button>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    </div><!--uk-width-expand-->
</div><!--container-->



@endsection