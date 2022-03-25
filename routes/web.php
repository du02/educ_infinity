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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'access.pages.admin'])->group(function(){
    Route::prefix('admin')->group(function(){

        // admin/teachers
        Route::get('teachers', 'Admin\\TeacherController@index')->name('admin.teachers.index');
        Route::get('teachers/create', 'Admin\\TeacherController@create')->name('admin.teachers.create');
        Route::post('teachers', 'Admin\\TeacherController@store')->name('admin.teachers.store');
        Route::get('teachers/{id}/edit', 'Admin\\TeacherController@edit')->name('admin.teachers.edit');
        Route::post('teachers/{id}', 'Admin\\TeacherController@update')->name('admin.teachers.update');
        Route::get('teachers/{id}/remove' , 'Admin\\TeacherController@destroy')->name('admin.teachers.destroy');

        // admin/studants
        Route::get('studants', 'Admin\\StudantController@index')->name('admin.studants.index');
        Route::get('studants/create', 'Admin\\StudantController@create')->name('admin.studants.create');
        Route::post('studants', 'Admin\\StudantController@store')->name('admin.studants.store');
        Route::get('studants/{id}/edit', 'Admin\\StudantController@edit')->name('admin.studants.edit');
        Route::post('studants/{id}', 'Admin\\StudantController@update')->name('admin.studants.update');
        Route::get('teachers/{id}' , 'Admin\\StudantController@destroy')->name('admin.studants.destroy');

        // admin/questions
        Route::get('questions', 'Admin\\QuestionController@index')->name('admin.questions.index');
        Route::get('questions/create', 'Admin\\QuestionController@create')->name('admin.questions.create');
    });
});


