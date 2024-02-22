<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Http\Request;
use App\Models\Module;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Role::withCount('users');
            return Datatables::eloquent($query)->make(true);
        }
        return view('role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        Role::create([
            'name' => $request->name,
            'description'=> $request->description,
            'guard_name'=>'web',
            'is_active' => $is_active,
        ]);
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $modulesWithPermissions = Module::where('is_active', 1)->with('permissions')->get();
        return view('role.edit',compact('role','modulesWithPermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {

        $is_active = $request->is_active == "on" ? 1 : 0;
        $role->update(['name' => $request->name, 'description' => $request->description, 'is_active' => $is_active]);

        if ($request->permissions) {
            $selectedPermissions = $request->input('permissions', []);
            $role->syncPermissions($selectedPermissions);
        }

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
         return redirect()->route('role.index');
    }
}
