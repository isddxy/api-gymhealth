<?php

Route::post('/register', 'AuthController@register')->middleware('localization');
Route::post('/login', 'AuthController@login')->middleware('localization');
Route::get('/user', 'AuthController@user')->middleware('localization');
Route::post('/logout', 'AuthController@logout');


Route::prefix('muscles')->group(function () {
    Route::get('/', 'MuscleController@index')->middleware('localization');
});


Route::get('/muscle-group', 'MuscleController@group')->middleware('localization');;


Route::prefix('workout')->group(function () {
    Route::post('/', 'WorkoutController@store')->middleware('auth:api', 'localization');
});
