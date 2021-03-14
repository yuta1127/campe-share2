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

# ユーザー新規登録、ログイン、ログアウト
Auth::routes();

# TOPページ
Route::get('/', 'TopController@search');

# index,show
Route::resource('/articles', 'ArticleController')->only(['index','show']);

# create,store
Route::get('create','ArticleController@create')->name('articles.create')->middleware('auth');
Route::post('store','ArticleController@store')->name('articles.store')->middleware('auth');



# ログインしている時のみ使用可能なメソッド
Route::group(['middleware' => 'auth'], function() {


    Route::resource('/articles', 'ArticleController')->only(['edit', 'update','destroy']);


    Route::prefix('articles')->name('articles.')->group(function () {
        Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
        Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
    });
});


# ゲストユーザーログイン
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');