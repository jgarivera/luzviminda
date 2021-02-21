@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/donationforms.css') }}">
    <title>Donation Form</title>
@endsection

@section('body')

<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
    <img src="{{ public_path('images/volunteers.jpg') }} /">
    <h3 class="uk-card-title">You chose to donate to Resilient PH</h3>
    
    <center><div class="line"> </div></center>
    
    <form>
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Please fill the form so we may acknowledge you properly</legend>

        <div class="uk-margin">
        
        <label class="uk-form-label" for="form-horizontal-text">Name:*</label>
        <div class="uk-form-controls uk-form-controls-text">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-text">Email:*</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>
        
        <label class="uk-form-label" for="form-horizontal-text">City:*</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>
        
        <label class="uk-form-label" for="form-horizontal-text">Country:*</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-text">Occupation:*</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        </div>

    </fieldset>

    </form>

    <center><a href="donationform1" class="form-btns">Reset</a> <a href="donationform2" class="form-btns">Next</a></center>
</div>
@endsection