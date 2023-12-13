<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <section class="row" style="width: 100vw; height: 100vh; overflow:hidden;">
        <div class="col-7" style="width: 100%; padding:0; margin:0;">
            <video autoplay loop muted style="width: 200%;">
                <source src="<?= base_url('/video/bumi.mp4'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-5 bg-light">
            <div class="d-flex justify-content-center flex-column align-items-center" style="height:100vh;">

                <div class="p-5" style="width:fit-content; height:fit-content;">
                    <div class="login-box">
                        <div class="login-logo">
                            <a href="../../index2.html"><b>Pengaduan</b>Masyarakat</a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Silahkan login</p>

                                <form action="<?= base_url('/home/login') ?>" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                <div class="social-auth-links text-center mb-3">
                                    <p>- Atau -</p>
                                    <a href="<?= base_url('Registrasi'); ?>" class="btn btn-block btn-success">
                                        <i class="fab fa-users"></i> Daftar Akun
                                    </a>

                                </div>

                                <!-- <div class="social-auth-links text-center mb-3">
                    <a href="<?= base_url('/petugas/login'); ?>" class="btn btn-block btn-info">
                        <i class="fab fa-users"></i> Petugas
                    </a>
                </div> -->
                                <!-- /.social-auth-links -->

                                <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
                                <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Registrasi Masyarakat</a>
      </p> -->
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
    </section>

    <!-- jQuery -->
    <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

</body>

</html>