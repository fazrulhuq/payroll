@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">

<h3 class="card-title">Employees</h3>

<a href="/employees/create"
class="btn btn-primary float-end">
Add Employee
</a>

</div>

<div class="card-body">

<table class="table table-bordered datatable">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Salary</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($employees as $emp)

<tr>

<td>{{ $emp->id }}</td>
<td>{{ $emp->name }}</td>
<td>{{ $emp->email }}</td>
<td>{{ $emp->department }}</td>
<td>{{ $emp->basic_salary }}</td>

<td>

<a href="/employees/{{ $emp->id }}/edit"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="/generate-payroll/{{ $emp->id }}"
class="btn btn-success btn-sm">
Generate Payroll
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection