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

Route::resource('videos', 'admin\\VideoController');
Route::resource('podcasts', 'admin\\PodcastController');
Route::resource('autores', 'admin\\AutorController');
Route::resource('temas', 'admin\\TemaController');
Route::resource('tags', 'admin\\TagController');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
