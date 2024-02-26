<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $name = 'ankita';
        $password  ='ghjfhk';
        return view('email.passwordResetMail',compact('name','password'));
        // $branches = Branch::where('is_active',1)->withCount('users')->get();
        // return view('dashboard.index', compact('branches'));
    }
}
