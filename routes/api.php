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


Route::post('/search','PostController@search');

Route::get('/category','HomeController@index');

//create route
Route::get('/posts','PostController@post');


Route::post('/delete/{id}','PostController@delete');

Route::get('/edit/{id}','PostController@edit');


Route::get('/category/{id}','PostController@find');

//Route::get('/top/{id}','PostController@index');

Route::post('/form/s3','PostImageController@s3');

//Route::get('/show','PostImageController@show');
Route::get('category/post/{id}','PostController@detail');

//Route::get('/register','PostImageController@register');
Route::post('/register','RegisterController@register');


//Route::post('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth:api'], function () {
  Route::post('/dashboard/edit','PostController@update');
  Route::get('/user', 'Auth\LoginController@user');
  Route::post('/review','ReviewController@post');
 // Route::post('/like/{id}','LikeController@store');
  Route::post('/like/{imageId}','LikeController@store');
  //Route::post('/like/{imageId}','LikeController@destroy');
  Route::get('/show','PostImageController@show');
});
//Route::get('/show','PostImageController@show');
Route::get('/category/post/review/{id}','ReviewController@list');
Route::post('/logout', 'Auth\LoginController@logout');
Route::get('/show/show','PostImageController@showup');

//Route::get('/category/post/{id}/{id}','PostController@list');


