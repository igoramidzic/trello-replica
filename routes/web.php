<?php

// // Auth routes
// Auth::routes();

// GET Home
Route::get('/', 'HomeController@index')->name('home');

// // GET signup
// Route::get('/signup', 'Auth\RegisterController@index');
//
// // GET login
// Route::get('/login', 'Auth\LoginController@index');

// GET Members INDEX
Route::get('/members', 'MembersController@index')->name('members');

// GET Members SHOW
Route::get('/members/{id}', 'MembersController@show');

// GET Register
Route::get('/signup', 'RegistrationController@create')->name('signup');

// POST Register
Route::post('/signup', 'RegistrationController@store');

// GET Login
Route::get('/login', 'SessionsController@create')->name('login');

// POST Login
Route::post('/login', 'SessionsController@store');

// POST Logout
Route::post('/logout', 'SessionsController@destroy');
