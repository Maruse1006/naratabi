<?php

use Illuminate\Http\Request;

use Laravel\Passport\Passport;

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




Route::get('/posts','PostController@index');

//create route
Route::post('/posts','PostController@create');


Route::post('/delete/{id}','PostController@delete');

Route::get('/edit/{id}','PostController@edit');

Route::post('/update/{id}','PostController@update');
