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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ranking', 'Api\RankingApiController@get');

Route::get('/places', 'Api\PlaceApiController@get');

Route::get('/events', 'Api\EventApiController@get');

Route::post('/eventrequests', 'Api\EventRequestApiController@post');

Route::post('/comments', 'Api\CommentApiController@post');
Route::get('/comments', 'Api\CommentApiController@get');

Route::post('/ratings', 'Api\RatingApiController@post');
Route::get('/ratings', 'Api\RatingApiController@get');

Route::post('/files', 'Api\FileApiController@post');