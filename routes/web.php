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

Route::get('/quiz/create', function () {
    return view('quiz.create');
})->name('quiz.create');
Route::get('/quiz/create', 'QuizController@create')->name('quiz.create');
Route::post('/quiz', 'QuizController@store')->name('quiz.store');
Route::post('/task', 'QuizController@store')->name('quiz.store');