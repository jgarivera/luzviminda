@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/donationforms.css') }}">
    <title>Donation Form</title>
@endsection

@section('body')

<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m" style="border-bottom: 3px solid #14976B;">
<center><img src="{{ asset('images/resilient ph logo.png') }}" style="width:250px;" /></center>
    <h3 class="uk-card-title">You chose to donate to Resilient PH</h3>
    
    <center><div class="line" style="border-bottom: 3px solid #14976B;"> </div></center>
    
    <form style="padding: 20px;">
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

    <center><a href="{{ route('donation-form1-resilientph') }}" class="form-btns">Reset</a> <a href="{{ route('donation-form2-resilientph') }}" class="form-btns">Next</a></center>
</div>
@endsection