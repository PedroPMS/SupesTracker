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

Route::get('/', 'PostsController@index')->name('home');

Auth::routes();

Route::get('/supes', 'SupesController@index')->name('supes');
Route::get('/supes/{id_supe}/{supe}', 'SupesController@show')->where('id_supe', '[0-9]+')->name('supes.show');

Route::get('/posts/{id_supe}/{supe}', 'PostsController@showSupePosts')->where('id_supe', '[0-9]+')->name('posts.show');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/submit', 'PostsController@submit')->name('posts.submit');
    Route::get('/posts/edit/{id_post}', 'PostsController@edit')->where('id_post', '[0-9]+')->name('posts.edit');
    Route::post('/posts/create', 'PostsController@create')->name('posts.create');
    Route::post('/posts/update', 'PostsController@create')->name('posts.update');
    Route::get('/posts/delete', 'PostsController@delete')->name('posts.delete');
});
