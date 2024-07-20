<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success', 'Horay! Pendaftaran akun berhasil!');
        } else {
            return redirect()->route('register')->withInput()->withErrors($validator);
        }
    }

    public function authenticate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' =>'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect the user to the dashboard
            return redirect()->route('now-playing');
        }

        // Return an error message if authentication fails
        return back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout()
    {
        auth()->logout();

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}
