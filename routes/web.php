<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post','App\Http\controllers\PostController@index')->name('post');
Route::get('/post/details/{id}','App\Http\controllers\PostController@details')->name('post.details');
// Like Or Dislike
Route::post('save-likedislike','App\Http\controllers\PostController@save_likedislike');
