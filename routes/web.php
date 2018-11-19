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

Route::get('/', 'MainController@index')->name('index');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/start/course', 'CourseController@index')->name('course.start');
});

//Route::get('/home', 'HomeController@index')->name('home');
