@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/testorg.css') }}">
    <title>Organization Profile</title>
@endsection

@section('body')
<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
    <div class="uk-cover-container uk-light uk-flex uk-flex-middle top-wrap-height" 
    style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/volunteers.jpg');background-repeat: no-repeat; background-size: cover; 
    height: auto;padding: 50px; margin-top:-120px;">
        <!-- TOP CONTAINER -->
        <div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" style="padding: 50px" data-uk-parallax="y: 0,50; easing:0; opacity:0.2" style="transform: translateY(0px); opacity: 1;">
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-border-rounded uk-grid-item-match" style="background-color: rgba(0,0,0,0.8); padding: 20px">
                    <div class="" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: &gt; *; delay: 150">
                        <h1 class="uk-scrollspy-inview uk-animation-slide-right-medium" style="">Resilient PH</h1>
                        <h6 class="uk-margin-remove-top uk-text-primary uk-margin-small-bottom uk-scrollspy-inview uk-animation-slide-right-medium">Vigilance. Understanding. Collaboration. Action.</h6>
                        <p class="subtitle-text uk-visible@s uk-scrollspy-inview uk-animation-slide-right-medium" style="color: white; text-align: justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
                        <a href="#" title="Learn More" class="uk-button uk-button-primary uk-border-pill uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy-class="uk-animation-fade" style="">LEARN MORE</a>
                    </div>
                </div>
                <div style="margin: auto auto">
                    <img style="" src="{{ asset('images/resilient ph logo.png') }}" />
                </div>
            </div>
        </div>
        <!-- /TOP CONTAINER -->
        <!-- TOP IMAGE -->
        <!-- <img src="Mimages/volunteers.jpg"> -->
        <!-- /TOP IMAGE -->
        <div class="uk-position-bottom-center uk-position-medium uk-position-z-index uk-text-center" style="margin-top: 20px">
        <a href="#whatWeDo" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2" class="uk-icon"><svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="10.5,16.08 5.63,10.66 6.37,10 10.5,14.58 14.63,10 15.37,10.66"></polygon><line fill="none" stroke="#000" x1="10.5" y1="4" x2="10.5" y2="15"></line></svg></a>
    </div>
</div>
   
</div>
<br>
<!-- <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid style="margin-top: -120px; height: 600px; background-color: rgba(0,0,0,0.0);">
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="images/volunteers.jpg" style="object-fit: fit;" alt="" uk-cover>
    </div>
    <div style="background-color: rgba(255,255,255,0.5); padding-top: 7%">
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div> -->
<hr class="uk-divider-small uk-margin-large" style="text-align: center">
<div class="uk-container">
    <!---WHAT WE DO-->
    <div class="uk-width-expand" style="text-align: center;">
        <h1 id="whatWeDo" class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold; font-size: 60px; ">We are capable of...</h1>
    
        <div id="forMore" class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/fundraiser.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                    <i class="fa fa-users" style="margin-top: 25px; font-size:50px; color: rgb(72, 231, 79);"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                        <h3 class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px;padding-top:20px">Community Service</h3>
                        <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                    </div>
                    <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default  uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/donorRecepient.jpg');background-repeat: no-repeat; 
                    background-size: cover; background-position: center">
                            <div class="uk-grid-large uk-flex-center" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                        <i class="fa fa-archive" style="margin-top: 25px; font-size:50px; color: rgb(72, 231, 79);"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                            <h3 class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                            font-size: 28px;padding-top:20px">Donation Drives</h3>
                            <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                        </div>
                        <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                        </div>
                    </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #14976B;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/donate.jpg');
                    background-repeat: no-repeat; background-size: cover; background-position: center">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                    <i class="fa fa-credit-card-alt" style="margin-top: 25px; font-size:50px; color: rgb(72, 231, 79);"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                        <h3 class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                         font-size: 28px;padding-top:20px">Funds Management</h3>
                         <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                    </div>
                    <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    <hr class="uk-divider-small uk-margin-large" style="text-align: center">
    <!---STORIES--->
    <div class="uk-width-expand" style="text-align: center;">
        <h1 class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; 
        font-weight: bold; font-size: 60px; ">Recently, we have done</h1>
    
        <div class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/fundraiser.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">Fundraising Events</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                       
                    <div class="uk-card-body">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #14976B;">Read More...</button>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/donorRecepient.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">Donor and Receipent</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                       
                    <div class="uk-card-body">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #14976B;">Read More...</button>
                </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(72, 231, 79, 0.4) ), url('images/donate.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">#RollyPH Donation Drive</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#14976B"></div>
                       
                    <div class="uk-card-body">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique.</p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #14976B;">Read more...</button>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    </div><!--uk-width-expand-->
</div><!--container-->

@endsection