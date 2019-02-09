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

Route::get('/admin/sliders', 'SliderController@index')->name('sliders.index');
Route::get('/admin/sliders/create', 'SliderController@create')->name('sliders.create');
Route::get('/admin/sliders/{slider}/edit', 'SliderController@edit')->name('sliders.edit');
Route::post('/admin/sliders', 'SliderController@store')->name('sliders.store');
Route::patch('/admin/sliders/{id}', 'SliderController@update')->name('sliders.update');
Route::get('/admin/sliders/{slider}/delete', 'SliderController@destroy')->name('sliders.delete');

Route::get('/admin/pages', 'PageController@index')->name('pages.index');
Route::get('/admin/pages/create', 'PageController@create')->name('pages.create');
Route::get('/admin/pages/{page}/edit', 'PageController@edit')->name('pages.edit');
Route::post('/admin/pages', 'PageController@store')->name('pages.store');
Route::patch('/admin/pages/{id}', 'PageController@update')->name('pages.update');
Route::get('/admin/pages/{page}/delete', 'PageController@destroy')->name('pages.delete');

Route::get('/login', 'SessionController@login')->name('login');
Route::post('/login', 'SessionController@loginStore')->name('login.store');
Route::get('/logout', 'SessionController@destroy')->name('logout');

//Route::get('/', 'MainController@index')->name('main');
//Route::get('/{id}', 'MainController@page')->name('page');

Route::get('/', function () {
    return view('welcome');
});
