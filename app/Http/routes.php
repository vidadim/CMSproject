<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('posts/index', 'postController@index');

Route::get('posts/create', 'postController@create');
Route::post('posts/store', 'postController@store');

Route::get('posts/{post}/edit', 'postController@edit');
Route::patch('posts/{post}/update', 'postController@update');