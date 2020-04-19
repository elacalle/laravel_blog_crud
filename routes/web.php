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
    return view('index');
});

Route::get('/posts', "PostsController@index");

Route::post('/posts/create', "PostsController@store");

Route::get('/posts/create', "PostsController@create")->name('posts.create');

Route::get('/posts/{posts}', "PostsController@show")->name('posts.show');

Route::put('/posts/{posts}/edit', "PostsController@update");

Route::get('/posts/{posts}/edit', "PostsController@edit")->name('posts.edit');

Route::get('/tags/{tag}', "TagsController@show")->name('tags.show');

Route::get('/contact', function () {
    return view("contact");
});
