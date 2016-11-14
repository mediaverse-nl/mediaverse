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

Route::get('/reference', ['as' => 'referenties', 'uses' => 'ReferenceController@index']);
Route::get('/reference/{reference}', ['as' => 'referenties.show', 'uses' => 'ReferenceController@show']);

Route::get('/algemene-voorwaarden', ['as' => 'page.algvoorwaarden', 'uses' => 'PagesController@algemeneVoorwaarden']);
Route::get('/privacy-verklaring', ['as' => 'page.priverklaring', 'uses' => 'PagesController@privacy']);

Route::get('/contact', ['as' => 'contact.create', 'uses' => 'ContactController@create']);
Route::post('/contact', ['as' => 'contact.store', 'uses' => 'ContactController@store']);
Route::get('/contact/{email}', ['as' => 'contact.feedback', 'uses' => 'ContactController@show']);

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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'dashboard', function () {
        return view('admin.index');
    }]);

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'admin\PagesController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'admin\PagesController@create']);
        Route::post('/', ['as' => 'store', 'uses' => 'admin\PagesController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'admin\PagesController@edit']);
        Route::patch('/edit/{id}', ['as' => 'update', 'uses' => 'admin\PagesController@update']);
        Route::delete('/edit/{id}', ['as' => 'destroy', 'uses' => 'admin\PagesController@destroy']);
    });

});

Route::group(['prefix' => 'board', 'as' => 'board.', 'middleware' => 'auth'], function () {

    Route::get('role/create', ['as' => 'role.create', 'uses' => 'board\RoleController@create']);
    Route::get('role', ['as' => 'role.index', 'uses' => 'board\RoleController@index']);
    Route::get('role/{id}/edit', ['as' => 'role.edit', 'uses' => 'board\RoleController@edit']);
    Route::post('role', ['as' => 'role.store', 'uses' => 'board\RoleController@store']);
    Route::patch('role', ['as' => 'role.update', 'uses' => 'board\RoleController@update']);
    Route::delete('role/destroy/{id}', ['as' => 'role.destroy', 'uses' => 'board\RoleController@destroy']);

    Route::get('project/create', ['as' => 'project.create', 'uses' => 'board\ProjectController@create']);
    Route::get('project', ['as' => 'project.index', 'uses' => 'board\ProjectController@index']);
    Route::get('project/{id}/edit', ['as' => 'project.edit', 'uses' => 'board\ProjectController@edit']);
    Route::post('project', ['as' => 'project.store', 'uses' => 'board\ProjectController@store']);
    Route::patch('project', ['as' => 'project.update', 'uses' => 'board\ProjectController@update']);
    Route::delete('project/destroy/{id}', ['as' => 'project.destroy', 'uses' => 'board\ProjectController@destroy']);

    Route::get('skill/create', ['as' => 'skill.create', 'uses' => 'board\SkillController@create']);
    Route::get('skill', ['as' => 'skill.index', 'uses' => 'board\SkillController@index']);
    Route::get('skill/{id}/edit', ['as' => 'skill.edit', 'uses' => 'board\SkillController@edit']);
    Route::post('skill', ['as' => 'skill.store', 'uses' => 'board\SkillController@store']);
    Route::patch('skill', ['as' => 'skill.update', 'uses' => 'board\SkillController@update']);
    Route::delete('skill/destroy/{id}', ['as' => 'skill.destroy', 'uses' => 'board\SkillController@destroy']);

    Route::get('user/create', ['as' => 'user.create', 'uses' => 'board\UserController@create']);
    Route::get('user', ['as' => 'user.index', 'uses' => 'board\UserController@index']);
    Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'board\UserController@edit']);
    Route::post('user', ['as' => 'user.store', 'uses' => 'board\UserController@store']);
    Route::patch('user', ['as' => 'user.update', 'uses' => 'board\UserController@update']);
    Route::delete('user/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'board\UserController@destroy']);

});

//workspace (board, developer, designer, marketing, klant, )
Route::group(['middleware' => 'auth'], function () {

//    Route::get('/', ['as' => 'index', 'uses' => function(){return 'index';}]);

    Route::group(['prefix' => 'developer', 'as' => 'developer.', 'middleware' => 'role:developer'], function () {

        Route::get('/', ['as' => 'index', 'uses' => function(){return 'index';}]);

        Route::get('project', ['as' => 'project.index', 'uses' => function(){return 'hello';}]);
        Route::get('project/show/{id}', ['as' => 'project.show', 'uses' => function(){return 'hello';}]);
        Route::get('project/edit/{id}', ['as' => 'project.edit', 'uses' => function(){return 'hello';}]);

        Route::get('skill', ['as' => 'skill.index', 'uses' => function(){return 'hello';}]);

        Route::get('task', ['as' => 'task.index', 'uses' => function(){return 'hello';}]);
        Route::get('task/show/{id}', ['as' => 'task.show', 'uses' => function(){return 'hello';}]);
        Route::get('task/edit/{id}', ['as' => 'task.edit', 'uses' => function(){return 'hello';}]);
        Route::post('task', ['as' => 'task.store', 'uses' => function(){return 'hello';}]);
        Route::delete('task/destroy/{id}', ['as' => 'task.destroy', 'uses' => function(){return 'hello';}]);
    });

    Route::group(['prefix' => 'marketing', 'as' => 'developer.', 'middleware' => 'role:developer'], function () {
        Route::get('task', ['as' => 'task', 'uses' => function(){return 'hello';}]);
    });

    Route::group(['prefix' => 'board', 'as' => 'panel.', 'middleware' => ['auth', 'role:board']], function () {
        Route::get('/', ['as' => 'index', 'uses' => function(){ return 'hello'; }]);
        Route::get('test', ['as' => 'index', 'uses' => function(){ return 'hello'; }]);
    });
});

Route::group(['prefix' => 'board', 'as' => 'developer.', 'middleware' => 'auth'], function () {

    Route::get('project/create', ['as' => 'project.create', 'uses' => 'board\UserController@create']);
    Route::get('project', ['as' => 'user.index', 'uses' => 'board\UserController@index']);
    Route::get('project/{id}/edit', ['as' => 'user.edit', 'uses' => 'board\UserController@edit']);
    Route::post('project', ['as' => 'user.store', 'uses' => 'board\UserController@store']);
    Route::patch('project', ['as' => 'user.update', 'uses' => 'board\UserController@update']);
    Route::delete('project/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'board\UserController@destroy']);

});


