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

// To make private routes add another config 'middleware' => 'auth'

Route::group(['middlewear' => ['web']], function(){

	Route::get('/', function () {
	    return view('welcome');
	})->name('root');

	Route::get('/shop', [
		'uses' => 'ProductController@getShop',
		'as' => 'getShop',
		'middleware' => 'auth'
	]);

	Route::post('/shop/{productId}/addToCart', [
		'uses' => 'CartController@addToCart',
		'as' => 'addToCart'
	]);
	
	Route::get('/shop/{productId}', [
		'uses' => 'ProductController@showProduct',
		'as' => 'showProduct'
	]);

	Route::get('/cart/{cartId}', [
		'uses' => 'CartController@getCart',
		'as' => 'cart'
	]);

	Route::get('/contact', function () {
	    return view('contact');
	})->name('contact');

	Route::get('/login', [
		'uses' => 'UserController@getLogin',
		'as' => 'getLogin'
	]);

	Route::post('/login', [
		'uses' => 'UserController@postLogin',
		'as' => 'login'
	]);

	Route::get('/signup', [
		'uses' => 'UserController@getSignup',
		'as' => 'getSignup'
	]);

	Route::post('/signup', [
		'uses' => 'UserController@postSignup',
		'as' => 'signup'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'getLogout'
	]);

// admin stuff

	Route::get('/admin/products', [
		'uses' => 'ProductController@getProducts',
		'as' => 'getProducts'
	]);


	Route::get('/admin/product/new', [
		'uses' => 'ProductController@getProductForm',
		'as' => 'getProductForm'
	]);


	Route::post('/admin/product/new', [
		'uses' => 'ProductController@postProductForm',
		'as' => 'postProductForm'
	]);



});