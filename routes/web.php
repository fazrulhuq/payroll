<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class,'index']);

Route::resource('employees', EmployeeController::class);

Route::get('/attendance',[AttendanceController::class,'index']);
Route::post('/attendance',[AttendanceController::class,'store']);

Route::get('/payroll',[PayrollController::class,'index']);
Route::get('/generate-payroll/{id}',[PayrollController::class,'generate']);
Route::get('/payslip/{id}',[PayrollController::class,'payslip']);
