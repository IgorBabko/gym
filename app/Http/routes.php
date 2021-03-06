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
Route::get('/terms', 'HomeController@terms');
Route::get('/about', 'HomeController@about');
Route::get('/faq', 'HomeController@faq');
Route::get('/support', 'HomeController@support');
Route::get('/profile', 'HomeController@profile');
Route::get('/metrics', 'HomeController@metrics');
Route::get('/nutrition', 'HomeController@nutrition');
Route::get('/motivation', 'HomeController@motivation');
Route::get('/workout', 'HomeController@workout');
Route::get('/workout/training_by_body_types', 'HomeController@trainingByBodyTypes');
Route::get('/nutrition/nutrition_by_body_types', 'HomeController@nutritionByBodyTypes');

Route::get('/workout/burnFat', 'HomeController@burnFat');
Route::get('/workout/buildMuscle', 'HomeController@buildMuscle');

Route::get('/ask', 'HomeController@ask');
Route::get('/support', 'HomeController@support');

Route::get('/pages/{name}', 'HomeController@page');

Route::get('/metrics/bmi', 'MetricsController@bmi');
Route::post('/metrics/bmi', 'MetricsController@obtainBmi');

Route::get('/metrics/bmr', 'MetricsController@bmr');
Route::post('/metrics/bmr', 'MetricsController@obtainBmr');

Route::get('/metrics/water', 'MetricsController@water');
Route::post('/metrics/water', 'MetricsController@obtainWater');

Route::auth();



