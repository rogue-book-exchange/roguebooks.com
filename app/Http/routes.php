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


$router->group(['middleware' => 'auth'], function() {

  Route::get('admin', 'PagesController@admin');

  Route::resource('volunteers', 'VolunteersController',
    ['only'=>['index', 'show', 'destroy']]);

  Route::resource('faqs', 'FaqController',
    ['except'=>['index', 'show']]);

  Route::resource('wishlists', 'WishListController',
    ['except'=>['index']]);

  Route::resource('supports', 'SupportController',
    ['except'=>['index']]);

  Route::resource('emails', 'EmailsController',
    ['except'=>['new', 'create', 'destroy']]);

  Route::post('change-password',
    [
      'as'      => 'admin.change.password',
      'uses'    => 'FormController@change_password'
    ]);

  Route::post('update_user_info',
    [
      'as'      => 'update.user.info',
      'uses'    => 'FormController@update_user_info'
    ]);

  Route::get('admin/newsletter', 'EmailsController@create');

  Route::post('admin/send_email',
    [
      'as' => 'newsletter.send',
      'uses' => 'EmailsController@send_email'
    ]);

  Route::post('admin/update_email/{id}',
    [
      'as' => 'update.admin.email',
      'uses' => 'EmailsController@update'
    ]);

  Route::post('/update-content', 'PagesController@update_content');
});

Route::post('emails',
           [
             'as' => 'emails.store',
             'uses' => 'EmailsController@store'
           ]);

Route::delete('emails',
           [
             'as' => 'emails.destroy',
             'uses' => 'EmailsController@destroy'
           ]);

Route::get('emails', 'EmailsController@index');

Route::get('/login', 'PagesController@login');


Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'FormController@store']);

Route::post('volunteer',
  ['uses' => 'VolunteersController@store']);

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);