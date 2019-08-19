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


// RoFA Login
Route::get('login', function() { return view('login'); })->name('login');
Route::post('login', 'Auth\LoginController@login')->name('verify-login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// RoFA Web Manager
Route::group(['prefix' => 'webmanager', 'middleware' => 'auth'], function(){
	Route::get('/', function(){ return view('webmanager.dashboard'); })->name('manager.dashboard');
	Route::get('content', function(){ return view('webmanager.content'); })->name('manager.content');
	Route::resource('products', 'ProductsController', ['as' => 'manager']);
});