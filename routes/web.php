<?php

$redirect_to_root = function () { return redirect('/'); };

// Authentication routes
Auth::routes();
Route::any('/logout', 'Auth\LoginController@logout');

// Override registration routes to disable registration
//Route::get('/register', $redirect_to_root)->name('register');
//Route::any('/register', $redirect_to_root);

// Fall back to vue router to handle request
Route::get('/{vue_router_route1?}/{vue_router_route2?}/{vue_router_route3?}', 'WebControllers\VueRouterController@index');