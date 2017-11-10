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

// Events resource.
Route::resource('events', 'EventController');

// Upload file to reservation.
Route::post('reservations/uploadFile', 'ReservationController@uploadFile');
// Reservations resource.
Route::resource('reservations', 'ReservationController');
