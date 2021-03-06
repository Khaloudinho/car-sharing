<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/vehicules', 'VehiculesController@index');
Route::post('/vehicules', 'VehiculesController@storeReservation');
Route::get('/mesreservations', 'ReservationController@index');
//Route::post('/reservee', 'ReservationController@index');