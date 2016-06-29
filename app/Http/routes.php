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

//Authentication Routes
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Password Reset Routes
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

//Categories route
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::get('category/{name}', array('as' => 'categories.posts', 'uses' => 'CategoryController@getPosts'));

Route::post('blog/{slug}', array('as' => 'comments.store', 'uses' => 'CommentController@store'));
Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'))->where('slug', '[\w\d\-\_]+');
Route::get('blog', array('uses' => 'BlogController@getIndex', 'as' => 'blog.index'));

Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
Route::post('contact', ['as' => 'sendmail', 'uses' => 'ContactController@sendmail']);
Route::post('subscribe', ['as' => 'subscriberStore', 'uses' => 'ContactController@subscriberStore']);