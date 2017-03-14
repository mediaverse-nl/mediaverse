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

//Route::get('/', 'HomeController@index');
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('/referenties', ['as' => 'referenties', 'uses' => 'ProjectController@index']);
Route::get('/referentie/{reference}', ['as' => 'referenties.show', 'uses' => 'ProjectController@show']);

Route::get('/algemene-voorwaarden', ['as' => 'page.algvoorwaarden', 'uses' => 'PagesController@algemeneVoorwaarden']);
Route::get('/privacy-verklaring', ['as' => 'page.priverklaring', 'uses' => 'PagesController@privacy']);

Route::get('/contact', ['as' => 'contact.create', 'uses' => 'ContactController@create']);
Route::post('/contact', ['as' => 'contact.store', 'uses' => 'ContactController@store']);
Route::get('/contact/{email}', ['as' => 'contact.feedback', 'uses' => 'ContactController@show']);

Route::get('/diensten',  ['as' => 'page.diensten', 'uses' => 'PagesController@diensten']);

Route::get('/over-ons',  ['as' => 'page.about', 'uses' => 'PagesController@overOns']);
Route::get('/logo-illustratie', ['as' => 'page.logo_illustratie', 'uses' => 'PagesController@logoIllustratie']);
Route::get('/design', ['as' => 'page.design', 'uses' => 'PagesController@design']);
Route::get('/fotografie', ['as' => 'page.photography', 'uses' => 'PagesController@photography']);
Route::get('/onderhoud', ['as' => 'page.onderhoud', 'uses' => 'PagesController@onderhoud']);
Route::get('/laravel-webshop', ['as' => 'page.laravel_webshop', 'uses' => 'PagesController@laravelWebshop']);
Route::get('/vindbaarheid', ['as' => 'page.vindbaarheid', 'uses' => 'PagesController@vindbaarheid']);
Route::get('/internet-marketing', ['as' => 'page.internet_marketing', 'uses' => 'PagesController@internetMarketing']);
Route::get('/applicaties', ['as' => 'page.app', 'uses' => 'PagesController@applicaties']);
Route::get('/seo', ['as' => 'page.seo', 'uses' => 'PagesController@seo']);
Route::get('/sitemap', ['as' => 'page.sitemap', 'uses' => 'PagesController@sitemap']);
Route::get('/hosting', ['as' => 'page.hosting', 'uses' => 'PagesController@hostingService']);
Route::get('/webwinkel', ['as' => 'page.webshop', 'uses' => 'PagesController@webshops']);
Route::get('/content-management', ['as' => 'page.cms', 'uses' => 'PagesController@contentManagement']);
Route::get('/websites', ['as' => 'page.websites', 'uses' => 'PagesController@websites']);
Route::get('/laravel-websites', ['as' => 'page.laravel_websites', 'uses' => 'PagesController@laravelWebsites']);

Route::get('/payment', ['as' => 'mollie.payment', 'uses' => 'MollieController@index']);
Route::get('/payment/{invoice_id}', ['as' => 'mollie.show', 'uses' => 'MollieController@show']);

