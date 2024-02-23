<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Branch;
use App\Models\Department;

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
        $roles = Role::where('is_active',1)->get();
        $branches = Branch::where('is_active',1)->get();
        $departments = Department::all();
        return view('user.edit', compact('user','roles','branches','departments'));
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
            'is_active' => $is_active,
            'branch_id' => $request->branch,
            'department_id' => $request->department
        ]);
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        $user->assignRole($request->input('roles'));
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
    public function getDepartments(Request $request, $branch)
    {
        $branch = Branch::findOrFail($branch);
        $departments = $branch->departments;
        return response()->json($departments);
    }

}
