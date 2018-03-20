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


Auth::routes();

Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/forum', 'PageController@underconstruction');
Route::get('/paddock', 'PageController@underconstruction');
Route::get('/guide', 'PageController@underconstruction');

Route::get('articles/create','ArticleController@create');
Route::post('/articles', 'ArticleController@store');
Route::get('articles/{id}','ArticleController@article');

Route::post('/comments/{t}/{i}', 'CommentController@store');

Auth::routes();


Route::get('/LFS', 'SimController@LFS');
Route::get('/RaceRoom', 'SimController@RaceRoom');

Route::get('/leagues', 'LeagueController@leagues');
Route::get('leagues/{id}', 'LeagueController@league');
Route::get('/myleagues', 'LeagueController@myleagues');