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
// overwrite registration, we dont want it now, links will be automatically hidden in the views from the views
Route::get('/register', function () { return view('welcome'); });

Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'VideosController@index')->name(config('routes.home'));
Route::get('/videos', 'VideosController@index')->name(config('routes.videos'));
Route::get('/add_video', 'VideosController@createForm')->name(config('routes.add_video'));
Route::post('/video', 'VideosController@create')->name(config('routes.post_video'));
