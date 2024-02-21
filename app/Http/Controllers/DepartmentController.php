<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Branch;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('department.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::where('is_active',1)->get();
        return view('department.create',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        Department::create([
            'name' => $request->name,
            'branch_id' => $request->branch,
            'is_active' => $is_active,
            'created_by'=> 1
        ]);
        return redirect()->route('department.index')->with('success', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $branches = Branch::where('is_active',1)->get();
        return view('department.edit', compact('department','branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        $department->update([
            'name' => $request->name,
            'branch_id'=>$request->branch,
            'is_active' => $is_active
        ]);
        return redirect()->route('department.index')->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
