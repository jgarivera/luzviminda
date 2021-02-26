@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/forms/confirmationpage.css') }}">
    <title>Thank You!</title>
@endsection

@section('body')
<div class="uk-section uk-light uk-background-cover" style="text-align:center; background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/helping-hand.jpeg)">
<img src="{{ asset('images/resilient ph logo.png') }}" style="width:250px;" />
    <div class="heading">
        <div class="heading heading-main">
            <h1>Thank you Juan Dela Cruz for your generous donation!</h1>
        </div>
        <div class="heading heading-sub">
            <p>LuzViMinda has saved your donation form and submitted it to ResilientPH</p>
        </div>
    </div>
</div>

<section class="sec2">
    <h1>Other Pages</h1>

        <div class="container container-left">
            <div class="elipse">
                <i class="fa fa-archive"></i>
            </div>
            <h2>Learn more about ResilientPH donation drives here</h2>
            <button class="button button-readmore" onclick="window.location.href='{{ route('org-profile') }}'">Go to Page</button>
        </div>

        <div class="container container-mid">
            <div class="elipse">
                <i class="fa fa-users"></i>
            </div>
            <h2>Learn more about other Partner Organizations here</h2>
            <button class="button button-readmore" onclick="window.location.href='{{ route('partner-orgs') }}'">Go to Page</button>
        </div>

        <div class="container container-right"> 
            <div class="elipse">  
                <i class="fa fa-building"></i>
            </div>
            <h2>Learn more about building Disaster Resiliency here</h2>
            <button class="button button-readmore" onclick="window.location.href='{{ route('index') }}'">Go to Page</button>
        </div>
</section>
@endsection