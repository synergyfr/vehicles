<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

/* I know about the resource artisan command, but dodged it for now */

Route::get('/vehicles', 'VehicleController@index')->name('vehicles.index');
Route::get('/vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('/vehicles/store', 'VehicleController@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show')->name('vehicles.show');