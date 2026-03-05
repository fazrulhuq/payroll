@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-lg-3 col-6">

<div class="small-box bg-info">

<div class="inner">
<h3>{{ $employees ?? 0 }}</h3>
<p>Employees</p>
</div>

</div>

</div>


<div class="col-lg-3 col-6">

<div class="small-box bg-success">

<div class="inner">
<h3>{{ $attendance ?? 0}}</h3>
<p>Attendance Today</p>
</div>

</div>

</div>


<div class="col-lg-3 col-6">

<div class="small-box bg-warning">

<div class="inner">
<h3>{{ $payroll ?? 0}}</h3>
<p>Payroll Generated</p>
</div>

</div>

</div>

</div>

@endsection