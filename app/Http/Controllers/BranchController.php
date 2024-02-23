<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;

class BranchController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:branch-list|branch-create|branch-update|branch-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:branch-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:branch-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:branch-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $query = Branch::with('departments');
            return Datatables::eloquent($query)->make(true);
        }
        return view('branch.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;
        Branch::create([
            'name' => $request->name,
            'is_active' => $is_active,
            'created_by' => 1
        ]);
        return redirect()->route('branch.index')->with('success', 'Branch created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $departments = Department::where('is_active', 1)->get();
        return view('branch.edit', compact('branch', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        $is_active = $request->is_active == "on" ? 1 : 0;

        $branch->update([
            'name' => $request->name,
            'is_active' => $is_active
        ]);
        $departmentIds = $request->input('departments', []);
        $branch->departments()->sync($departmentIds);
        return redirect()->route('branch.index')->with('success', 'Branch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branch.index')
            ->with('danger', 'Branch deleted successfully');
    }
}
