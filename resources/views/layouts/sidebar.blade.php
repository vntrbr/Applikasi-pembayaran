<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/img/tc1.png') }}">
    <title>Aplikasi Pembayaran SPP</title>
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Sweet Alert -->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

     @yield('plugin')

</head>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard/data-siswa') }}">
                <div class="sidebar-brand-icon">
                <i class="fab fa-confluence"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Pembayaran</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Pages
            </div>
           
					@if(auth()->user()->level == 'admin')
                    <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/data-siswa') }}">
                    <i class="mdi mdi-account-outline"></i>

                    <span>Data Siswa</span></a>
                    <a class="nav-link" href="{{ url('dashboard/data-petugas') }}">
                    <i class="mdi mdi-account-multiple"></i>
                    <span>Data Petugas</span></a>


                    <a class="nav-link" href="{{ url('dashboard/data-kelas') }}">
                    <i class="mdi mdi-home-variant"></i>
                    <span>Data Kelas</span></a>

                    <a class="nav-link" href="{{ url('dashboard/data-spp') }}">
                    <i class="mdi mdi-cash-usd"></i>
                    <span>Data SPP</span></a>
    </li>
                    @endif
                   @if(auth()->user()->level == 'admin' || auth()->user()->level == 'petugas')
                              <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/pembayaran') }}">
                <i class="mdi mdi-cash"></i>
                <span>Entri Pembayaran</span></a>
                    </li>
                                @endif
                <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/histori') }}">
                    <i class="mdi mdi-note-multiple"></i>
                <span class="hide-menu">History Pembayaran</span>
                    </li>
                    {{--  @if(auth()->user()->level == 'admin' || auth()->user()->level == 'petugas')
                    <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/laporan') }}">
                <i class="mdi mdi-file-document"></i>
                <span class="hide-menu">Generate Laporan</span>
                    </li>
        
                    @endif  --}}
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                     
                     
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->