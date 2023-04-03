<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIAP | Sistem Informasi Akademi Pondok | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets1/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/perfect-scrollbar/css/perfect-scrollbar.css">

    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- CSS for this page only -->
    @stack('css')
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{ asset('') }}assets1/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets1/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets1/css/dark.min.css">
</head>

<body>
    {{-- message --}}
    {!! Toastr::message() !!}
    <section class="container h-100">
        <div class="row justify-content-sm-center h-100 align-items-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4">Login</h1>
                        <h1 class="fs-6 mb-3">Masukan Email dan Password Untuk Login.</h1>
                        <form method="POST" action="{{ route('login') }}" class="md-float-material" aria-label="abdul" data-id="abdul" class="needs-validation" novalidate=""
                        autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Email</label>
                                <div class="input-group input-group-join mb-3">
                                    <input id="email" type="email" value="{{ old('email') }}" placeholder="Masukan Email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-envelope"></i>&nbsp</span>
                                    <div class="invalid-feedback" role="alert">
                                        Email harus menyertai simbol @
                                    </div>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password" required>
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
                                    <div class="invalid-feedback" role="alert">
                                        Password required
                                    </div>
                                </div>
                            </div>
    
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Login
                                </button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Belum punya akun? <a href="{{route('register')}}" class="text-dark">Buat akun sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2023 &mdash; Raffa Yahfazhka
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('') }}vendor1/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('') }}vendor1/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    @stack('js')
    <!-- ======= -->
    <script src="{{ asset('') }}assets1/js/main.js"></script>
    <script src="{{ asset('') }}assets1/js/login.js"></script>
    <script>
        Main.init()
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
</body>

</html>
