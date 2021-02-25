@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/forms/confirmationpage.css') }}">
    <title>Thank You!</title>
@endsection

@section('body')
<div class="uk-section uk-light uk-background-cover" style="text-align:center; background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/helping-hand.jpeg)">
<img src="{{ asset('images/jci-logo.jpg') }}" style="width:250px; border-radius: 50%;" />
    <div class="heading">
        <div class="heading heading-main">
            <h1>Thank you Juan Dela Cruz for your generous donation!</h1>
        </div>
        <div class="heading heading-sub">
            <p>LuzViMinda has saved your donation form and submitted it to JCI Cebu Sinulog</p>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">

        <h1 style="color:white;text-align:center">Other Pages</h1>
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div class="uk-card uk-card-secondary">
                <h3 class="uk-card-title">Learn more about JCI Cebu Sinulog donation drives here</h3>
                <img src="{{ asset('images/jci-logo.jpg') }}" style="width:180px;"/>
                <div class="uk-card-footer">
                    <a href="orgprofile" class="form-btns">Go to Page</a>
                </div>
            </div>
            <div class="uk-card uk-card-secondary">
                <h3 class="uk-card-title">Learn more about other Partner Organizations here</h3>
                <img src="{{ asset('images/volunteers.jpg') }}" style="width:240px;"/>
                <div class="uk-card-footer">
                    <a href="partnerorg" class="form-btns">Go to Page</a>
                </div>
            </div>

            <div class="uk-card uk-card-secondary">
                <h3 class="uk-card-title">Learn more about building Disaster Resiliency here</h3>
                <img src="{{ asset('images/NDRM.png') }}" style="width:180px;"/>
                <div class="uk-card-footer">
                    <a href="/" class="form-btns">Go to Page</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection