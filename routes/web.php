<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home'); })->name('home');

// Articles
// News

Route::group(['prefix' => 'store'], function(){
	Route::get('/', 'StoreController@index')->name('store');
	Route::get('products/{productSlug}', 'StoreController@products')->name('store-products');
	Route::get('add-to-cart/{products}', 'StoreController@addToCart')->name('add-to-cart');
	Route::get('update-cart', 'StoreController@updateCart')->name('update-cart');
	Route::get('remove-cart', 'StoreController@removeCart')->name('remove-cart');
	Route::get('checkout', function(){ return view('storecheckout'); })->name('store-checkout');
	Route::post('checkout', 'StoreController@storeCheckout')->name('store-checkout-bill');
});

Route::group(['prefix' => 'events'], function(){
	Route::get('/', 'BookEventsController@index')->name('events');
	Route::get('/{events}', 'BookEventsController@eventDetails')->name('event-details');
  Route::post('/booking/{events}', 'BookEventsController@eventBooking')->name('event-booking');
});

Route::group(['prefix' => 'trip'], function(){
	//
});

// Payment gateway route
Route::group(['prefix' => 'payment'], function(){
	Route::get('/', 'PaymentController@index')->name('payment');
	Route::post('/snaptoken', 'PaymentController@snapToken')->name('snaptoken');
	Route::get('/finish', 'PaymentController@status')->name('payment.status');
	Route::get('/notifications', 'PaymentController@notifications')->name('payment.notifications');
  Route::get('/tes', 'PaymentController@tes');
});

// RoFA Login and Signup
Route::get('login', function() { return view('login'); })->name('login');
Route::post('login', 'Auth\LoginController@login')->name('verify-login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('signup', function(){ return view('signup') })->name('signup');
// Route::post('signup', 'Auth\LoginController@signup')->name('verify-signup');

// RoFA Web Manager
Route::group(['prefix' => 'webmanager', 'middleware' => 'auth'], function(){
	Route::get('/', function(){ return view('webmanager.dashboard'); })->name('manager.dashboard');
	Route::get('content', function(){ return view('webmanager.content'); })->name('manager.content');
	Route::resource('products', 'ProductsController', ['as' => 'manager']);
	Route::resource('products/image', 'ProductImageController', ['as' => 'manager.products']);
	Route::resource('events', 'EventsController', ['as' => 'manager']);
});