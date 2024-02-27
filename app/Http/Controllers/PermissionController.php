<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Illuminate\Http\Request;
use App\Models\Module;
use Yajra\DataTables\Facades\Datatables;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $permissions = Permission::with('module')
                ->withCount('roles')
                ->get();

            return Datatables::of($permissions)
                ->addColumn('module_name', function ($permission) {
                    return $permission->module->name;
                })
                ->addColumn('roles_count', function ($permission) {
                    return $permission->roles_count;
                })
                ->make(true);
        }
        return view('permission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::where('is_active', 1)->get();
        return view('permission.create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        $module = Module::find($request->module);
        $name = strtolower($module->name) . "-" . $request->access;

        $haspermission = Permission::query()
            ->where('name', $name)
            ->where('module_id', $request->input('module'))
            ->exists();


        if ($haspermission) {
            return back()->withErrors([
                'access' => 'Access already exits.'
            ]);
        } else {
            Permission::create([
                'module_id' => $request->module,
                'name' => $name,
                 'guard_name' => 'web',
                'description' => $request->description,
                'is_active' => $is_active,
            ]);

            return redirect()->route('permission.index')
                ->with('success', 'Permission created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $modules = Module::where('is_active', 1)->get();
        return view('permission.edit', compact('permission', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $is_active = $request->has('is_active') ? 1 : 0;
        $module = Module::find($request->module);
        $name = strtolower($module->name) . "-" . $request->access;

        $haspermission = Permission::query()
            ->where('name', $name)
            ->where('module_id', $request->input('module'))
            ->where('id', '!=', $permission->id)
            ->exists();

        if ($haspermission) {
            return back()->withErrors([
                'access' => 'Access already exits.'
            ]);
        } else {

            $permission->update([
                'module_id' => $request->module,
                'name' => strtolower($module->name) . "-" . $request->access,
                'guard_name' => 'web',
                'description' => $request->description,
                'is_active' => $is_active,

            ]);
            return redirect()->route('permission.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        session()->flash('danger', 'Permission Deleted successfully.');
        return redirect()->route('permission.index');
    }
}
