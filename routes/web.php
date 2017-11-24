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

/**
 *  Container Page
 */
// http://localhost/
Route::get('/', 'PagesController@home');
// http://localhost/services
Route::get('/services', 'PagesController@services');
// http://localhost/about
Route::get('/about', 'PagesController@about');
// http://localhost/posts
// http://localhost/posts/{post}
// http://localhost/posts/{post}/edit
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
