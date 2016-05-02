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
Route::get('/about', 'HomeController@about');
Route::get('/support', 'HomeController@support');
Route::get('/profile', 'HomeController@profile');
Route::get('/metrics', 'HomeController@metrics');
Route::get('/workout', 'HomeController@workout');
Route::get('/diet', 'HomeController@diet');
Route::get('/workout/training_by_body_types', 'HomeController@trainingByBodyTypes');
Route::get('/ask', 'HomeController@ask');
Route::get('/support', 'HomeController@support');
Route::get('/search', 'HomeController@search');


// dashboard

// dashboard pages resource
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard'], function () {

    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::resource('pages', 'PagesController', ['parameters' => 'singular']);

});

// metrics
Route::get('/pages/{name}', 'HomeController@page');

Route::get('/metrics/bmi', 'MetricsController@bmi');
Route::post('/metrics/bmi', 'MetricsController@obtainBmi');

Route::get('/metrics/bmr', 'MetricsController@bmr');
Route::post('/metrics/bmr', 'MetricsController@obtainBmr');

Route::get('/metrics/water', 'MetricsController@water');
Route::post('/metrics/water', 'MetricsController@obtainWater');

Route::auth();



