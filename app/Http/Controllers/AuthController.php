<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|max :40|unique:users',
            'email' => 'required|string|unique:users',
            'phone' =>'required|min:5|max:12',
            'password' => 'required|string|min:6|max:12|confirmed',

        ]);

        User::create([
            'username' => $request ->username,
            'email' => $request -> email,
            'phone' => $request ->phone,
            'password' => $request ->password,
        ]);

        return redirect('/login')->with('success_status','Account created, please login.');
    }
}
