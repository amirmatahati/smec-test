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

Route::get('/create-customer', 'CustomerController@create')->name('createcust');
Route::post('/store-customer', 'CustomerController@store')->name('storecust');
Route::get('/', 'CustomerController@index')->name('indexhome');
Route::get('/edit-customer/{id}', 'CustomerController@edit')->name('custedit');
Route::post('/update-customer/{id}', 'CustomerController@update')->name('custupdate');
Route::get('/delete-customer/{id}', 'CustomerController@destroy')->name('custdelete');

