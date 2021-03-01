@extends('layouts.master-dashboard')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/resilient.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/editor.css') }}">
    <title>JCI Cebu Sinulog</title>
@endsection

@section('body')
<!-- <div class="uk-card uk-card-secondary uk-card-body" style="z-index: 980;" uk-sticky="offset: 100;">
    <h3> JCI Cebu Sinulog's Organization Page </h3>
    <button class="button button-save" onclick="window.location.href='{{ route('dashboard.org-page-editor') }}'">Save</button>                    
</div> -->
<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
    <div class="uk-cover-container uk-light uk-flex uk-flex-middle top-wrap-height" 
    style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/jci-cebu-header.jpg');background-repeat: no-repeat; background-size: cover; 
    height: auto;padding: 50px; margin-top:-120px;">
        <!-- TOP CONTAINER -->
        <div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" style="padding: 50px" data-uk-parallax="y: 0,50; easing:0; opacity:0.2" style="transform: translateY(0px); opacity: 1;">
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-border-rounded uk-grid-item-match" style="background-color: rgba(0,0,0,0.8); padding: 20px">
                    <div class="" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: &gt; *; delay: 150">
                        <h1 contenteditable="true" class="uk-scrollspy-inview uk-animation-slide-right-medium" style="">JCI Cebu Sinulog</h1>
                        <h6 contenteditable="true" class="uk-margin-remove-top uk-text-primary uk-margin-small-bottom uk-scrollspy-inview uk-animation-slide-right-medium">Vigilance. Understanding. Collaboration. Action.</h6>
                        <p contenteditable="true" class="subtitle-text uk-visible@s uk-scrollspy-inview uk-animation-slide-right-medium" style="color: white; text-align: justify">The Junior Chamber International (JCI) is a global organization of young active citizens, purposely aimed to create positive change in local communities.
                        Our local Organization (LO), JCI Philippines Cebu Sinulog, Inc., is a local organization in the country committed to 
                        realizing this aim through various humanitarian projects.
                        <br><br>
                        <b>JCI Declaration of Principles:</b> We believe that faith in God gives meaning and purpose to human life, that brotherhood
                        of man transcends the sovereignty of nations, that economic justice can be best won by free men through free enterprise,
                        that government should be of laws rather than of men, that Earth's greatest treasure lies in human personality,
                        and that service to humanity is the best work of life. -C. william Brownfield, 1946</p>
                        <!--<a href="#" title="Learn More" class="uk-button uk-button-primary uk-border-pill uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy-class="uk-animation-fade" style="">LEARN MORE</a>-->
                        <a href="{{ route('donation-form1-jci-cebu-sinulog') }}" title="Donate More" class="uk-button uk-button-primary uk-border-pill uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy-class="uk-animation-fade" style="" contenteditable="true">DONATE NOW</a>
                    </div>
                </div>
                <div style="margin: auto auto">
                    <img style="" src="{{ asset('images/jci-logo-nobg.png') }}" />
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
        <h1 contenteditable="true" id="whatWeDo" class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold; font-size: 60px; ">We are capable of...</h1>
    
        <div id="forMore" class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #b47024;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/fundraiser.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                    <i class="fa fa-users" style="margin-top: 25px; font-size:50px; color: rgb(180, 112, 36);"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                        <h3 contenteditable="true" class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px;padding-top:20px">Projecting<br>Sustainable Solutions</h3>
                        <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                    </div>
                    <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                        <p contenteditable="true">Make future sustainable projects that adapts to an ever changing society.<br><br></p>
                    </div>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default  uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #b47024;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/donorRecepient.jpg');background-repeat: no-repeat; 
                    background-size: cover; background-position: center">
                            <div class="uk-grid-large uk-flex-center" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                        <i class="fa fa-archive" style="margin-top: 25px; font-size:50px; color: rgb(180, 112, 36);"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                            <h3 contenteditable="true" class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                            font-size: 28px;padding-top:20px">Empowering<br> Young People</h3>
                            <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                        </div>
                        <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                            <p contenteditable="true">Encourage more young people in participating towards JCI's future advocacy and enhance leadership skills, creating better leaders.</p>
                        </div>
                    </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white; border-bottom: 4px solid #b47024;">
                    <div class="uk-card-header" style="border:none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/donate.jpg');
                    background-repeat: no-repeat; background-size: cover; background-position: center">
                        <div class="uk-grid-large uk-flex-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-border-circle" style="background: #191A1E; height: 100px; width: 100px; text-align: center">
                                    <i class="fa fa-credit-card-alt" style="margin-top: 25px; font-size:50px; color: rgb(180, 112, 36);"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand" style="text-align: center; padding-bottom: 3px;">
                        <h3 contenteditable="true" class="uk-card-title what-we-do uk-margin-remove-bottom" style="color:white; font-family: Montserrat; font-weight: bold;
                         font-size: 28px;padding-top:20px">Creating<br>Opportunities</h3>
                         <hr class="uk-divider-small" style="text-align: center; margin-bottom: 0px;">
                    </div>
                    <div class="uk-card-body" style="padding-top: 20px;padding-bottom: 30px;">
                        <p contenteditable="true">Make future projects that create opportunities for a lot people.<br><br><br></p>
                    </div>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    <hr class="uk-divider-small uk-margin-large" style="text-align: center">
    <!---STORIES--->
    <div class="uk-width-expand" style="text-align: center;">
        <h1 contenteditable="true" class="uk-card-title uk-margin-remove-bottom" style="color:white; font-family: Montserrat; 
        font-weight: bold; font-size: 60px; ">Recently, we have done</h1>
    
        <div class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
            <div><!--left-card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/estate-planning.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 contenteditable="true" class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">Estate Planning 101</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#b47024"></div>
                       
                    <div class="uk-card-body">
                        <p contenteditable="true" style="text-align: justify">Estate Planning is not only for the wealthy — everybody can benefit from ensuring their assets 
                        and finances are properly taken care of after their death. It’s more than just making a will, 
                        although that’s certainly an important part of it. <br><br> It provides a way for you to ensure that 
                        the people you care are provided for during the difficult time that follows losing a loved one.</p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #b47024;">Read More...</button>
                </div><!--uk-card-->
            </div><!--left--->

            <div> <!--middle card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/zero-waste-swap.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 contenteditable="true" class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">Zero Waste Swap</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#b47024"></div>
                       
                    <div class="uk-card-body">
                        <p contenteditable="true" style="text-align: justify">JCI Cebu Sinulog in partnership with Bubble.Ph will be joining the Pop District Bazaar Holiday - The Most Wonderful Time of the year this December 10 and 11, 2018.
        <br><br>Bring your used shampoo bottles and get awesome discounts on every Bubble.Ph shampoo bar purchase!<br><br><br></p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #b47024;">Read More...</button>
                </div><!--uk-card-->
            </div><!--mid-->

            <div> <!---right card-->
                <div class="uk-card uk-card-default uk-border-rounded" style="background: #222427; color:white;">
                    
                    <div class="uk-card-media-top uk-margin-small-top" style="margin:auto auto; margin-top:20px; height: 200px">
                        <div class="uk-border-rounded"
                        style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(180, 112, 36, 0.4) ), url('../images/give-it-a-shot.jpg');background-repeat: no-repeat; 
                        background-size: cover; background-position: center; min-width: 100%; height:100%;" alt=""></div>
                    </div>
                    
                    <div style="text-align: center; width: 90%; margin: auto auto">
                        <h3 contenteditable="true" class="uk-card-title" style="color:white; font-family: Montserrat; font-weight: bold;
                        font-size: 28px; margin-top: 20px">Give it a Shot 2</h3>
                    </div>
                    <div class="uk-flex-inline uk-flex-center uk-margin-small-top" style="height:1px; width:130px; background:#b47024"></div>
                       
                    <div class="uk-card-body">
                        <p contenteditable="true" style="text-align: justify">This project is an indoor target shooting activity for a cause. For those who have been asking and messaging us, we are proud to announce that Give It A Shot 2 will now be happening on January 11, 2020!
                        <br><br>Proceeds will be used to fund the future projects of JCI Cebu Sinulog.<br><br><br></p>
                    </div>
                    
                    <button id="readMore" class="uk-button uk-button-primary uk-text-capitalize uk-border-pill uk-margin-medium-bottom" onclick="window.location.href='{{ route('index') }}'"
                    style="font-size: 18px; width:220px;background-color: #b47024;">Read more...</button>
                </div><!--uk-card-->
            </div><!--right-->
        </div><!---formore-->
        <br>
    </div><!--uk-width-expand-->
    <button class="button button-save" onclick="window.location.href='{{ route('dashboard.org-page-editor') }}'">Save</button>
</div><!--container-->

@endsection