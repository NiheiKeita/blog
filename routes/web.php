<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//表側サイト
Route::namespace('App\Http\Controllers\Blog')->group(function () {
    Route::prefix('blogs')->name('blog.')->group(function () {
        Route::match(['get', 'post'], '/', 'BlogController@index')->name('index');
        Route::match(['get', 'post'], '/{id}', 'BlogController@show')->name('show');
    });

    Route::prefix('tags')->name('tag.')->group(function () {
        Route::match(['get', 'post'], '/', 'TagController@index')->name('index');
        Route::match(['get', 'post'], '/{id}', 'TagController@show')->name('show');
    });
});
Route::namespace('App\Http\Controllers\Blog')->group(function () {
    Route::match(['get', 'post'], '/', 'TopController@index')->name('top');
});

//管理画面
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@check')->name('login.check');
    Route::match(['get', 'post'], '/logout', 'LoginController@logout')->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::match(['get', 'post'], '/top', 'TopController@index')->name('top');
        Route::get( '/comments', 'CommentController@index')->name('comment.index');
        Route::get( '/comments/{id}', 'CommentController@show')->name('comment.show');
        Route::name('blog.')->group(function () {
            Route::get( '/blogs', 'BlogController@index')->name('index');
            Route::get( '/blogs/create', 'BlogController@create')->name('create');
            Route::post( '/blogs', 'BlogController@store')->name('store');
            Route::get( '/blogs/{id}', 'BlogController@show')->name('show');
            Route::get( '/blogs/{id}/edit', 'BlogController@edit')->name('edit');
            Route::put( '/blogs/{id}', 'BlogController@update')->name('update');
            Route::delete( '/blogs/{id}', 'BlogController@delete')->name('delete');
        });
    });
});

//API
Route::namespace('App\Http\Controllers\Api')->prefix('api')->name('api.')->group(function () {
    Route::get( '/blogs', 'BlogController@index')->name('blog.index');
    Route::get( '/tags', 'TagController@index')->name('tag.index');
    Route::post( '/comments', 'CommentController@store')->name('comment.store');
});
