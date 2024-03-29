<?php


Route::get('taskss', 'TasksController@index');

Route::get('tasks/{task}', 'TasksController@show');

//Post Route
Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/posts/tags/{tag}', 'TagController@index');

//Login-Registration Route
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');