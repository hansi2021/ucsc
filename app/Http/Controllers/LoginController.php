<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')->withSuccess('Login Successful');
        }

        return redirect('/')->withSuccess('Invalid Login details');
    }

    public function userLogout() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function adminDashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard.index');
        }

        return redirect('/')->withSuccess('You are not allowed!');
    }
}
