<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use Yajra\DataTables\Facades\Datatables;

class ModuleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:module-list|module-create|module-update|module-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:module-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:module-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:module-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Module::query();
            return Datatables::eloquent($query)->make(true);
        }
        return view('module.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        Module::create([
            'name' => $request->name,
            'is_active' => $is_active,
        ]);
        return redirect()->route('module.index')->with('success', 'Module created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('module.edit', compact('module'));
    }
    /**
     * Update the specified resource in storage.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        $module->update([
            'name' => $request->name,
            'is_active' => $is_active
        ]);
        return redirect()->route('module.index')->with('success', 'Module updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        session()->flash('danger', 'Module Deleted successfully.');
        return redirect()->route('module.index');
    }
}
