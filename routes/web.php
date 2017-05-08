<?php

// Home
Route::get('/', function () {
  $page = 'Todo List Application';
  return view('index', compact('page'));
});

// Members INDEX
Route::get('/members', 'MembersController@index');

// Members SHOW
Route::get('/members/{id}', 'MembersController@show');

// GET login
Route::get('/login', 'MembersController@login');

// POST login
Route::post('/login', 'MembersController@create');

// GET Register
Route::get('/signup', 'MembersController@register');

// POST Register
Route::post('/members', 'MembersController@store');
