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

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
//************BUS*************/
Route::get('/bus', 'busController@index')->name('bus.index');
Route::get('/bus/create', 'busController@create')->name('bus.create');
Route::post('/bus/create','busController@store');
Route::get('/bus/{bus}/edit', 'busController@edit')->name('bus.edit');
Route::patch('/bus/{bus}/edit', 'busController@update')->name('bus.update');
Route::delete('/bus/{bus}/delete', 'busController@destroy')->name('bus.destroy');
Auth::routes();

//************SUPIR*************/
Route::get('/supir', 'supirController@index')->name('supir.index');
Route::get('/supir/create', 'supirController@create')->name('supir.create');
Route::post('/supir/create','supirController@store');
Route::get('/supir/{supir}/edit', 'supirController@edit')->name('supir.edit');
Route::patch('/supir/{supir}/edit', 'supirController@update')->name('supir.update');
Route::delete('/supir/{supir}/delete', 'supirController@destroy')->name('supir.destroy');

//************SUPIR*************/
Route::get('/mengendarai', 'mengendaraiController@index')->name('mengendarai.index');
Route::get('/mengendarai/create', 'mengendaraiController@create')->name('mengendarai.create');
Route::post('/mengendarai/create','mengendaraiController@store');
Route::get('/mengendarai/{mengendarai}/edit', 'mengendaraiController@edit')->name('mengendarai.edit');
Route::patch('/mengendarai/{mengendarai}/edit', 'mengendaraiController@update')->name('mengendarai.update');
Route::delete('/mengendarai/{mengendarai}/delete', 'mengendaraiController@destroy')->name('mengendarai.destroy');

Route::get('/home', 'HomeController@index')->name('home');
