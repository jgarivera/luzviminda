@extends('layouts.master')

@section('head')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Landing Page</title>
@endsection

@section('body')
    <div class="center-content">
        <h1>News</h1>
        <blockquote class="twitter-tweet">
            <p lang="tl" dir="ltr">Bilang tugon sa mga tawag at pagpapahayag ng kagustuhan ng mga kababayan natin na magbigay at magpadala ng tulong sa mga nasalanta ni Bagyong ROLLY, activated nang muli ang ating Donations line and focal person. Paalala lang po, mag-iingat sa mga bogus solicitation. <a href="https://t.co/31FyDrXiKF">pic.twitter.com/31FyDrXiKF</a></p>&mdash; NDRRMC (@NDRRMC_OpCen)
            <a href="https://twitter.com/NDRRMC_OpCen/status/1323838129472638977?ref_src=twsrc%5Etfw">November 4, 2020</a>
        </blockquote>
        
        <!-- https://help.twitter.com/en/using-twitter/how-to-embed-a-tweet -->

        <a href="{{ route('dashboard.index') }}" class="dash">Go to Dashboard</h3>
        <a href=""class="login">Login</a>
    </div>
@endsection