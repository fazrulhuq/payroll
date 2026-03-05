@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">
Payroll
</div>

<div class="card-body">

<table class="table table-bordered datatable">

<thead>

<tr>
<th>Employee</th>
<th>Month</th>
<th>Salary</th>
<th>Allowances</th>
<th>Deductions</th>
<th>Net Salary</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($payroll as $row)

<tr>

<td>{{ $row->employee->name }}</td>
<td>{{ $row->month }}</td>
<td>{{ $row->basic_salary }}</td>
<td>{{ $row->allowances }}</td>
<td>{{ $row->deductions }}</td>
<td>{{ $row->net_salary }}</td>

<td>

<a href="/payslip/{{ $row->id }}"
class="btn btn-success btn-sm">
PDF
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection