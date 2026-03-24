<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\AccountGroupController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::resource('employees', EmployeeController::class);

    Route::get('/attendance',[AttendanceController::class,'index'])->name('attendance.index');
    Route::post('/attendance',[AttendanceController::class,'store'])->name('attendance.store');

    Route::get('/payroll',[PayrollController::class,'index'])->name('payroll.index');

    Route::get('/generate-payroll/{id}',[PayrollController::class,'generate']);

    Route::get('/payslip/{id}',[PayrollController::class,'payslip']);

    Route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');

    Route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');

    Route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.destroy');
    Route::resource('companies', CompanyController::class);
    Route::resource('accounts', AccountController::class);
    Route::resource('account-types', AccountTypeController::class);
    Route::resource('account-groups', AccountGroupController::class);

});

require __DIR__.'/auth.php';
