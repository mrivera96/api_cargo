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
session_start();
Route::get('/',  'CargoController@index')->name('home');
Route::get('/nroute', 'CargoController@vNRoute')->name('nroute');
Route::get('/login','CargoController@showLogin')->name('login');
Route::get('/editar','CargoController@edit')->name('editar');
