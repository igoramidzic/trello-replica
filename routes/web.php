<?php

// Home
Route::get('/', function () {
  return view('index');
});

// Login
Route::get('/login', 'MembersController@login');

// Register
Route::get('/signup', 'MembersController@register');

// Members INDEX
Route::get('/members', 'MembersController@index');

// Members SHOW
Route::get('/members/{id}', 'MembersController@show');

// Tasks SHOW
Route::get('/members/{id}/tasks', 'MembersController@show');
