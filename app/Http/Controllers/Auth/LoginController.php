<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * User login 
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
       
        $this->validateForm($request, 'email');
       
        if (Auth::attempt(array('email' => $request->input('username'), 'password' => $request->input('password')))) {
            
            return redirect()->intended()->with('logined');
        }
        
            return back()->with('failed', true);
        
    }

    /**
     * Validation login form
     *
     * @param Request $request
     * @param string|int $x
     * @return boolean
     */
    private function validateForm(Request $request, $type): bool
    {
        if ($type === 'email') {
            return $request->validate([
                'username' => 'required|email|exists:users,email',
                'password'   => 'required', 
            ]);
                return true;
        }

            return $request->validate([
                'username' => 'required|numeric|exists:users,cellphone',
                'password'   => 'required',
            ]);
                return true;
    }

}
