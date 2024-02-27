<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $branches = Branch::where('is_active',1)->withCount('users')->get();
        return view('dashboard.index', compact('branches'));
    }
}
