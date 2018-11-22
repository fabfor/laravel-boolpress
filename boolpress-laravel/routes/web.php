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

Route::get('/', 'BlogController@index');

Route::get('/post/{id}', 'BlogController@showPost')->name('post');


Route::get('/author', function () {
    return view('author');
});

Route::prefix('/admin')->middleware('auth')->group(function () {

  Route::get('posts','AdminController@posts')->name('admin.posts');
  Route::match(['get','post'], 'posts/edit/{post}','AdminController@postEdit')->name('admin.posts.edit');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
