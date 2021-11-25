@extends('layouts.master')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Welcome, {{ Auth::session()->name }} </h1>
</div>

<!-- Content Row -->
<!-- End of Main Content -->@endsection