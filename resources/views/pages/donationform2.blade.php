@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/donationforms.css') }}">
@endsection

@section('body')

<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"><img class="logo" src="{{ asset('css/sample-logo.png') }}">You chose to donate to Resilient PH</h3>

    <form>
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Please fill the form so we may acknowledge you properly</legend>

        <div class="uk-margin">
        
        <label class="uk-form-label" for="form-horizontal-text">Donation Pledge:*</label>
        <div class="uk-form-controls uk-form-controls-text">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-text">Purpose:</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-select">Money Transfer Type:*</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select">
                <option>-select-</option>
                <option>Bank Transfer</option>
                <option>Debit Payment</option>
            </select>
        </div>

        <label class="uk-form-label" for="form-horizontal-select">Message to Organization:</label>
            <textarea class="uk-textarea" rows="5" placeholder="Write message here"></textarea>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label class="agreement"><input class="uk-checkbox" type="checkbox" checked>  I permit LuzViMinda services and the organization of my choice to have access to the given information upon Agreement of Terms and Conditions.*</label>
        </div>

        </div>

    </fieldset>

    </form>

    <a href="#" class="form-btns">Submit</a>
</div>
@endsection