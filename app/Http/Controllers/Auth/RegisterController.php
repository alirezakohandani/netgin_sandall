<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $validate = $this->validateForm($request);

        User::create([
            'email'     => ($validate === 'email') ? $request->cell_email : null,
            'cellphone' => !($validate === 'email') ? $request->cell_email : null,
            'password'  => Hash::make($request->password),
        ]); 
    }

    /**
     * Validation register form
     *
     * @param Request $request
     * @return void
     */
    private function validateForm(Request $request)
    {
        if (!is_numeric($request->cell_email)) {
            $request->validate([
                'cell_email' => 'required|email|max:255',
                'password' => 'required|min:6|confirmed'
            ]);
            return 'email';
        }
            $request->validate([
                'cell_email' => 'required|numeric|digits:11',
                'password' => 'required|max:6|confirmed'
            ]);
            return 'cellphone';
    }

    
}
