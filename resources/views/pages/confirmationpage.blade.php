@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/confirmationpage.css') }}">
    <title>Thank You!</title>
@endsection

@section('body')
<div class="uk-section uk-light uk-background-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/helping-hand.jpeg)">
<center><img src="{{ asset('images/resilient ph logo.png') }}" style="width:250px;" /></center>
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

        <center><h1 style="color:white;">Other Pages</h1></center>

        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title">Learn more about ResilientPH donation drives here</h3>
                <div class="thumbnail" style="background-image: url(images/resilient ph logo.jpg);"> </div>
                <a href="orgprofile" class="form-btns">Go to Page</a>
            </div>
            
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title">Learn more about other Partner Organizations here</h3>
                <div class="thumbnail" style="background-image: url(images/volunteers.jpg);"> </div>
                <a href="partnerorg" class="form-btns">Go to Page</a>
            </div>

            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title">Learn more about Disaster Resiliency here</h3>
                <div class="thumbnail" style="background-image: url(images/NDRM.png);"> </div>
                <a href="/" class="form-btns">Go to Page</a>
            </div>
        </div>
    </div>
</div>

@endsection