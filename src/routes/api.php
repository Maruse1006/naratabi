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

Route::get('api/test','TestAPIController@index');

Route::get('/posts',function(){
  $post= Post::create(['title'=>'my first post',
   'slug'=>'my-first-post'
]);

return $post;
});

Route::get('/posts','PostConroller@index');

//create route
Route::post('/posts','PostConroller@index');

//update
Route::put('/posts', 'PostConroller@index');

Route::delete('/posts','PostConroller@index');
