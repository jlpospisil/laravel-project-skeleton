<?php

namespace App\Http\Controllers\WebApiControllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUserDetails () {
        return Auth::user();
    }
}
