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

Route::get('/reference', ['as' => 'referenties', 'uses' => 'ProjectController@index']);
Route::get('/reference/{reference}', ['as' => 'referenties.show', 'uses' => 'ProjectController@show']);

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


//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
//
//    Route::get('/', ['as' => 'dashboard', function () {
//        return view('admin.index');
//    }]);
//
//    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
//        Route::get('/', ['as' => 'index', 'uses' => 'admin\PagesController@index']);
//        Route::get('/create', ['as' => 'create', 'uses' => 'admin\PagesController@create']);
//        Route::post('/', ['as' => 'store', 'uses' => 'admin\PagesController@store']);
//        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'admin\PagesController@edit']);
//        Route::patch('/edit/{id}', ['as' => 'update', 'uses' => 'admin\PagesController@update']);
//        Route::delete('/edit/{id}', ['as' => 'destroy', 'uses' => 'admin\PagesController@destroy']);
//    });
//
//});
//
//Route::group(['prefix' => 'board', 'as' => 'board.', 'middleware' => 'auth'], function () {
//
//    Route::get('role/create', ['as' => 'role.create', 'uses' => 'board\RoleController@create']);
//    Route::get('role', ['as' => 'role.index', 'uses' => 'board\RoleController@index']);
//    Route::get('role/{id}/edit', ['as' => 'role.edit', 'uses' => 'board\RoleController@edit']);
//    Route::post('role', ['as' => 'role.store', 'uses' => 'board\RoleController@store']);
//    Route::patch('role', ['as' => 'role.update', 'uses' => 'board\RoleController@update']);
//    Route::delete('role/destroy/{id}', ['as' => 'role.destroy', 'uses' => 'board\RoleController@destroy']);
//
//    Route::get('project/create', ['as' => 'project.create', 'uses' => 'board\ProjectController@create']);
//    Route::get('project', ['as' => 'project.index', 'uses' => 'board\ProjectController@index']);
//    Route::get('project/{id}/edit', ['as' => 'project.edit', 'uses' => 'board\ProjectController@edit']);
//    Route::post('project', ['as' => 'project.store', 'uses' => 'board\ProjectController@store']);
//    Route::patch('project', ['as' => 'project.update', 'uses' => 'board\ProjectController@update']);
//    Route::delete('project/destroy/{id}', ['as' => 'project.destroy', 'uses' => 'board\ProjectController@destroy']);
//
//    Route::get('skill/create', ['as' => 'skill.create', 'uses' => 'board\SkillController@create']);
//    Route::get('skill', ['as' => 'skill.index', 'uses' => 'board\SkillController@index']);
//    Route::get('skill/{id}/edit', ['as' => 'skill.edit', 'uses' => 'board\SkillController@edit']);
//    Route::post('skill', ['as' => 'skill.store', 'uses' => 'board\SkillController@store']);
//    Route::patch('skill', ['as' => 'skill.update', 'uses' => 'board\SkillController@update']);
//    Route::delete('skill/destroy/{id}', ['as' => 'skill.destroy', 'uses' => 'board\SkillController@destroy']);
//
//    Route::get('user/create', ['as' => 'user.create', 'uses' => 'board\UserController@create']);
//    Route::get('user', ['as' => 'user.index', 'uses' => 'board\UserController@index']);
//    Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'board\UserController@edit']);
//    Route::post('user', ['as' => 'user.store', 'uses' => 'board\UserController@store']);
//    Route::patch('user', ['as' => 'user.update', 'uses' => 'board\UserController@update']);
//    Route::delete('user/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'board\UserController@destroy']);
//
//});

//workspace (board, developer, designer, marketing, klant, )
Route::group(['middleware' => 'auth'], function () {

    Route::get('/factuur',  ['as' => 'page.invoices', 'uses' => 'board\InvoiceController@index']);

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => 'role:developer,marketing,board'], function () {
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
        Route::delete('project/task/destroy', ['as' => 'task.destroy', 'uses' => 'developer\ProjectController@destroy']);
    });

    Route::group(['prefix' => 'board', 'as' => 'board.', 'middleware' => ['role:board']], function ()
    {
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



