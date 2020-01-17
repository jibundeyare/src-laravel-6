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

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/contact', 'MainController@contact')->name('main.contact');
Route::get('/recherche', 'SearchController@index')->name('search.index');

// resource
Route::resource('foo', 'FooController');

// /escales
// /trajets

// with register controller
Auth::routes();
// without register controller
// Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
