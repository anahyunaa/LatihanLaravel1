<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('signup');  
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        session()->put('user', [
            'email' => $validated['email'],
            'password' => $validated['password'],
            'is_login' => true,  
        ]);

        return redirect('/signin')->with('success', 'Registration Successful!');
    }

    public function showLoginForm()
    {
        return view('signin');  
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = session('user');
        if ($user && $user['email'] === $validated['email'] && $user['password'] === $validated['password']) {
            session()->put('user', [
                'email' => $user['email'],
                'password' => $user['password'],
                'is_login' => true,
            ]);

            return redirect('/profile/' . $user['email']);
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('/signin')->with('success', 'Logout Successful!');
    }
}