//workspace (board, developer, designer, marketing, klant, )
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'role:developer,marketing,board,financial'], function () {
        Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    });

    Route::group(['prefix' => 'marketing', 'as' => 'marketing.', 'middleware' => 'role:marketing,board'], function () {
        Route::get('/messages', ['as' => 'message.index', 'uses' => 'marketing\ContactController@index']);
        Route::get('/message/{id}/show', ['as' => 'message.show', 'uses' => 'marketing\ContactController@show']);
        Route::patch('/message', ['as' => 'message.update', 'uses' => 'marketing\ContactController@update']);

        Route::post('text-editor/store', ['as' => 'content.store', 'uses' => 'marketing\TextEditorController@store']);
        Route::patch('text-editor/edit', ['as' => 'content.update', 'uses' => 'marketing\TextEditorController@update']);
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => 'role:developer,marketing,board,financial'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Auth\ProfileController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'Auth\ProfileController@create']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'Auth\ProfileController@edit']);
        Route::get('/{id}/show', ['as' => 'show', 'uses' => 'Auth\ProfileController@show']);
        Route::patch('/', ['as' => 'update', 'uses' => 'Auth\ProfileController@update']);
    });

    Route::group(['prefix' => 'developer', 'as' => 'developer.', 'middleware' => 'role:developer'], function () {
        Route::get('project', ['as' => 'project.index', 'uses' => 'developer\ProjectController@index']);
        Route::get('project/create', ['as' => 'project.create', 'uses' => 'developer\ProjectController@create']);
        Route::get('project/{id}/edit', ['as' => 'project.edit', 'uses' => 'developer\ProjectController@edit']);
        Route::get('project/{id}/show', ['as' => 'project.show', 'uses' => 'developer\ProjectController@show']);
        Route::post('project', ['as' => 'project.store', 'uses' => 'developer\ProjectController@store']);
        Route::patch('project', ['as' => 'project.update', 'uses' => 'developer\ProjectController@update']);
        Route::patch('project/start', ['as' => 'project.start', 'uses' => 'developer\ProjectController@startTimer']);
        Route::patch('project/check', ['as' => 'project.check', 'uses' => 'developer\ProjectController@taskStatus']);
        Route::delete('project/task/destroy', ['as' => 'task.destroy', 'uses' => 'developer\ProjectController@destroy']);
    });

    Route::group(['prefix' => 'financial', 'as' => 'financial.', 'middleware' => ['role:financial,board']], function ()
    {
        Route::get('finance', ['as' => 'finance.index', 'uses' => 'financial\FinancialController@index']);

        Route::get('payroll/', ['as' => 'payroll.index', 'uses' => 'financial\PayrollController@index']);
        Route::get('payroll/create', ['as' => 'payroll.create', 'uses' => 'financial\PayrollController@create']);
        Route::get('payroll/{id}/edit', ['as' => 'payroll.edit', 'uses' => 'financial\PayrollController@edit']);
        Route::get('payroll/{id}/show', ['as' => 'payroll.show', 'uses' => 'financial\PayrollController@show']);
        Route::patch('payroll', ['as' => 'payroll.update', 'uses' => 'financial\PayrollController@update']);

        Route::get('invoice', ['as' => 'invoice.index', 'uses' => 'board\InvoiceController@index']);
        Route::get('invoice/{id}/show', ['as' => 'invoice.show', 'uses' => 'board\InvoiceController@show']);
        Route::get('invoice/create', ['as' => 'invoice.create', 'uses' => 'board\InvoiceController@create']);
        Route::get('invoice/{id}/edit', ['as' => 'invoice.edit', 'uses' => 'board\InvoiceController@edit']);
        Route::patch('invoice', ['as' => 'invoice.update', 'uses' => 'board\InvoiceController@update']);
        Route::post('invoice', ['as' => 'invoice.store', 'uses' => 'board\InvoiceController@store']);
        Route::delete('invoice/destroy', ['as' => 'invoice.destroy', 'uses' => 'board\InvoiceController@destroy']);
    });

    Route::group(['prefix' => 'board', 'as' => 'board.', 'middleware' => ['role:board']], function ()
    {
//        Route::get('/factuur',  ['as' => 'page.invoices', 'uses' => 'board\InvoiceController@index']);

        Route::get('calendar', ['as' => 'calendar.index', 'uses' => 'Auth\CalendarController@index']);
        Route::get('calendar/{id}/show', ['as' => 'calendar.show', 'uses' => 'Auth\CalendarController@show']);
        Route::get('calendar/create', ['as' => 'calendar.create', 'uses' => 'Auth\CalendarController@create']);
        Route::get('calendar/{id}/edit', ['as' => 'calendar.edit', 'uses' => 'Auth\CalendarController@edit']);
        Route::patch('calendar', ['as' => 'calendar.update', 'uses' => 'Auth\CalendarController@update']);
        Route::post('calendar', ['as' => 'calendar.store', 'uses' => 'Auth\CalendarController@store']);
        Route::delete('calendar/destroy/{id}', ['as' => 'calendar.destroy', 'uses' => 'Auth\CalendarController@destroy']);

        Route::get('project', ['as' => 'project.index', 'uses' => 'board\ProjectController@index']);
        Route::get('project/create', ['as' => 'project.create', 'uses' => 'board\ProjectController@create']);
        Route::get('project/{id}/edit', ['as' => 'project.edit', 'uses' => 'board\ProjectController@edit']);
        Route::patch('project', ['as' => 'project.update', 'uses' => 'board\ProjectController@update']);
        Route::post('project', ['as' => 'project.store', 'uses' => 'board\ProjectController@store']);
        Route::delete('project/destroy/{id}', ['as' => 'project.destroy', 'uses' => 'board\ProjectController@destroy']);

        Route::get('service', ['as' => 'service.index', 'uses' => 'board\ServiceController@index']);
        Route::get('service/create', ['as' => 'service.create', 'uses' => 'board\ServiceController@create']);
        Route::get('service/{id}/edit', ['as' => 'service.edit', 'uses' => 'board\ServiceController@edit']);
        Route::post('service', ['as' => 'service.store', 'uses' => 'board\ServiceController@store']);
        Route::patch('service', ['as' => 'service.update', 'uses' => 'board\ServiceController@update']);
        Route::delete('service/destroy/{id}', ['as' => 'service.destroy', 'uses' => 'board\ServiceController@destroy']);

        Route::get('skill', ['as' => 'skill.index', 'uses' => 'board\SkillController@index']);
        Route::get('skill/create', ['as' => 'skill.create', 'uses' => 'board\SkillController@create']);
        Route::get('skill/{id}/edit', ['as' => 'skill.edit', 'uses' => 'board\SkillController@edit']);
        Route::post('skill', ['as' => 'skill.store', 'uses' => 'board\SkillController@store']);
        Route::patch('skill', ['as' => 'skill.update', 'uses' => 'board\SkillController@update']);
        Route::delete('skill/destroy/{id}', ['as' => 'skill.destroy', 'uses' => 'board\SkillController@destroy']);

        Route::get('user', ['as' => 'user.index', 'uses' => 'board\UserController@index']);
        Route::get('user/create', ['as' => 'user.create', 'uses' => 'board\UserController@create']);
        Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'board\UserController@edit']);
        Route::post('user', ['as' => 'user.store', 'uses' => 'board\UserController@store']);
        Route::patch('user', ['as' => 'user.update', 'uses' => 'board\UserController@update']);
        Route::delete('user/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'board\UserController@destroy']);

        //admin image delete
        Route::delete('image/{id}', ['as' => 'image.destroy', 'uses' => 'board\ImageController@remove']);
    });

});



