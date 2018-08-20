<?php

/**
 * These routes are used via axios by the SPA web app
 */

Route::get('/user/details', 'WebApiControllers\UserController@getUserDetails');