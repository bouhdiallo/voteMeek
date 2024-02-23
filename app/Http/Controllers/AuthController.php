<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
          'email'=> 'required|email',
          'password' => 'required'

        ]);

        if(auth()->attempt($request->only('email', 'password')))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors('les identifiants ne correspondent pas');

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('/inscription/Electeur');
    }
}
