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

Route::get('getPatient/{id}', 'PatientController@getPatient');
Route::resource('opds', 'OpdController');
Route::resource('labs', 'LabaratoryController');
Route::resource('pharmacies', 'PharmacyController');
Route::get('getPatientOpd/{id}', 'OpdController@getPatientOpd');
Route::get('getLab/{id}', 'LabaratoryController@getTestResult');