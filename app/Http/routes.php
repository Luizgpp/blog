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
//Rotas de autenticação
Route::get('auth/login','Auth\AuthController@getLogin')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@logout')->name('logout');

//Rotas de registro
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

//Password Reset
Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm')->name('password.reset');
Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset','Auth\PasswordController@reset');

//Blog
Route::get('blog','BlogController@getIndex')->name('blog.index');

//Posts
Route::resource('posts','PostController');

// slugs
Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');

// categories
Route::resource('categories','CategoryController',['except'=>'create']);

// tags
Route::resource('tags','TagController',['except'=>'create']);

// comments
Route::post('comments/{post_id}','CommentsController@store')->name('comments.store');
Route::get('comments/{id}/edit','CommentsController@edit')->name('comments.edit');
Route::put('comments/{id}','CommentsController@update')->name('comments.update');
Route::delete('comments/{id}','CommentsController@destroy')->name('comments.destroy');
// Pages
Route::get('contact', 'PagesController@getContact');

Route::post('contact', 'PagesController@postContact')->name('post.contact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');
