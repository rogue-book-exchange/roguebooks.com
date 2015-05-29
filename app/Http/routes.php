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

Route::get('faqs', 'PagesController@faqs');
Route::get('support', 'PagesController@support');
Route::get('contact', 'PagesController@contact');
Route::get('calendar', 'PagesController@calendar');
Route::get('tour', 'PagesController@tour');
Route::get('volunteer', 'PagesController@volunteer');

Route::resource('volunteers', 'VolunteersController',
  ['only'=>['index', 'show', 'destroy']]);


Route::get('/login', 'PagesController@login');

// Route::get('faq', 'PagesController@faq');
Route::resource('faqs', 'FaqController',
  ['except'=>['index', 'show']]);

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

// Route::get('/{page_uri?}', 'PagesController@show');