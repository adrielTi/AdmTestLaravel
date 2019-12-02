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

Route::get('/', function () {
    return view('home');
})
*/


Auth::routes();

Route::get('lists', 'UserController@index')->name('index')->middleware('auth');
Route::get('adduser', 'UserController@adduser')->name('adduser')->middleware('auth');
Route::post('register', 'UserController@register')->middleware('auth');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

