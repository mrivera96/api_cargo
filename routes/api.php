<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/getRoutes','CargoController');
Route::resource('/createRoute','CargoController');
Route::post('log','CargoController@loguear')->name('log');
Route::get('getStates','CargoController@getEstados');
Route::get('results',  'CargoController@results') -> name('results') ;
Route::put('/updateRoute',  'CargoController@update');