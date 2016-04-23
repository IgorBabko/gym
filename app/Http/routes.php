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
Route::get('/profile', 'HomeController@profile');
Route::get('/metrics', 'HomeController@metrics');

Route::get('/bmi', 'MetricsController@bmi');
Route::get('/bmr', 'MetricsController@bmr');
Route::get('/water', 'MetricsController@water');

Route::auth();



