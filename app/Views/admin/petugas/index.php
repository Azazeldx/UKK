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
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-tambah">
                    <i class="fas fa-plus"></i>
                    Tambah
                  </button>
                </div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telepon</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($dataPetugas as $index => $petugas) : ?>

                        <tr>
                          <td><?= $index + 1; ?></td>
                          <td><?= $petugas['id_petugas']; ?></td>
                          <td><?= $petugas['nama_petugas']; ?></td>
                          <td><?= $petugas['username']; ?></td>
                          <td><?= $petugas['password']; ?></td>
                          <td><?= $petugas['telp']; ?></td>
                          <td><?= $petugas['role']; ?></td>


                          <td class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success m-1 btn-edit" data-toggle="modal" data-target="#modal-ubah" data-whatever="@getbootstrap" data-id_petugas="<?= $petugas['id_petugas']; ?>" data-id_pengguna="<?= $petugas['id_pengguna']; ?>" data-nama_petugas="<?= $petugas['nama_petugas']; ?>" data-username="<?= $petugas['username']; ?>" data-password="<?= $petugas['password']; ?>" data-telp="<?= $petugas['telp']; ?>" data-level="<?= $petugas['role']; ?>">
                              <i class="fas fa-edit"></i>
                              Ubah
                            </button>
                            <button type="button" class="btn btn-danger m-1 btn-delete" data-id="<?= $petugas['id_petugas']; ?>" data-id_pengguna="<?= $petugas['id_pengguna']; ?>">
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

      <div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url("admin/petugas/tambah") ?>" method="post">
                <!-- <div class="form-group">
                                    <label for="id_petugas">id_petugas</label>
                                    <input type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="Masukan id_petugas" required>
                                </div> -->
                <div class="form-group">
                  <label for="nama">nama_petugas</label>
                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukan nama_petugas" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                </div>

                <div class="form-group">
                  <label for="telp">Telepon</label>
                  <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan Nomor Telepon" required>
                </div>
                <div class="form-group">
                  <label>level</label>
                  <select class="form-control" id="level" name="level">
                    <option value='admin'>admin</option>
                    <option value='petugas'>petugas</option>
                  </select>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>

      <div class="modal fade" id="modal-ubah" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Ubah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('admin/petugas/update'); ?>" method="POST">
                <input type="hidden" name="id_petugas" class="id_petugas">
                <input type="hidden" name="id_pengguna" class="id_pengguna">
                <div class="form-group">
                  <label for="nama">Nama Petugas</label>
                  <input type="text" class="form-control nama_petugas" id="nama_petugas" name="nama_petugas" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control username" id="username" name="username" placeholder="Masukan Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control password" id="password" name="password" placeholder="Masukan Tanggal Lahir">
                </div>
                <div class="form-group">
                  <label for="telp">Telpon</label>
                  <input type="text" class="form-control telp" id="telp" name="telp" placeholder="Masukan Tanggal Lahir">
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control level" id="level" name="level">
                    <option value='petugas'>Petugas</option>
                    <option value='admin'>Admin</option>
                  </select>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success">Ubah</button>
                </div>
              </form>
            </div>
          </div>

        </div>



      </div>

      <div class="modal fade" style="display: none;" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="<?= base_url('admin/petugas/hapus/'); ?>" method="post">
              <div class="modal-header bg-danger">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Yakin Data Dengan id_petugas <span class="id_petugas-confirm"></span> Ini Akan Dihapus ?</p>
                <input type="hidden" name="id_petugas" class="id_petugas" id="id_petugas">
                <input type="hidden" name="id_pengguna" class="id_pengguna" id="id_pengguna">
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-outline-light bg-danger">Iya</button>
              </div>
            </form>
          </div>

        </div>

      </div>
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

  <script>
    $(document).ready(function() {
      $('.btn-edit').on('click', function() {
        const id_petugas = $(this).data('id_petugas');
        const id_pengguna = $(this).data('id_pengguna');
        const nama_petugas = $(this).data('nama_petugas');
        const username = $(this).data('username');
        const password = $(this).data('password');
        const telp = $(this).data('telp');
        const level = $(this).data('level');

        $('.id_petugas').val(id_petugas);
        $('.id_pengguna').val(id_pengguna);
        $('.nama_petugas').val(nama_petugas);
        $('.username').val(username);
        $('.password').val(password);
        $('.telp').val(telp);
        $('.level').val(level);

        $('#modal-ubah').modal('show');
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('.btn-delete').on('click', function() {
        const id = $(this).data('id');
        const idPengguna = $(this).data('id_pengguna');

        $('.id_petugas-confirm').text(id);
        $('.id_petugas').val(id);
        $('.id_pengguna').val(idPengguna);
        $('#modal-hapus').modal('show');
      });
    });
  </script>

</body>

</html>