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

use Illuminate\Http\Request;

use App\Http\Controllers\PostController;

use App\Http\Controllers\HelloController;


Route::get('hello','HelloController@index');


Route::resource('/posts', 'PostController');
Route::get('posts', 'PostController@getSearch');


Route::get('/hello','HelloController@hello');
Route::post('/hello','HelloController@search');

Route::get('place','PlaceController@index');
Route::post('place/find','PlaceController@search');
Route::post('place/gift','GiftController@search');
