<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

// Home
Route::get('/', function () {
  $page = 'Todo List Application';
  return view('index', compact('page'));
});

// Members INDEX
Route::get('/members', 'MembersController@index');

// Members SHOW
Route::get('/members/{id}', 'MembersController@show');
