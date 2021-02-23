@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/donationforms.css') }}">
    <title>Donation Form</title>
@endsection

@section('body')

<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
<center><img src="{{ asset('images/resilient ph logo.png') }}" style="width:250px;" /></center>
    <h3 class="uk-card-title">You chose to donate to Resilient PH</h3>

    <center><div class="line"> </div></center>

    <form style="padding: 20px;">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Please fill the form so we may acknowledge you properly</legend>

        <div class="uk-margin">
        
        <label class="uk-form-label" for="form-horizontal-text">Donation Pledge:*</label>
        <div class="uk-form-controls uk-form-controls-text">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-select">Purpose:</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select">
                <option>non-specific donation drive</option>
                <option>Donation Drive 1</option>
                <option>Donation Drive 2</option>
            </select>
        </div>

        <label class="uk-form-label" for="form-horizontal-select">Money Transfer Type:*</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select">
                <option>-select-</option>
                <option>Bank Transfer</option>
                <option>Debit Payment</option>
                <option>Money Order</option>
                <option>Cheque</option>
            </select>
        </div>

        <label class="uk-form-label" for="form-horizontal-select">Message to Organization:</label>
            <textarea class="uk-textarea" rows="5" placeholder="Write message here"></textarea>

        <center><div class="line"> </div></center>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label class="agreement"><input class="uk-checkbox" type="checkbox">  I permit LuzViMinda services and the organization of my choice to have access to the given information upon Agreement of Terms and Conditions.*</label>
        </div>

        </div>

    </fieldset>

    </form>

    <center><a href="{{ route('donation-confirm') }}" class="form-btns">Submit</a></center>
</div>
@endsection