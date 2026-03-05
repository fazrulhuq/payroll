@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">
Attendance
</div>

<div class="card-body">

<form method="POST" action="/attendance" class="row mb-4">

@csrf

<div class="col-md-3">

<select name="employee_id" class="form-control">

@foreach($employees as $emp)
<option value="{{ $emp->id }}">
{{ $emp->name }}
</option>
@endforeach

</select>

</div>

<div class="col-md-3">
<input type="date" name="date"
class="form-control">
</div>

<div class="col-md-3">
<select name="status"
class="form-control">
<option value="present">Present</option>
<option value="absent">Absent</option>
</select>
</div>

<div class="col-md-2">
<button class="btn btn-primary">
Save
</button>
</div>

</form>

<table class="table table-bordered datatable">

<thead>

<tr>
<th>Employee</th>
<th>Date</th>
<th>Status</th>
</tr>

</thead>

<tbody>

@foreach($attendance as $row)

<tr>

<td>{{ $row->employee->name }}</td>
<td>{{ $row->date }}</td>
<td>{{ $row->status }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection