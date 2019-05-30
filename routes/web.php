<?php

Route::get('welcome', function () {
    return view('blog-layout');
});

Route::get('archive', 'Postcontroller@archive');


Route::resource('/', 'PostController');

Route::resource('author', 'AuthorController');
