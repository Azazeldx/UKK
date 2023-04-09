<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengaduan Masyarakat | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .sidebar a {
      color: white;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->


      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a href="<?= base_url('petugas/login/logout'); ?>">Log out</a>
        </li>
        <!-- Notifications Dropdown Menu -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark text-white bg-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>/AdminLTE-3.2.0/index3.html" class="brand-link">
        <img src="<?= base_url() ?>/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PengaduanMasyarakat</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php $session = session();
                                        echo $session->get('nama_petugas'); ?> <br> Role: <?php $session = session();
                                                                                          echo $session->get('level'); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="<?= base_url('Admin/Beranda') ?>" class="nav-link" style="color:white;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/Masyarakat') ?>" class="nav-link" style="color:white;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Masyarakat

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/Petugas') ?>" class="nav-link" style="color:white;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Petugas

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/Pengaduan') ?>" class="nav-link" style="color:white;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Pengaduan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/Laporan') ?>" class="nav-link" style="color:white;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $judul; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Beranda</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  Filter laporan pengaduan masyarakat
                </div>

                <div class="card-body">
                  <form class="form-horizontal" action="<?= base_url('Jabatan/tambah'); ?>" method="POST">
                    <div class="form-group row">
                      <label for="nama_jabatan" class="col-4 col-form-label">Dari tanggal</label>
                      <div class="col-8">
                        <input type="date" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Nama Jabatan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama_jabatan" class="col-4 col-form-label">Sampai tanggal</label>
                      <div class="col-8">
                        <input type="date" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Nama Jabatan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Nama Pengadu</label>
                      <div class="col-8">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option>Dimas</option>
                          <option>Ayu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Nama Petugas</label>
                      <div class="col-8">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option>Ade</option>
                          <option>Pranata</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Status</label>
                      <div class="col-8">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option>Pending</option>
                          <option>Proses</option>
                          <option>Selesai</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </div>

                  </form>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2023 bikincoding.com</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/AdminLTE-3.2.0/dist/js/demo.js"></script>
</body>

</html>