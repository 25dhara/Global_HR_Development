<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Branch;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Yajra\DataTables\Facades\Datatables;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:user-list|user-create|user-update|user-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:user-update', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $branches = Branch::where('is_active', 1)->get();
        $departments = Department::all();
        if ($request->ajax()) {
            $usersQuery = User::with('branch', 'department');

            $branchId = $request->branch_id;
            $departmentId = $request->department_id;
            if ($branchId) {
                $usersQuery->whereHas('branch', function ($query) use ($branchId) {
                    $query->where('id', $branchId);
                });
            }

            if ($departmentId) {
                $usersQuery->whereHas('department', function ($query) use ($departmentId) {
                    $query->where('id', $departmentId);
                });
            }

            $users = $usersQuery->get();

            return Datatables::of($users)
                ->addColumn('branch_name', function ($user) {
                    return $user->branch ? $user->branch->name : '';
                })
                ->addColumn('department_name', function ($user) {
                    return $user->department ? $user->department->name : '';
                })
                ->make(true);
        }
        return view('user.index', compact('branches', 'departments'));
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
        $password = Str::random(10);
        $token = Str::random(40);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'created_by' => Auth::id(),
            'reset_token' => $token
        ]);
        // Mail::to($user->email)->send(new PasswordResetMail($password));
        $resetUrl = route('reset.password', ['token' => $token]);
        Mail::to($user->email)->send(new PasswordResetMail($user->name, $user->email, $password, $resetUrl));
        return redirect()->route('user.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::where('is_active', 1)->get();
        $branches = Branch::where('is_active', 1)->get();
        $departments = Department::all();
        return view('user.edit', compact('user', 'roles', 'branches', 'departments'));
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
        return redirect()->route('user.index')
            ->with('danger', 'User deleted successfully');
    }

    public function getDepartments(Request $request, $branch)
    {
        $branch = Branch::findOrFail($branch);
        $departments = $branch->departments;
        return response()->json($departments);
    }

    public function resetPasswordForm($id)
    {
        $user = User::find($id);
        return view('user.passwordResetForm', compact('user'));
    }

    public function resetPassword(UpdatePasswordRequest $request, $id)
    {
        $user = User::find($id);
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }
        $user->password = Hash::make($request->password);
        $user->password_changed_at = Carbon::now();
        $user->save();
        return redirect()->route('user.index')->with('success', 'Password reset successfully!');
    }
}
