<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP | Sistem Informasi Akademi Pondok</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

        <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets1/images/favicon.ico">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::to('assets/vendors/simple-datatables/style.css') }}">
        <link rel="stylesheet" href="{{ asset('') }}vendor1/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('') }}vendor1/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="{{ asset('') }}vendor1/perfect-scrollbar/css/perfect-scrollbar.css">
    
        <link rel="stylesheet" href="{{ asset('') }}assets1/css/style.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets1/css/bootstrap-override.min.css">
        <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets1/css/dark.min.css">

        <link rel="stylesheet" href="{{ asset('') }}vendor1/chart.js/dist/Chart.min.css">
        <link href="{{ asset('') }}vendor1/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="{{ asset('') }}vendor1/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />

       {{-- message toastr --}}
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <!-- End CSS  -->

        <link rel="stylesheet" href="{{ asset('') }}assets1/css/style.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets1/css/bootstrap-override.min.css">
        <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets1/css/dark.min.css">
</head>

<body>
    <div id="app">

        <!-- HEADER -->

        <div class="shadow-header"></div>
        <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>{{ Auth::user()->name }}</div>
                            </div>
                            <div class="avatar avatar-lg">
                                <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
                            </div>
                        </a>
                        <ul class="dropdown-menu small">
                            <!-- <li class="menu-header">
                                <a class="dropdown-item" href="#">Notifikasi</a>
                            </li> -->
                            <li class="menu-content ps-menu">
                                <a href="/userManagement">
                                    <div class="description">
                                        <i class="ti-user"></i> Profile
                                    </div>
                                </a>
                                <a href="/logout">
                                    <div class="description">
                                        <i class="ti-power-off"></i> Logout
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- HEADER -->


        <!-- SIDEBAR -->

        <!-- CONTENT -->
        
        <div class="main-content">

            {{-- message --}}
            {!! Toastr::message() !!}

            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Pengelolaan SP</h4>
                            </div>
                            <div class="card-body">
                                <p class="form-text mb-2">Pengelolaan Surat Peringatan Santri SMK IDN Boarding School</p>
                                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets1/images/idn.png'))) }}" width="100px" height="100px">
                                <br>
                                <table id="example2" class="table display"> 
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Adab Akhlak</th>
                                            <th>Status SP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengelolaansp as $key => $sp)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $sp->nama }}</td>
                                            <td>{{ $sp->adabakhlak }}</td>
                                            <td>{{ $sp->statussp }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Adab Akhlak</th>
                                            <th>Status SP</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="{{ asset('') }}vendor1/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('') }}vendor1/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
<script src="{{ asset('') }}vendor1/chart.js/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('') }}assets1/js/page/index.js"></script>
    <!-- ======= -->
    <script src="{{ asset('') }}assets1/js/main.js"></script>

        <!-- js for this page only -->
        <script src="{{ asset('') }}vendor1/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('') }}vendor1/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('') }}vendor1/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('') }}assets1/js/page/datatables.js"></script>
    <script>
        Main.init()
    </script>
<script>
    DataTable.init()
</script>
</body>

</html>

