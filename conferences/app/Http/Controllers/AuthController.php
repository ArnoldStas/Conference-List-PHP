<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        
        if (Auth::check()) {
            return redirect()->route('conferences.index');
        }

        return view('auth.login');
    }


    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            
            $request->session()->regenerate();

            return redirect()
                ->intended(route('conferences.index'))
                ->with('success', __('messages.logged_in'));
        }

        return back()
            ->withErrors([
                'email' => __('auth.failed'),
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
    
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', __('messages.logged_out'));
    }
}
