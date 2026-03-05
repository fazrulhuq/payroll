<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'department'=>$request->department,
            'basic_salary'=>$request->basic_salary
        ]);

        return redirect('/employees')->with('success','Employee Added');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show',compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit',compact('employee'));
    }

    public function update(Request $request,$id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'department'=>$request->department,
            'basic_salary'=>$request->basic_salary
        ]);

        return redirect('/employees')->with('success','Employee Updated');
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('/employees')->with('success','Employee Deleted');
    }
}