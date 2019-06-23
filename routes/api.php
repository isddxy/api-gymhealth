<?php

Route::post('/register', 'AuthController@register')->middleware('localization');
Route::post('/login', 'AuthController@login')->middleware('localization');
Route::get('/user', 'AuthController@user')->middleware('localization');
Route::post('/logout', 'AuthController@logout');

//Поиск
Route::prefix('search')->group(function () {
    Route::get('/muscle-group', 'MuscleController@group')->middleware('localization');
    Route::get('/muscles', 'MuscleController@index')->middleware('localization');
    Route::get('/workouts', 'WorkoutController@index')->middleware('localization');
});

Route::get('/muscle-group', 'MuscleController@group')->middleware('localization');

Route::prefix('workout')->group(function () {
    Route::get('/{workout}', 'WorkoutController@show')->middleware('localization');
    Route::post('/create', 'WorkoutController@store')->middleware('auth:api', 'localization');
    Route::patch('/{workout}', 'WorkoutController@update')->middleware('auth:api', 'localization');
    Route::delete('/{workout}', 'WorkoutController@destroy')->middleware('auth:api');
});

Route::group(['prefix' => 'user/{id}'], function() {
    Route::get('/workouts', 'WorkoutController@getWorkoutUser')->middleware('localization');
});


