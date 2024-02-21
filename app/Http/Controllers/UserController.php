<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::query();
            return Datatables::eloquent($query)->make(true);
        }
        return view('user.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'created_by' => 1
        ]);
        return redirect()->route('user.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */

    public function edit(User $user)
    {
        // $roles = Role::all();
        return view('user.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_active' => $is_active
        ]);
        // print_r($user);
        // die;
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('danger', 'User deleted successfully');
    }
}
