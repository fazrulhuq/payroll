<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Attendance;
use Barryvdh\DomPDF\Facade\Pdf;

class PayrollController extends Controller
{
    public function index()
    {
        $payroll = Payroll::with('employee')->latest()->get();

        return view('payroll.index',compact('payroll'));
    }

    public function generate($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);

        $presentDays = Attendance::where('employee_id',$employee_id)
            ->where('status','present')
            ->count();

        $dailySalary = $employee->basic_salary / 30;

        $earnedSalary = $presentDays * $dailySalary;

        $allowances = 2000;
        $deductions = 500;

        $netSalary = $earnedSalary + $allowances - $deductions;

        Payroll::create([
            'employee_id'=>$employee_id,
            'month'=>date('F'),
            'basic_salary'=>$earnedSalary,
            'allowances'=>$allowances,
            'deductions'=>$deductions,
            'net_salary'=>$netSalary
        ]);

        return redirect('/payroll')->with('success','Payroll Generated');
    }

    public function payslip($id)
    {
        $payroll = Payroll::with('employee')->findOrFail($id);

        $pdf = Pdf::loadView('payslip',compact('payroll'));

        return $pdf->download('payslip.pdf');
    }
}