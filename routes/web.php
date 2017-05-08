<?php

Auth::routes();

// Home
Route::get('/', 'HomeController@index');

// Members INDEX
Route::get('/members', 'MembersController@index');

// Members SHOW
Route::get('/members/{id}', 'MembersController@show');
