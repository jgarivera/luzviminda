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
})->name('index');

Route::get('/map', function () {
    return view('pages.map');
})->name('map');

Route::get('/partner-orgs', function () {
    return view('pages.partnerorg');
})->name('partner-orgs');

Route::get('/org-profile', function () {
    return view('pages.orgprofile');
})->name('org-profile');

Route::get('/donation-form1-resilientph', function () {
    return view('pages.donationform1resilientPH');
})->name('donation-form1');

Route::get('/donation-form2-resilientph', function () {
    return view('pages.donationform2resilientPH');
})->name('donation-form2');

Route::get('/donation-confirm-resilientph', function () {
    return view('pages.confirmationpageresilientPH');
})->name('donation-confirm');

/** Dashboard Routes */

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard.index');
    })->name('dashboard.index');

    Route::get('/records', function () {
        return view('pages.dashboard.index');
    })->name('dashboard.records-manager');

    Route::get('/page-editor', function () {
        return view('pages.dashboard.index');
    })->name('dashboard.org-page-editor');
});