<?php

use Illuminate\Support\Facades\Route;

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
    return view('top');
});

/* Q&A */
Route::get('/questions/index', "QuestionController@index");
Route::post('/questions/create', "QuestionController@create");

/* Route::resource(‘URL’, ‘コントローラー名’, [‘only’ =>[‘メソッド名’, ‘メソッド名’]]); */
Route::resource('questions', 'QuestionController',['only'=>[
    'index',
    'create',
    'store',
    ]]);

Route::resource('/questions/answers', 'AnswerController',['only'=>[
    'index',
    'create',
    'store',
    'show'
    ]]);


/* AGRI PLANS */
Route::get('/plans/index', "planController@index");
Route::post('/plans/create', "planController@create");

Route::resource('plans', 'planController',['only'=>[
    'index',
    'create',
    'store',
    ]]);

Route::resource('/plans/comments', 'PlanCommentController',['only'=>[
    'index',
    'create',
    'store',
    'show'
    ]]);