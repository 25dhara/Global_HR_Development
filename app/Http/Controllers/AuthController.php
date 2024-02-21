<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Auth::logoutOtherDevices($request->input('password'));
            return redirect()->route('dashboard.index')->withSuccess('Signed in successfully');
        } else {
            return redirect("login")->with('error', 'Login details are not valid');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
