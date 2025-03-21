<?php

// AuthController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Login
    public function showLoginForm()
    {
        // Check if user is already authenticated
        if (Auth::check()) {
            // If authenticated, redirect to the dashboard
            return redirect()->route('admin.home.index');
        }

        // Show the login form
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {     // Validate the login request
        $this->validateLogin($request);

        // Attempt to log in the user
        if ($this->attemptLogin($request)) {
            // Check if the user has the required role
            $user = Auth::user();
            if ($user) {
                // Redirect to the dashboard if the user has the required role
                return redirect()->route('admin.home.index');
            } else {
                // If the user does not have the required role, logout and show a message
                Auth::logout();
                return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'You do not have the required role to log in.');
            }
        }

        // If login attempt fails, redirect back with error message
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->with('error', 'Invalid password or email.');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'login' => 'required|string', // Can be email or mobile
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $login = $request->input('login');

        // Determine if input is email or mobile number
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        return Auth::attempt([
            $fieldType => $login,
            'password' => $request->input('password')
        ], $request->filled('remember'));
    }

    // Logout
    public function logout()
    {
        // Logout the user
        Auth::logout();
        return redirect('login');
    }

    public function showRegisterForm()
    {
        return view('admin.auth.signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        // Auto login the user after registration
        Auth::login($user);

        return redirect()->route('admin.home.index')->with('success', 'Registration successful!');
    }
}
