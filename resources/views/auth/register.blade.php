
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP | Sistem Informasi Akademi Pondok | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets1/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor1/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    @stack('css')
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{ asset('') }}assets1/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets1/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets1/css/dark.min.css">


</head>

<body>
<section class="container h-100">
    <div class="row justify-content-sm-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h1 class="fs-4 text-center fw-bold mb-4">Register</h1>
                    <h1 class="fs-6 mb-3">Register untuk mendapatkan Akses!!</h1>

                    <form method="POST" action="{{ route('register') }}" aria-label="abdul" data-id="abdul" class="needs-validation" novalidate=""
                        autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Full Name</label>
                            @error('name')
                            <span class="float-end" style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                            <div class="input-group input-group-join mb-3">
                                <input type="text" placeholder="Nama Lengkap" value="{{ old('name') }}" class="form-control @error('name') invalid-feedback @enderror"
                                   name="name" required autofocus>
                                <span class="input-group-text rounded-end">&nbsp<i
                                        class="fa fa-user"></i>&nbsp</span>
                                <div class="invalid-feedback" role="alert">
                                    Nama Lengkap harus diisi
                                </div>
                            </div>
                        </div>

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
                            <label class="mb-2 text-muted" for="role">Role</label>
                            <div class="col-md-12">
                                <select class="form-select mb-3 @error('role_name') is-invalid @enderror" aria-label="Default select example" name="role_name" id="role_name"> 
                                    <option selected disabled>Select Role Name</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Normal User">Normal User</option>
                                </select>
                                <div class="invalid-feedback" role="alert">
                                    Pilih terlebih dahulu
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">Password</label>
                            <div class="input-group input-group-join mb-3">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder=" Masukan Password" required>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                        class="fa fa-eye"></i>&nbsp</span>
                                <div class="invalid-feedback" role="alert">
                                    Password minimal 8 huruf
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">Konfirmasi Password</label>
                            <div class="input-group input-group-join mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder=" Konfirmasi Password" required>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                        class="fa fa-eye"></i>&nbsp</span>
                                <div class="invalid-feedback">
                                    Konfirmasi password diatas terlebih dahulu
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">I Agree to <a
                                        href="#">Terms</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary ms-auto">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Sudah punya akun? <a href="/login" class="text-dark">Login disini</a>
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

<style>
    .file-input__input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .file-input__label {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        font-size: 14px;
        padding: 10px 12px;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
        transition-duration: 0.5s;
        animation: 0.1s ease-in;
    }

    .file-input__label:hover {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        color: #FFFFFF;
        font-size: 14px;
        padding: 10px 12px;
        background-color: rgb(0, 0, 0);
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);

        animation: 2s ease-out;
    }

    .file-input__label svg {
        height: 16px;
        margin-right: 4px;
    }
</style>