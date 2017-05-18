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



Route::group(['middlewear' => ['web']], function(){

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/signup', [
		'uses' => 'UserController@getSignup',
		'as' => 'getSignup'
	]);

	Route::post('/signup', [
		'uses' => 'UserController@postSignup',
		'as' => 'signup'
	]);
});