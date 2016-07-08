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

Route::auth();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'profile', function () {
        return view('welcome');
    }]);

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('pages', ['as' => 'index', 'uses' => 'Controller@index']);
        Route::get('pages', ['as' => 'edit', 'uses' => 'Controller@edit']);
    });

});

//Route::get('/', 'HomeController@index');
Route::get('/', ['as' => 'home', function () { return view('home'); }]);
Route::get('/algemene-voorwaarden', function () { return view('algemene-voorwaarden'); });
Route::get('/applicaties', function () { return view('applicaties'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/diensten', function () { return view('diensten'); });
Route::get('/over-ons',  ['as' => 'about', function () { return view('over-ons'); }]);
Route::get('/privacy-verklaring', function () { return view('privacy-verklaring'); });
Route::get('/referenties', function () { return view('referenties'); });
Route::get('/seo', function () { return view('seo'); });
Route::get('/sitemap', function () { return view('sitemap'); });
Route::get('/webshops', function () { return view('webshops'); });
Route::get('/websites', function () { return view('websites'); });
