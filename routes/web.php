<?php

// GET Home
Route::get('/', 'HomeController@index');

// // GET Boards
// Route::get('/', 'BoardsController@index');

// GET Members INDEX
Route::get('/members', 'MembersController@index');

// GET Members SHOW
Route::get('/members/{id}', 'MembersController@show');

// GET Register
Route::get('/signup', 'RegistrationController@index');

// POST Register
Route::post('/signup', 'RegistrationController@store');

// GET Login
Route::get('/login', 'SessionsController@index')->name('login');

// POST Login
Route::post('/login', 'SessionsController@store');

// POST Logout
Route::post('/logout', 'SessionsController@destroy');

// GET Boards
Route::get('/{username}/{board}', 'BoardsController@index');

// POST Boards
Route::post('/create-board', 'BoardsController@store');

// GET Profile
Route::get('/{username}', 'ProfileController@index');
