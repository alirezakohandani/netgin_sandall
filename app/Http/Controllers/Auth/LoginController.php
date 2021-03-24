<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Login form
     *
     * @return void
     */
    public function loginForm()
    {
        return view('auth.login');
    }
}
