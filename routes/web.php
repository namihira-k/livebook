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

Route::get('/', 'Web\WelcomeWebController@get');
Route::get('/web/welcome', 'Web\WelcomeWebController@get');

Route::get('/web/eventlist', 'Web\EventListWebController@get');
Route::get('/web/eventinfo', 'Web\EventInfoWebController@get');