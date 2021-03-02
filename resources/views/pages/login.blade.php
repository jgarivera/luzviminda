@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <title>Login</title>
    <link rel="icon" href="{{ asset('images/Luz-Logo_2.png') }}" type="image/icon type">
@endsection

@section('body')
<div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport" data-uk-height-viewport="" style="min-height: calc(100vh);margin-top: -120px;">
    <div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
        <span class="uk-text-small" style="color: gray">© 2021 Luzviminda - <a href="https://github.com/jg-rivera/luzviminda">by Team RD</a> | Built with <a href="http://getuikit.com/" title="" target="_blank" data-uk-tooltip="" aria-expanded="false"><span data-uk-icon="uikit" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="14.4,3.1 11.3,5.1 15,7.3 15,12.9 10,15.7 5,12.9 5,8.5 2,6.8 2,14.8 9.9,19.5 18,14.8 18,5.3"></polygon><polygon points="9.8,4.2 6.7,2.4 9.8,0.4 12.9,2.3"></polygon></svg></span></a></span>
    </div>
    <div class="uk-width-medium uk-padding-small">
        <div class="toggle-class" style="margin: auto auto; text-align: center; margin-bottom: 40px">
            <h1 class="uk-text-normal uk-text-secondary" style="margin: 0; color: white!important; font: Montserrat">Log In</h1>
        </div>
        <!-- login -->
        <form class="toggle-class" action="{{ route('dashboard.index') }}" style="">
            <fieldset class="uk-fieldset">
                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
                        <input style="background-color: rgba(0,0,0,0.2); border-color: white; color:white" class="uk-input uk-border-pill" required="" placeholder="Username" type="text">
                    </div>
                </div>
                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: lock"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" height="10" width="13" y="8.5" x="3.5"></rect><path fill="none" stroke="#000" d="M6.5,8 L6.5,4.88 C6.5,3.01 8.07,1.5 10,1.5 C11.93,1.5 13.5,3.01 13.5,4.88 L13.5,8"></path></svg></span>
                        <input style="background-color: rgba(0,0,0,0.2); border-color: white; color:white" class="uk-input uk-border-pill" required="" placeholder="Password" type="password">
                    </div>
                </div>
                <div class="uk-margin-small">
                    <label class="uk-text-small" style="color: white!important"><input class="uk-checkbox" type="checkbox"> Keep me logged in</label>
                </div>
                <div class="uk-margin-bottom">
                    <button type="submit" style="background-color: #48E74F; color: black" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">LOG IN</button>
                </div>
            </fieldset>
        </form>
        <!-- /login -->

        <!-- recover password -->
        <form action="signup.php" method="post" class="uk-grid-small toggle-class" uk-grid hidden>
            <h1 class="uk-text-normal uk-text-secondary" style="margin: 0; color:white!important">Sign Up</h1>
            <div class="uk-width-1-1">
                <input style="background-color: rgba(0,0,0,0.2); border-color: gray; color:white" class="uk-input uk-border-pill" name="email" type="email" placeholder="Email">
            </div>
            <div class="uk-width-1-1">
                <input style="background-color: rgba(0,0,0,0.2); border-color: gray; color:white" class="uk-input uk-border-pill" name="username" type="text" placeholder="Username">
            </div>
            <div class="uk-width-1-1@s">
                <input style="background-color: rgba(0,0,0,0.2); border-color: gray; color:white" class="uk-input uk-border-pill" name="password" type="password" placeholder="Password">
            </div>
            <div class="uk-width-1-2@s">
                <select style="background-color: rgba(0,0,0,0.2); border-color: gray; color:white" required class="uk-border-pill uk-select">
                    <option value="" disabled selected>Privacy</option>
                    <option>Public</option>
                    <option>Private</option>
                    <option>Anonymous</option>
                </select>
            </div>
            <div class="uk-width-1-2@s">
                <input style="background-color: rgba(0,0,0,0.2); border-color: gray; color:white    " class="uk-input uk-border-pill" name="birthdate" type="date" placeholder="Birthdate">
            </div>
            <div class="uk-margin-bottom uk-margin-top" style="margin: auto auto; text-align: center">
                <button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1" style="background-color: #48E74F;color:black">Sign Up</button>
            </div>
        </form>
        <!-- /recover password -->
        
        <!-- action buttons -->
        <div>
            <div class="uk-text-center">
                <a class="uk-button uk-button-text uk-link-reset uk-text-small toggle-class" style="color: white!important" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" aria-expanded="true" style="">N<span class="uk-text-lowercase">o account yet?</span>  </a>
                <a class="uk-button uk-button-text uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade"  style="color: white!important" aria-expanded="true" style="" hidden=""><span data-uk-icon="arrow-left" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 14 5 9.5 10 5"></polyline><line fill="none" stroke="#000" x1="16" y1="9.5" x2="5" y2="9.52"></line></svg></span> B<span class="uk-text-lowercase">ack to </span>L<span class="uk-text-lowercase">ogin</span>   </a>
            </div>
        </div>
        <!-- action buttons -->
    </div>
</div>
@endsection