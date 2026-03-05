<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::with('employee')->latest()->get();
        $employees = Employee::all();

        return view('attendance.index',compact('attendance','employees'));
    }

    public function store(Request $request)
    {
        Attendance::create([
            'employee_id'=>$request->employee_id,
            'date'=>$request->date,
            'status'=>$request->status
        ]);

        return back()->with('success','Attendance Saved');
    }
}