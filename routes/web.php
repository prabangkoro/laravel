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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'hello world!';
});

Route::get('/user/{_id}', function ($_id) {
    return 'hello, '.$_id;
});

Route::get('/content/{_ctn}/index/{_idx}', function ($_ctn, $_idx) {
    return 'content: '.$_ctn.' and index: '.$_idx;
});

Route::get('/username/{_username?}', function ($_username = 'default') {
    return 'username: '.$_username;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
