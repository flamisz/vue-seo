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

Route::get('articles/{article}', function (App\Article $article) {
    $article->load('comments.owner');
    return view('articles')->with('article', $article);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
