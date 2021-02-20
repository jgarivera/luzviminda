@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/confirmationpage.css') }}">
@endsection

@section('body')
<div class="uk-section uk-light uk-background-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(css/volunteers.jpg)">
    <img src="{{ asset('css/resilient ph logo.png') }}" />
    <div class="heading">
        <div class="heading heading-main">
            <h1>Thank you Juan Dela Cruz for your generous donation!</h1>
        </div>
        <div class="heading heading-sub">
            <p>LuzViMinda has saved your donation form and submitted it to ResilientPH</p>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">

        <center><h1>Other Pages</h1></center>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>

            <div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
                <center><h3 class="uk-card-title">Learn more about ResilientPH donation drives here</h3></center>
                <img src="css/volunteers.jpg">
                <center><a href="orgprofile" class="form-btns">Go to Page</a></center>
            </div>
            
            <div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
                <center><h3 class="uk-card-title">Learn more about other Partner Organizations here</h3></center>
                <img src="css/volunteers.jpg">
                <center><a href="partnerorg" class="form-btns">Go to Page</a></center>
            </div>

            <div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
                <center><h3 class="uk-card-title">Learn more about Disaster Resiliency here</h3></center>
                <img src="css/volunteers.jpg">
                <center><a href="/" class="form-btns">Go to Page</a></center>
            </div>
        </div>
    </div>
</div>

@endsection