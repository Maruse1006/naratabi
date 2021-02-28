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


/*Route::get('/posts',function(){
  $post= Post::create(['title'=>'my first post',
   'slug'=>'my-first-post'
]);

return $post;
});
*/
Route::get('/posts','PostController@index');

//create route
Route::post('/posts','PostController@store');

//update
//Route::store('/posts', 'PostController@index');

Route::delete('/posts','PostController@index');

//Route::store('/posts', 'PostController@index');

 Route::middleware('auth:api')->get('oauth/clients', function (Request $request) {
  return $request->user();
 });

 //Route::get('/user/{id}', 'UserController@getData')->middleware('auth:api');

 Route::group(["middleware" => "api"], function () {
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/current_admin_user', function () {
        return Auth::user();
    });
    Route::post('/admin', 'Auth\LoginController@login');
    //追加
    Route::group(['middleware' => ['auth:api']], function () {

    Route::apiResource('admin_users', 'Api\AdminUserController')->except(['show']);
        //ここに認証が必要なパスを書いていく
    });
});

//get:post 記事投稿

// public function resource(Request $request)
// {
//   $users=User::find($id);
//   //viewにデータを渡す
//   return view('place.show',['items'=>$places]);
// }
