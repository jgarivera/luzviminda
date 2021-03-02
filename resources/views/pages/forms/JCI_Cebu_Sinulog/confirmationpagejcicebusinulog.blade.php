
@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/forms/confirmationpage.css') }}">
    <title>Thank You!</title>
    <link rel="icon" href="{{ asset('images/Luz-Logo_2.png') }}" type="image/icon type">
@endsection

@section('body')
<div class="uk-section uk-light uk-background-cover" style="text-align:center; background-image: linear-gradient(rgba(0, 0, 0, 0.3
), 
rgba(0, 0, 0, 1)), url(images/helping-hand.jpeg); margin-top:-120px; background-repeat: no-repeat; background-size: cover; 
    height: 550px; padding-top: 75px">
    <img src="{{ asset('images/jci-logo.jpg') }}" style="width:250px; border-radius: 50%;" />
    <div class="heading">
        <div class="heading heading-main">
            <h1>Thank you Juan Dela Cruz for your generous donation!</h1>
        </div>
        <div class="heading heading-sub">
            <p>LuzViMinda has saved your donation form and submitted it to JCI Cebu Sinulog</p>
        </div>
        <div class="uk-text-center uk-margin-medium-top">
            <a id="moreOtherPages" href="#otherPages" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2" class="uk-icon"><svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="10.5,16.08 5.63,10.66 6.37,10 10.5,14.58 14.63,10 15.37,10.66"></polygon><line fill="none" stroke="#000" x1="10.5" y1="4" x2="10.5" y2="15"></line></svg></a>
        </div>   
    </div>
</div>
<br>
<hr class="uk-divider-small uk-margin-large" style="text-align: center">
<div class="uk-container">
    <section id="otherPages" class="sec2">
        <h1>Other Pages</h1>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), 
                rgba(0, 0, 0, 1)), url(images/donation.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="uk-card-header">
                        <div class="elipse">
                            <i class="fa fa-archive"></i>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h2>Learn more about JCI Cebu Sinulog donation drives here</h2>
                    </div>
                    <div class="uk-card-footer" style="text-align: center">
                        <button class="uk-button uk-button-primary gotopage" onclick="window.location.href='{{ route('JCI-Cebu-Sinulog') }}'">Go to Page</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), 
                rgba(0, 0, 0, 1)), url(images/porg.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="uk-card-header">
                        <div class="elipse">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h2>Learn more about other Partner Organizations here</h2>
                    </div>
                    <div class="uk-card-footer" style="text-align: center">
                        <button class="uk-button uk-button-primary gotopage" onclick="window.location.href='{{ route('partner-orgs') }}'">Go to Page</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), 
                rgba(0, 0, 0, 1)), url(images/drrr.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="uk-card-header">
                        <div class="elipse">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h2>Learn more about building Disaster Resiliency here</h2>
                    </div>
                    <div class="uk-card-footer" style="text-align: center">
                        <button class="uk-button uk-button-primary gotopage" onclick="window.location.href='{{ route('index') }}'">Go to Page</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection