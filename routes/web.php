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
    Route::get('/lection/{id}', 'LectionsController@show')->name('lection');
    Route::get('/tests', 'TestsController@index')->name('tests.list');
    Route::get('/practics', 'PracticController@index')->name('practic.list');
    Route::get('/practic/{id}', 'PracticController@show')->name('practic');

    // группа маршрутов для администраторской панели
    // TODO сделать посредник, который будет проверять роль!!!
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/lections', 'AdminLectionsController@index')->name('admin.lections');
        Route::get('/lections/create', 'AdminLectionsController@create')->name('admin.lections.create');
        Route::post('/lections/create', 'AdminLectionsController@store')->name('admin.lections.store');
        Route::get('/lections/update/{id}', 'AdminLectionsController@edit')->name('admin,lections.edit');
        Route::put('/lections/update/{id}', 'AdminLectionsController@update')->name('admin.lections.update');
        Route::delete('/lections/delete/{id}', 'AdminLectionsController@delete')->name('admin.lections.delete');

        Route::get('/practics', 'AdminPracticController@index')->name('admin.practics');
        Route::get('/practics/create', 'AdminPracticController@create')->name('admin.practics.create');
        Route::post('/practics/create', 'AdminPracticController@store')->name('admin.practics.store');
        Route::get('/practics/update/{id}', 'AdminPracticController@edit')->name('admin,practics.edit');
        Route::put('/practics/update/{id}', 'AdminPracticController@update')->name('admin.practics.update');
        Route::delete('/practics/delete/{id}', 'AdminPracticController@delete')->name('admin.practics.delete');

        Route::get('/tests', 'AdminTestsController@index')->name('admin.tests');
        Route::get('/tests/create', 'AdminTestsController@create')->name('admin.tests.create');
        Route::post('/tests/create', 'AdminTestsController@store')->name('admin.tests.store');
        Route::delete('/tests/delete/{id}', 'AdminTestsController@delete')->name('admin.tests.delete');


        // helping routs
        Route::get("/tests/question/template", 'AdminTestsController@getQuestionTemplate')->name('admin.tests.getQuestionTemplate');
        Route::get("/tests/answer/template", 'AdminTestsController@getAnswerTemplate')->name('admin.tests.getAnswerTemplate');
    });
});

//Route::get('/home', 'HomeController@index')->name('home');
