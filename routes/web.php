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


Route::get('/quiz/create', 'QuizController@create')->name('quiz.create');
Route::post('/quiz', 'QuizController@store')->name('quiz.store');
Route::get('/quiz', 'QuizController@index')->name('quiz.index');
Route::get('/quiz/{id}', 'QuizController@show')->name('quiz.show');
Route::get('/quiz/{id}/edit', 'QuizController@edit')->name('quiz.edit');
Route::put('/quiz/{id}', 'QuizController@update')->name('quiz.update');
Route::delete('/quiz/{id}', 'QuizController@delete')->name('quiz.delete');
Route::post('/quiz/{id}/choice','QuizController@StoreChoice')->name('choice.store');
Route::delete('/quiz/{id}/choice', 'QuizController@DeleteChoice')->name('choice.delete');
Route::get('/test', 'TestController@index')->name('test.index');
Route::post('/test', 'TestController@answer')->name('test.answer');
