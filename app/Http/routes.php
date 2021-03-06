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

Route::get('/', 'HomeController@index');

Route::get('gallery/{id?}', 'HomeController@gallery');
Route::get('testimonios', 'HomeController@reviews');

Route::resource('cms', 'ContentsController');

Route::get('cmsgallery/{id?}', 'ContentsController@gallery');
Route::get('cmstestimonios', 'ContentsController@reviews');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);

Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

