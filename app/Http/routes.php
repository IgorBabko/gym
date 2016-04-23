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

Route::get('/metrics/bmi', 'MetricsController@bmi');
Route::get('/metrics/calcBmi', 'MetricsController@calcBmi');

Route::get('/metrics/bmr', 'MetricsController@bmr');
Route::get('/metrics/calcBmr', 'MetricsController@calcBmr');

Route::get('/metrics/water', 'MetricsController@water');
Route::get('/metrics/calcWater', 'MetricsController@calcWater');

Route::auth();



