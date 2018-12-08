<?php

// Grouping Controller Directory Admin
Route::namespace('Admin')->group(function () {
    
    Route::prefix('exam')->group(function () {
        Route::post('/list', 'TestController@index');
        Route::post('/saved', 'TestController@store');
    });

    Route::prefix('question')->group(function () {
        Route::post('/list', 'QuestionController@index');
        Route::post('/saved', 'QuestionController@store');
    });

    Route::prefix('student')->group(function () {
        Route::post('/list', 'StudentController@index');
        Route::post('/saved', 'StudentController@store');
    });

});
