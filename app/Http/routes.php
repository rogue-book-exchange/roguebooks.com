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

// Route::get('faq', 'PagesController@faq');
Route::resource('faqs', 'FaqController');

Route::post('/update-content', 'PagesController@update_content');

// Route::get('contact', 
//   ['as' => 'contact', 'uses' => 'FormController@create']);

Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'FormController@store']);

Route::post('volunteer', 
  ['uses' => 'VolunteersController@store']);

// Route::get('/edit/{page_uri?}', 'FormController@load');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('/{page_uri?}', 'PagesController@show');