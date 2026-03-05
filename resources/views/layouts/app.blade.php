<!DOCTYPE html>
<html>

<head>

<title>Payroll System</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#">☰</a>
</li>
</ul>

</nav>


<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="/" class="brand-link text-center">
<span class="brand-text font-weight-light">Payroll System</span>
</a>

<div class="sidebar">

<nav>

<ul class="nav nav-pills nav-sidebar flex-column">

<li class="nav-item">
<a href="/" class="nav-link">
Dashboard
</a>
</li>

<li class="nav-item">
<a href="/employees" class="nav-link">
Employees
</a>
</li>

<li class="nav-item">
<a href="/attendance" class="nav-link">
Attendance
</a>
</li>

<li class="nav-item">
<a href="/payroll" class="nav-link">
Payroll
</a>
</li>

</ul>

</nav>

</div>

</aside>


<!-- Content -->
<div class="content-wrapper p-3">

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

@yield('content')

</div>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$('.datatable').DataTable();
</script>

</body>
</html>