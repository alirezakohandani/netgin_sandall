<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Registeration form
     *
     * @return void
     */
    public function registerationForm()
    {
        return view('auth.register');
    }

    /**
     * User registration
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $this->validateForm($request);
    }

    /**
     * Validation register form
     *
     * @param Request $request
     * @return void
     */
    private function validateForm(Request $request)
    {
        $request->validate([
            'cell_email' => 'required|max:255',
            'password' => 'required|password|max:6|confirmed'
        ]);
    }

    
}
