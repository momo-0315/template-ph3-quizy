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
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index');
Route::get('/', 'QuizController@index');
Route::get('/quiz/{id}', 'QuizController@quiz')->name('id');
//クイズ自体の追加・削除
Route::get('/big_question/add', 'AuthController@big_question_add');
Route::get('/big_question/delete/{id}', 'AuthController@big_question_delete')->name('id');
//問題の追加・削除
Route::get('/question/add/{big_question_id}', 'AuthController@question_add')->name('big_question_id');
Route::get('/question/edit/{big_question_id}/{question_id}', 'AuthController@question_edit');

//クイズ自体の追加 big_question_id取得
Route::post('/big_question_data_add', 'AuthController@big_question_data_add')->name('big_question_data_add');
//クイズ自体の削除 big_question_id取得
Route::post('/big_question_data_delete/{id}', 'AuthController@big_question_data_delete')->name('big_question_data_delete');

//問題の追加 big_question_id取得
Route::post('/question_data_add/{big_question_id}', 'AuthController@question_data_add')->name('question_data_add');

//問題の編集
Route::post('/question_data_edit/{big_question_id}/{question_id}', 'AuthController@question_data_edit')->name('question_data_edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
