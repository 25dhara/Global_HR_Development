<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdatePasswordRequest;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function showResetPasswordForm(Request $request, $token)
    {
        return view('auth.reset_password', compact('token'));
    }
    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        // print_r($credentials);
        // die;

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
    public function resetPassword(UpdatePasswordRequest $request, $token)
    {
        $user = User::where('reset_token', $token)->first();


        if (!$user) {
            return redirect()->back()->withErrors(['reset_token' => 'Invalid reset token.']);
        }
        if ($token !== $user->reset_token) {
            return redirect()->back()->withErrors(['reset_token' => 'Invalid reset token.']);
        }
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }
        $user->password = Hash::make($request->password);
        $user->reset_token = null;
        $user->save();
        $credentials = ['email' => $user->email, 'password' =>  $request->password];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->withSuccess('Password has been changed successfully');
        } else {
            return redirect("login")->with('error', 'something went wrong');
        }
    }
}
