@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Welcome, {{ Auth::user()->name }} </h1>
</div>

<!-- Content Row -->
<div class="row">


    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jurusan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('siswa')->count()}}</div>
                      
                          </div>
                    </div>
                    <div class="col-auto">
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Mata Pelajaran</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('kelas')->count()}}</div>
                       
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection