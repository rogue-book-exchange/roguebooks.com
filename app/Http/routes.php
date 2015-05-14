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

Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');

Route::post('/update-content', 'FormController@update_content');

// Route::get('/forms/volunteer', 'FormController@signup');
Route::get('/forms/{url}', 'FormController@show');

// Route::get('/edit/{page_uri?}', 'FormController@load');
Route::get('/{page_uri?}', 'PagesController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);