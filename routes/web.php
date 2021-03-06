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

Route::get('/', 'InputKepuasanController@Index');
Route::post('/', 'InputKepuasanController@Store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/home', 'HomeController@truncate')->name('truncate');

Route::post('/home', 'HomeController@export2ex')->name('export2ex');
