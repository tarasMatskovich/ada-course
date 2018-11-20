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
    Route::get('/lections', 'LectionsController@index')->name('lections.list');
    Route::get('/tests', 'TestsController@index')->name('tests.list');
    Route::get('/practics', 'PracticController@index')->name('practic.list');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/lections', 'AdminLectionsController@index')->name('admin.lections');
        Route::get('/lections/create', 'AdminLectionsController@create')->name('admin.lections.create');
    });
});

//Route::get('/home', 'HomeController@index')->name('home');
