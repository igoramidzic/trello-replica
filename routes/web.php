<?php

// GET Home
Route::get('/', 'HomeController@index');

// GET Members INDEX
Route::get('/members', 'MembersController@index');

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

// // GET Boards (If logged in)
// Route::get('/', 'BoardsController@index');

// POST Boards
Route::post('/create-board', 'BoardsController@store');

// DELETE Boards
Route::delete('/board-delete/{id}', 'BoardsController@destroy');

// GET Tasks
Route::get('/b/{id}/{board}', 'TasksController@index');

// POST Tasks
Route::post('/task-create', 'TasksController@store');

// UPDATE Tasks
Route::patch('/task-update/{id}', 'TasksController@update');

// DELETE Tasks
Route::delete('/task-delete/{id}', 'TasksController@destroy');

// GET Profile
Route::get('/{username}', 'ProfileController@index');
