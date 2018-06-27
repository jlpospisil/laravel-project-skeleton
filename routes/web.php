<?php

$redirect_to_root = function () { return redirect('/'); };

// Authentication routes
Auth::routes();
Route::any('/logout', 'Auth\LoginController@logout');

// Override registration routes to disable registration
Route::get('/register', $redirect_to_root)->name('register');
Route::any('/register', $redirect_to_root);

// Routes from axios requests from vue
Route::get('/user', 'WebControllers\UserController@getUserDetails');

// Fall back to vue router to handle request
Route::get('/{vue_router_route?}', 'WebControllers\VueRouterController@index');