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

    Route::get('/', ['as' => 'index', function () {
        return view('admin.index');
    }]);

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('pages', ['as' => 'index', 'uses' => 'Controller@index']);
        Route::get('pages', ['as' => 'edit', 'uses' => 'Controller@edit']);
    });

    Route::group(['prefix' => 'reference', 'as' => 'reference.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'admin\ReferenceController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'admin\ReferenceController@create']);
        Route::post('/', ['as' => 'store', 'uses' => 'ReferenceController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'ReferenceController@show']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'ReferenceController@edit']);
        Route::patch('/edit/{id}', ['as' => 'update', 'uses' => 'ReferenceController@update']);
        Route::delete('/edit/{id}', ['as' => 'destroy', 'uses' => 'ReferenceController@destroy']);
    });

});

//Route::get('/', 'HomeController@index');
Route::get('/', ['as' => 'home', function () { return view('home'); }]);
Route::get('/referenties', ['as' => 'referenties', 'uses' => 'ReferenceController@index']);
Route::get('/algemene-voorwaarden', function () { return view('algemene-voorwaarden'); });
Route::get('/applicaties', function () { return view('applicaties'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/diensten', function () { return view('diensten'); });
Route::get('/over-ons',  ['as' => 'about', function () { return view('over-ons'); }]);
Route::get('/privacy-verklaring', function () { return view('privacy-verklaring'); });
Route::get('/seo', function () { return view('seo'); });
Route::get('/sitemap', function () { return view('sitemap'); });
Route::get('/webshops', function () { return view('webshops'); });
Route::get('/websites', function () { return view('websites'); });
