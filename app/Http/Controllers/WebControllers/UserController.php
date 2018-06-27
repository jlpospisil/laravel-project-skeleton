<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getUserDetails () {
        return Auth::user();
    }
}
