<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengaduan Masyarakat | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE-3.0.5/dist/css/adminlte.min.css">
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
          Logout
        </li>
        <!-- Notifications Dropdown Menu -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark text-white bg-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>/AdminLTE-3.0.5/index3.html" class="brand-link">
        <img src="<?= base_url() ?>/AdminLTE-3.0.5/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PengaduanMasyarakat</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>/AdminLTE-3.0.5/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Putu Ade Pranata <br> Role: Admin</a>
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
                  <!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-tambah">
                                        <i class="fas fa-plus"></i>
                                        Tambah
                                    </button> -->
                  List Data Pengaduan Masyarakat
                </div>

                <div class="card-body">
                  <!-- <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tanggal Pengaduan</th>
                                                <th>Isi Pengaduan</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>5235434534</td>
                                                <td>Dimas Gracio</td>
                                                <td>11 Februari 2023</td>
                                                <td>Hotel</td>
                                                <td>gambar.jpg</td>
                                                <td>Pending</td>
                                                <td class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-success m-1 btn-edit">
                                                        <i class="fas fa-edit"></i>
                                                        Tanggapan
                                                    </button>
                                        
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Tanggal Pengaduan</th>
                        <th>NIK</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($dataPengaduan as $index => $pengaduan) : ?>
                        <tr>
                          <td><?= $index + 1; ?></td>
                          <td><?= $pengaduan['id_pengaduan']; ?></td>
                          <td><?= $pengaduan['tgl_pengaduan']; ?></td>
                          <td><?= $pengaduan['nik']; ?></td>
                          <td><?= $pengaduan['isi_laporan']; ?></td>
                          <td><img src="<?= base_url('/images/' . $pengaduan['foto']) ?>" alt="" width="100"></td>
                          <td><?= $pengaduan['status']; ?></td>
                          <td class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success m-1 btn-edit" data-toggle="modal" data-target="#modal-ubah" data-whatever="@getbootstrap" data-id_pengaduan="<?= $pengaduan['id_pengaduan']; ?>" data-tgl_pengaduan="<?= $pengaduan['tanggal']; ?>" data-nik="<?= $pengaduan['nik']; ?>" data-isi_laporan="<?= $pengaduan['isi_laporan']; ?>" data-foto="<?= $pengaduan['foto']; ?>" data-status="<?= $pengaduan['status']; ?>">
                              <i class="fas fa-edit"></i>
                              Ubah
                            </button>
                            <button type="button" class="btn btn-danger m-1 btn-delete" data-id="<?= $pengaduan['id_pengaduan']; ?>">
                              <i class="fas fa-trash"></i>
                              Hapus
                            </button>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
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
  <script src="<?= base_url() ?>/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/AdminLTE-3.0.5/dist/js/demo.js"></script>
</body>

</html>