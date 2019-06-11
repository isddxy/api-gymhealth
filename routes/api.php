<?php

// use Illuminate\Http\Request;



Route::post('/register', 'AuthController@register')->middleware('localization');
Route::post('/login', 'AuthController@login')->middleware('localization');
Route::get('/user', 'AuthController@user')->middleware('localization');
Route::post('/logout', 'AuthController@logout');


Route::prefix('muscles')->group(function () {
    Route::get('/', 'MuscleController@index');
    //Route::post('/', 'MusclesController@store');
});