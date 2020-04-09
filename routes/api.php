<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('videos', 'api\\VideoApiController');
// Route::resource('podcasts', 'api\\PodcastApiController');
// Route::resource('autores', 'api\\AutorApiController');
Route::resource('temas', 'api\\TemaApiController');
Route::apiResource('entidades', 'api\\EntidadeController');
// Route::resource('tags', 'api\\TagApiController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
