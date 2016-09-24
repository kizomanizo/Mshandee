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

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', function () {
	return view('dashboard');
});

Route::post('/add_company', 'CompanyController@add_company');

Route::get('/test', function () {
	return view('test');
});