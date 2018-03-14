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
Route::get('/leagues', 'LeagueController@leagues');
Route::get('/forum', 'PageController@underconstruction');
Route::get('/paddock', 'PageController@underconstruction');
Route::get('/guide', 'PageController@underconstruction');