<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//Route::get('/', 'HomeController@index');
Route::get('/', function () { return view('home'); });
Route::get('/algemene-voorwaarden', function () { return view('algemene-voorwaarden'); });
Route::get('/applicaties', function () { return view('applicaties'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/diensten', function () { return view('diensten'); });
Route::get('/over-ons', function () { return view('over-ons'); });
Route::get('/privacy-verklaring', function () { return view('privacy-verklaring'); });
Route::get('/referenties', function () { return view('referenties'); });
Route::get('/seo', function () { return view('seo'); });
Route::get('/sitemap', function () { return view('sitemap'); });
Route::get('/webshops', function () { return view('webshops'); });
Route::get('/websites', function () { return view('websites'); });
