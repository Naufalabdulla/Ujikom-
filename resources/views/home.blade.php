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

    <!-- CSS for this page only -->
       <link rel="stylesheet" href="{{ asset('') }}vendor1/chart.js/dist/Chart.min.css">

       {{-- message toastr --}}
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <!-- End CSS  -->

        <link rel="stylesheet" href="{{ asset('') }}assets1/css/style.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets1/css/bootstrap-override.min.css">
        <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets1/css/dark.min.css">
</head>

<body onload="setInterval('displayTime()', 1000);">
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

        <nav class="main-sidebar ps-menu">
            <div class="sidebar-toggle action-toggle">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="sidebar-opener action-toggle">
                <a href="#">
                    <i class="ti-angle-right"></i>
                </a>
            </div>
            <div class="sidebar-header">
                <img src="{{ asset('') }}assets1/images/idn.png" width="100%" height="100%">
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li>
                        <a href="#" class="link">
                            <i class="ti-user"></i>
                            <span><marquee>You are logged in as {{ Auth::user()->role_name }} !</marquee></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/home" class="link">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/change/password" class="link">
                            <i class="ti-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pengelolaansp" class="link">
                            <i class="ti-email"></i>
                            <span>Pengelolaan SP</span>
                        </a>
                    </li>
                    <li>

                    <li>
                        <a href="/pelanggaransantri" class="main-menu has-dropdown">
                            <i class="ti-agenda"></i>
                            <span>Pelanggaran Santri</span>
                        </a>
                        <ul class="sub-menu" style="max-height: 0px;">
                            <li><a href="/pelanggaransantri" class="link">
                                    <span>Catatan Pelanggaran Santri</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('form/view/detail') }}" class="main-menu has-dropdown">
                            <i class="ti-archive"></i>
                            <span>Adab dan Ibadah <br> Santri</span>
                        </a>
                        <ul class="sub-menu " style="max-height: 0px;">
                            <li><a href="/pencatatanadabdanibadah" class="link">
                                    <span>Pencatatan</span></a>
                            </li>
                            <li><a href="/raporadabdanibadah" class="link">
                                <span>Rapor</span></a>
                        </li>
                        </ul>
                    </li>

                    @if (Auth::user()->role_name=='Admin')
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-infinite"></i>
                            <span>Maintenain</span>
                        </a>
                        <ul class="sub-menu" style="max-height: 0px;">
                            <li><a href="{{ route('userManagement') }}" class="link">
                                    <span>User Control</span></a>
                            </li>
                            <li><a href="{{ route('activity/log') }}" class="link">
                                    <span>User Activity</span></a>
                            </li>
                            <li><a href="{{ route('activity/login/logout') }}" class="link">
                                    <span>Activity Log</span></a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-agenda"></i>
                            <span>Form Element</span>
                        </a>
                        <ul class="sub-menu" style="max-height: 0px;">
                            <li><a href="{{ route('form/staff/new') }}" class="link">
                                <span>Input Staff</span></a>
                            </li>
                            <li><a href="/pengelolaansp/create" class="link">
                                <span>Input SP</span></a>
                            </li>
                            <li>
                                <a href="/pelanggaransantri/create" class="link">
                                    <span>Input Pelanggaran Santri</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pencatatanadabdanibadah/create" class="link">
                                    <span>Input Pencatatan Adab dan Ibadah Santri</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <li>
                        <a href="/logout" class="link">
                            <i class="ti-back-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>        

        <!-- SIDEBAR -->

        <!-- CONTENT -->

        {{-- message --}}
        {!! Toastr::message() !!}
        
        <div class="main-content">
            <br>
            <div class="row same-height">
                <div class="col-md-3">
                    <div class="card bg-primary text-light mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-light font-semibold">Pelanggaran Santri</h6>
                                    <h6 class="text-light font-extrabold mb-0">{{ $pelanggaransantri }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-light mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-light font-semibold">Aktifitas Login User</h6>
                                    <h6 class="text-light font-extrabold mb-0">{{ $user_activity_logs }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-light mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-light font-semibold">User Total</h6>
                                    <h6 class="text-light font-extrabold mb-0">{{ $users }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-light mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-light font-semibold">Total SP</h6>
                                    <h6 class="text-light font-extrabold mb-0">{{ $pengelolaansp }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4>Real Time</h4>
                        <?php 
                        function month($month, $format = "mmmm"){
                        if($format == "mmmm"){
                            $fm = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        }elseif($format == "mmm"){
                            $fm = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
                        }
                        
                        return $fm[$month-1];
                        }
                        function day($day, $format = "dddd"){
                        if($format == "dddd"){
                            $fd = array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");
                        }elseif($format == "ddd"){
                            $fd = array("Sen","Sel","Rab","Kam","Jum","Sab","Min");
                        }
                        
                        return $fd[$day-1];
                        }

                        echo day(date("N")).", ".date("d")." ".month(date("n"))." ".date("Y"); // Outputnya : Rabu, 16 Mei 2018
                         ?>

                         <?php 
                         $timezone = new DateTimeZone('Asia/Jakarta');
                        $date = new DateTime();
                        $date->setTimeZone($timezone);
                          ?>    
                        <div id ="jam"></div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            
                function displayTime(){
                var clientTime=new Date();
                var time=new Date(clientTime.getTime());
                var sh=time.getHours().toString();
                var sm=time.getMinutes().toString();
                var ss=time.getSeconds().toString();
                document.getElementById("jam").innerHTML=(sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss)+"   "+"WIB";
                document.getElementById("jaminput").value = (sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss);
                }

            </script> 
        </div>

        <!-- CONTENT -->

        <!-- SETTINGS -->

        <div class="settings">
            <div class="settings-icon-wrapper">
                <div class="settings-icon">
                    <i class="ti ti-settings"></i>
                </div>
            </div>
            <div class="settings-content">
                <ul>
                    <li class="fix-header">
                        <div class="fix-header-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
                                <input class="form-check-input toggle-settings" name="Header" type="checkbox"
                                    id="settingsFixHeader">
                            </div>

                        </div>
                    </li>
                    <li class="fix-footer">
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
                                <input class="form-check-input toggle-settings" name="Footer" type="checkbox"
                                    id="settingsFixFooter">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="theme-switch">
                            <label for="">Theme Color</label>
                            <div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="light"
                                        value="light">
                                    <label class="form-check-label" for="light">Light</label>
                                </div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="dark"
                                        value="dark">
                                    <label class="form-check-label" for="dark">Dark</label>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
                                <input class="form-check-input toggle-settings" name="Sidebar" type="checkbox"
                                    id="settingsFixFooter">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> 

        <!-- SETTINGS -->

        <footer>
            Copyright © 2023 &nbsp <a href="#" target="_blank" class="ml-1"> Raffa Yahfazhka </a> <span> . All rights Reserved</span>
        </footer>
        
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
    <script>
        Main.init()
    </script>
</body>

</html>