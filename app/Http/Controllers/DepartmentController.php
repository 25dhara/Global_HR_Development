<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\Datatables;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:department-list|department-create|department-update|department-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:department-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:department-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:department-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Department::with('branch');
            return Datatables::eloquent($query)->make(true);
        }
        return view('department.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::where('is_active', 1)->get();
        return view('department.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        Department::create([
            'name' => $request->name,
            'dept_type' => $request->dept_type,
            'is_active' => $is_active
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
        $branches = Branch::where('is_active', 1)->get();
        return view('department.edit', compact('department', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        $department->update([
            'name' => $request->name,
            'dept_type' => $request->dept_type,
            'is_active' => $is_active
        ]);
        return redirect()->route('department.index')->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')
            ->with('danger', 'Department deleted successfully');
    }
}
