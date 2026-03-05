@extends('layouts.app')

@section('content')

<h4>Add Employee</h4>

<form method="POST" action="/employees">

@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Department</label>
<input type="text" name="department" class="form-control">
</div>

<div class="mb-3">
<label>Basic Salary</label>
<input type="number" name="basic_salary" class="form-control">
</div>

<button class="btn btn-primary">Save</button>

</form>

@endsection