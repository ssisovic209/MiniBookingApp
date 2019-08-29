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


Route::get('/',function (){
  return view ('home');
});

Route::resource('units','UnitsController');

// Route::get('/units', 'UnitsController@index' );
// Route::post('/units', 'UnitsController@store' );
// Route::get('/units/create', 'UnitsController@create' );
// Route::get('/units/{unit}', 'UnitsController@show' );
// Route::get('/units/{unit}/edit', 'UnitsController@edit' );
// Route::patch('/units/{unit}', 'UnitsController@update' );
// Route::delete('/units/{unit}', 'UnitsController@destroy' );

Route::get('/reservations', 'ReservationsController@index' );
Route::get('/reservations/{reservation}', 'ReservationsController@show' );
Route::get('/reservations/create', 'ReservationsController@create' );
Route::post('/reservations', 'ReservationsController@store' );
Route::delete('/reservations/{reservation}', 'ReservationsController@destroy' );
