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

Route::get('/top','PostController@index');

//create route
Route::get('/posts','PostController@create');


Route::post('/delete/{id}','PostController@delete');

Route::get('/posts/{id}','PostController@edit');

Route::post('/posts/{id}','PostController@update');
Route::get('/top/{id}','PostController@find');

//Route::get('/top/{id}','PostController@index');

Route::post('/form/s3','PostImageController@s3');

Route::get('/show','PostImageController@show');
Route::get('top/post/{id}','PostController@detail');

<?php

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });

});