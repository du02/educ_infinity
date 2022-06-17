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
        Route::post('questions', 'Admin\\QuestionController@store')->name('admin.questions.store');
        Route::get('questions/{id}/edit', 'Admin\\QuestionController@edit')->name('admin.questions.edit');
        Route::post('questions/{id}', 'Admin\\QuestionController@update')->name('admin.questions.update');
        Route::get('questions/{id}', 'Admin\\QuestionController@destroy')->name('admin.questions.destroy');

    });
});

Route::middleware(['auth'])->group(function(){
    Route::prefix('teacher')->group(function(){

        // teacher/questions
        Route::get('questions', 'Teacher\\QuestionController@index')->name('teacher.questions.index');
        Route::get('questions/create', 'Teacher\\QuestionController@create')->name('teacher.questions.create');
        Route::post('questions', 'Teacher\\QuestionController@store')->name('teacher.questions.store');
        Route::get('questions/{id}/edit', 'Teacher\\QuestionController@edit')->name('teacher.questions.edit');
        Route::post('questions/{id}', 'Teacher\\QuestionController@update')->name('teacher.questions.update');
        Route::get('questions/{id}', 'Teacher\\QuestionController@destroy')->name('teacher.questions.destroy');
    });
});

Route::middleware(['auth'])->group(function(){
    Route::prefix('studant')->group(function(){

        Route::get('home', 'Studant\\CharacterController@index')->name('studant.home');
        Route::get('character', 'Studant\\CharacterController@character')->name('studant.character');
        Route::post('studant/character/selected', 'Studant\\CharacterController@characterSelected')->name('studant.character.selected');
        Route::get('questions', 'Studant\\ResolveQuestionsController@index')->name('studant.questions');
        Route::get('questions/resolve', 'Studant\\ResolveQuestionsController@resolveQuestions')->name('studant.questionsResolve');

    });
});
