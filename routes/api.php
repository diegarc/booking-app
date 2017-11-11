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
// Event reservations.
Route::get('reservations/byEventId/{eventId}', 'ReservationController@byEventId');
// Reservations resource.
Route::resource('reservations', 'ReservationController');

// Store event visits.
Route::post('visits/storeEvent', 'VisitController@storeEvent');
// Visits resource.
Route::resource('visits', 'VisitController');