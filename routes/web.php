<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//The line below accepts a link and routes it to a controller for artisan make:auth command - Kz
//Route::get('/make_auth', 'ArtisanController@make_auth')->name('makeauth');


Auth::routes();

/**
 * The routes below that point to RouteController do need a lot of variables with them
 * The variables help in delivering different sidebars and heading to each page.
 */
Route::get('/home', 'RouteController@home');

Route::get('/add_company', function () {
	return view('companies.add_company');
});

Route::post('/db_addcompany', 'CompanyController@db_addcompany');

Route::get('/test', function () {
	return view('test');
});

Route::get('/companies', 'RouteController@home');