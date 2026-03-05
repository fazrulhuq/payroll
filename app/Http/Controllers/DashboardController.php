<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Payroll;

class DashboardController extends Controller
{
    public function index()
    {
        $employees = Employee::count();
        $attendance = Attendance::whereDate('date', today())->count();
        $payroll = Payroll::count();

        return view('dashboard', compact('employees','attendance','payroll'));
    }
}