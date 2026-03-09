<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Payroll;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $presentToday = Attendance::whereDate('date', today())->where('status', 'present')->count();
        $monthlyPayroll = Payroll::where('month', date('Y-m'))->sum('net_salary');
        $pendingTasks = 0; // You can implement this based on your business logic

        return view('dashboard', compact('totalEmployees', 'presentToday', 'monthlyPayroll', 'pendingTasks'));
    }
}