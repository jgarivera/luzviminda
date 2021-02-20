<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/map', function () {
    return view('pages.map');
});

Route::get('/partnerorg', function () {
    return view('pages.partnerorg');
});

Route::get('/orgprofile', function () {
    return view('pages.orgprofile');
});

Route::get('/donationform1', function () {
    return view('pages.donationform1');
});

Route::get('/donationform2', function () {
    return view('pages.donationform2');
});

Route::get('/confirmationpage', function () {
    return view('pages.confirmationpage');
});