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

Route::get('/', function () {return view('welcome');});
Route::namespace('App\Http\Controllers\Blog')->name('blog.')->group(function () {
    Route::match(['get', 'post'], 'index', 'TopController@index')->name('index');

    Route::prefix('laravel')->name('laravel.')->group(function () {
        Route::match(['get', 'post'], 'index', 'LaravelController@index')->name('index');
        Route::match(['get', 'post'], '002', 'LaravelController@content002')->name('002');
    });
    Route::prefix('xampp')->name('xampp.')->group(function () {
        Route::match(['get', 'post'], 'index', 'XamppController@index')->name('index');
        Route::match(['get', 'post'], '002', 'XamppController@content001')->name('001');
    });
});
