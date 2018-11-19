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
    $exhibits = \App\exhibit::all();
    return view('welcome', compact('exhibits'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/new', 'PostController')->middleware('auth');

Route::get('/new', function () {
    return view('new');
});
