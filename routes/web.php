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
    return redirect('examination');
});

// Routing for student
Route::prefix('examination')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/info/{id}', 'TestController@show');
    Route::get('/info/{id}/student/{nis}', 'TestController@show_with_student');
});

Route::get('/student/{nis}', 'StudentController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
