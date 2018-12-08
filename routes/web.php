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

// Routing for student
Route::prefix('exam')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/info/{id}', 'ExamController@show');
    Route::get('/info/{id}/student/{nis}', 'ExamController@show_with_student');
});

Route::get('/student/{nis}', 'StudentController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
