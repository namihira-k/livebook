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

Route::get('/web/liveinfo', 'Web\LiveInfoWebController@get');

Route::get('hello', 'HelloController@index');
Route::get('sample/model/{type?}', 'SampleController@model');
Route::get('react', 'ReactController@index');