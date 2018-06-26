<?php

$redirect_to_home = function () { return redirect('/'); };

// Authentication routes
Auth::routes();
Route::any('/logout', 'Auth\LoginController@logout');

// Override registration routes to disable registration
Route::get('/register', $redirect_to_home)->name('register');
Route::any('/register', $redirect_to_home);

//
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', $redirect_to_home);