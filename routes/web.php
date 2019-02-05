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

Route::get('/admin/categories', 'CategoryController@index')->name('categories.index');
Route::get('/admin/categories/create', 'CategoryController@create')->name('categories.create');
Route::get('/admin/categories/{category}/edit/{tab}', 'CategoryController@edit')->name('categories.edit');
Route::post('/admin/categories', 'CategoryController@store')->name('categories.store');
Route::patch('/admin/categories/{id}', 'CategoryController@update')->name('categories.update');
Route::get('/admin/categories/{category}/delete', 'CategoryController@destroy')->name('categories.delete');

Route::get('/login', 'SessionController@login')->name('login');
Route::post('/login', 'SessionController@loginStore')->name('login.store');
Route::get('/logout', 'SessionController@destroy')->name('logout');

//Route::get('/', 'MainController@index')->name('main');
//Route::get('/{id}', 'MainController@page')->name('page');

Route::get('/', function () {
    return view('welcome');
});
