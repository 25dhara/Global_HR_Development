<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Models\Department;
use App\Http\Controllers\DepartmentController;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });
// Route::get('/index', function () {
//     return view('layouts.index');
// });
// Route::get('/users', function () {
//     return view('user.index');
// });

Route::resource('user',            UserController::class);
Route::resource('branch',            BranchController::class);
Route::resource('department',            DepartmentController::class);
