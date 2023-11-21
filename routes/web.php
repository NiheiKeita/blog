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

Route::namespace('App\Http\Controllers\Blog')->prefix('blogs')->name('blog.')->group(function () {
    Route::match(['get', 'post'], '/', 'BlogController@index')->name('index');
    // Route::match(['get', 'post'], '{id}', 'BlogController@content')->name('blog');
    Route::match(['get', 'post'], '{id}', 'BlogController@content')->name('content');
});
Route::namespace('App\Http\Controllers\Blog')->group(function () {
    Route::match(['get', 'post'], '/', 'TopController@index')->name('top');
});




Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@check')->name('login.check');
    Route::match(['get', 'post'], '/logout', 'LoginController@logout')->name('logout');

    Route::match(['get', 'post'], '/top', 'TopController@index')->name('top');
});
