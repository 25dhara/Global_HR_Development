<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',             [AuthController::class, 'index'])->name('login');
Route::get('/login',        [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::post('logout',       [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',     [HomeController::class, 'index'])->name('dashboard.index');

    Route::resource('user',            UserController::class);
    Route::resource('branch',          BranchController::class);
    Route::resource('department',      DepartmentController::class);
    Route::resource('role',            RoleController::class);
    Route::resource('module',          ModuleController::class);
    Route::resource('permission',      PermissionController::class);

    Route::get('/departments/{branch}',         [UserController::class, 'getDepartments'])->name('departments.get');
    Route::get('/user/{id}/reset-password',     [UserController::class, 'resetPasswordForm'])->name('user.resetPasswordForm');
    Route::post('/user/{id}/reset-password',    [UserController::class, 'resetPassword'])->name('user.resetPassword');

    Route::put('/assignpermission/{id}',    [RoleController::class, 'asign_permission'])->name('role.assignpermission');
});
