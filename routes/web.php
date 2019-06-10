<?php

Route::get('welcome', function () {
    return view('blog-layout');
});

Route::get('/', 'PostController@index')->name('home');
Route::get('archive', 'PostController@archive')->name('archive');
Route::get('new_post', 'PostController@create')->name('new.post');
Route::post('new_post', 'PostController@store')->name('save.new.post');

Route::get('author/{id}', 'AuthorController@show')->name('author');

Route::get('category/{name}', 'CategoryController@getPostsByCategory')->name('posts.by.category');
