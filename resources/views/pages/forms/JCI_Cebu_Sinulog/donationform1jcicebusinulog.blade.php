@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/forms/donationforms.css') }}">
    <title>Donation Form</title>
    <link rel="icon" href="{{ asset('images/Luz-Logo_2.png') }}" type="image/icon type">
@endsection

@section('body')
<div class="uk-container">
    <div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m" style="margin: auto auto; border-bottom: 3px solid #b47024;">
    <center><img src="{{ asset('images/jci-logo.jpg') }}" style="width:250px; border-radius: 50%;" /></center>
        <h3 class="uk-card-title">You chose to donate to JCI Cebu Sinulog</h3>
        
        <center><div class="line" style="border-bottom: 3px solid #b47024;"> </div></center>
        
        <form style="padding: 20px;">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Please fill the form so we may acknowledge you properly</legend>

            <div class="uk-margin">
            <br>
            <label class="uk-form-label" for="form-horizontal-text">Name:*</label>
            <div class="uk-form-controls uk-form-controls-text">
                <input class="uk-input" id="form-horizontal-text" type="text">
            </div>

            <br>
            <label class="uk-margin uk-form-label" for="form-horizontal-text">Email (optional):</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text">
            </div>

            <br>
            <label class="uk-form-label" for="form-horizontal-text">Contact Number (optional):</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text">
            </div>
            
            <br>
            <label class="uk-form-label" for="form-horizontal-text">City (optional):</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text">
            </div>
            
            <br>
            <label class="uk-form-label" for="form-horizontal-text">Country (optional):</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text">
            </div>

            </div>

        </fieldset>

        </form>

        <center><a href="{{ route('donation-form1-jci-cebu-sinulog') }}" class="form-btns">Reset</a> <a href="{{ route('donation-form2-jci-cebu-sinulog') }}" class="form-btns">Next</a></center>
    </div>
</div>
<br><br><br>

@endsection