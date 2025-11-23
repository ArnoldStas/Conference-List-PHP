<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        // If user is already logged in, redirect to home page
        if (Auth::check()) {
            return redirect()->route('conferences.index');
        }

        // Show the login form view
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validate the incoming request data
        // 'required' - field must not be empty
        // 'email' - field must be a valid email address
        // 'string' - field must be a string
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regenerate session ID to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to conferences list page with success message
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
        // Log out the current user
        Auth::logout();

        // Invalidate the user's session to prevent reuse
        $request->session()->invalidate();

        // Regenerate CSRF token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect to login page with success message
        return redirect()
            ->route('login')
            ->with('success', __('messages.logged_out'));
    }
}
