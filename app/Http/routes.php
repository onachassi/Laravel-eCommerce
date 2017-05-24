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

	// Static routes

	Route::get('/', function () {
	    return view('welcome');
	})->name('root');

	Route::get('/contact', function () {
	    return view('contact');
	})->name('contact');

	// Dynamic Routes
// Shop Routes
	Route::get('/shop', [
		'uses' => 'ProductController@getShop',
		'as' => 'getShop'
	]);

	Route::post('/shop/{productId}/addToCart', [
		'uses' => 'CartController@addToCart',
		'as' => 'addToCart'
	]);
	
	Route::get('/shop/{productId}', [
		'uses' => 'ProductController@showProduct',
		'as' => 'showProduct'
	]);


// Cart Routes
	Route::get('/cart/{cartId}', [
		'uses' => 'CartController@getCart',
		'as' => 'cart'
	]);



// User Routes
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

// Admin Routes -- protect

	Route::get('/admin/products', [
		'uses' => 'ProductController@getProducts',
		'as' => 'getProducts'
	]);

// need to make views for these routes

	// Route::get('/admin/product/{productId}', [
	// 	'uses' => 'ProductController@getProduct',
	// 	'as' => 'getProduct'
	// ]);

	// Route::get('/admin/product/{productId}/edit', [
	// 	'uses' => 'ProductController@patchProductForm',
	// 	'as' => 'patchProductForm'
	// ]);

	// Route::patch('/admin/product/{productId}', [
	// 	'uses' => 'ProductController@updateProduct',
	// 	'as' => 'patchProduct'
	// ]);

// end

	Route::get('/admin/product/new', [
		'uses' => 'ProductController@getProductForm',
		'as' => 'getProductForm'
	]);


	Route::post('/admin/product/new', [
		'uses' => 'ProductController@postProductForm',
		'as' => 'postProductForm'
	]);



});