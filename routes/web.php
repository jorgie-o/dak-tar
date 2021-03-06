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

// Route::group(['prefix' => 'manage/'], function(){
	Route::resource('doctors', 'DoctorController');
	Route::resource('drugs', 'DrugController');
	Route::resource('patients', 'PatientController');
	Route::resource('departments', 'DepartmentController');
	Route::resource('nurses', 'NurseController');
	Route::resource('healthcenters', 'HealthCenterController');
	Route::resource('opds', 'OpdController');
	Route::resource('labs', 'LabaratoryController');
	Route::resource('pharmacies', 'PharmacyController');
	Route::get('dashboard', 'DashboardController@getStats');

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
