@extends('layouts.master')

@section('head')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('css/partnerorg.css') }}">
    <title>Landing Page</title>
@endsection

@section('body')
    <div class="uk-container">
        <div class="heading">
            <div class="heading heading-main">
                <h1>Partner<br> Organizations</h1>
            </div>
            <div class="heading heading-sub uk-width-1-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum eros tincidunt congue tristique. Sed sodales euismod metus, blandit finibus dolor tincidunt a. Curabitur rhoncus orci nec rhoncus semper. </p>
            </div>
            <a href="#forMore" uk-scroll><button class="uk-button uk-button-default uk-border-pill" style="background-color: #fff"><span uk-icon="icon: chevron-down"></span>
            Scroll down for more</button></a>
        </div>
        <hr class="uk-divider-small uk-margin-large-top">
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
@endsection


