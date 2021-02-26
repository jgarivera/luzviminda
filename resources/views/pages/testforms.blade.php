@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <title>Login</title>
@endsection

@section('body')

<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
<center><img src="{{ asset('images/Luz-logo.png') }}" style="width:100px;" /></center>
    <h3 class="uk-card-title">Welcome to LuzViMinda</h3>
    
    <form>
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
 
        <label class="uk-form-label" for="form-horizontal-text">NGO Account:</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text">
        </div>

        <label class="uk-form-label" for="form-horizontal-text">Password:</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="password">
        </div>
        
        </div>

    </fieldset>

    </form>

    <center><a href="{{ route('dashboard.index') }}" class="form-btns">Login</a></center>
</div>
@endsection