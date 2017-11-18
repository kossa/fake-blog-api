<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('posts', 'PostController@index'); // Get all posts with search option
Route::get('posts/featured', 'PostController@featured'); // Get feauted posts
Route::get('posts/popular', 'PostController@popular'); // Get most visited posts
Route::get('posts/{post}/show', 'PostController@show'); // Get one post
Route::get('posts/{post}/comments', 'PostController@comments'); // Get comments of a post
Route::get('posts/{post}/author', 'PostController@author'); // Get authors of a post
// Route::get('posts/{post}/photos', 'PostController@photos'); // Get photos of a post

Route::get('authors', 'AuthorController@index'); // Get authors
Route::get('authors/{id}/show', 'AuthorController@show'); // Get an author
Route::get('authors/{id}/posts', 'AuthorController@posts'); // Get an author


