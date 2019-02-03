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

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/login', 'SessionController@login')->name('login');
Route::post('/login', 'SessionController@loginStore')->name('login.store');
Route::get('/logout', 'SessionController@destroy')->name('logout');

//Route::get('/', 'MainController@index')->name('main');
//Route::get('/{id}', 'MainController@page')->name('page');

Route::get('/', function () {
    return view('welcome');
});
