
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
    .sidebar a{
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
      <img src="<?= base_url() ?>/AdminLTE-3.0.5/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($dataMasyarakat as $index => $masyarakat) : ?>
                                                <tr>
                                                    <td><?= $index + 1; ?></td>
                                                    <td><?= $masyarakat['nik']; ?></td>
                                                    <td><?= $masyarakat['nama']; ?></td>
                                                    <td><?= $masyarakat['username']; ?></td>
                                                    <td><?= $masyarakat['password']; ?></td>
                                                    <td><?= $masyarakat['telp']; ?></td>
                                                    <td class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-success m-1 btn-edit" data-toggle="modal" data-target="#modal-ubah" data-whatever="@getbootstrap" 
                                                        data-id_masyarakat="<?= $masyarakat['id_masyarakat']; ?>" 
                                                        data-nik="<?= $masyarakat['nik']; ?>" 
                                                        data-nama="<?= $masyarakat['nama']; ?>" 
                                                        data-username="<?= $masyarakat['username']; ?>" 
                                                        data-password="<?= $masyarakat['password']; ?>" 
                                                        data-telp="<?= $masyarakat['telp']; ?>" 
                                                        >
                                                            <i class="fas fa-edit"></i>
                                                            Ubah
                                                        </button>
                                                        <button type="button" class="btn btn-danger m-1 btn-delete" data-id="<?= $masyarakat['id_masyarakat']; ?>">
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
                            <form action="<?= base_url("admin/masyarakat/tambah") ?>" method="post">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
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
                            <form action="<?= base_url('Admin/masyarakat/update'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="id_masyarakat" class="id_masyarakat">
                                    <input type="text" class="form-control nik" id="nik" name="nik" placeholder="Masukan NIK">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Masyarakat</label>
                                    <input type="text" class="form-control nama" id="nama" name="nama" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control username" id="username" name="username" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control password" id="password" name="password" placeholder="Masukan Password">
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telp</label>
                                    <input type="number" class="form-control telp" id="telp" name="telp" placeholder="Masukan Telp">
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
                        <form action="<?= base_url('Admin/Masyarakat/hapus/'); ?>" method="post">
                            <div class="modal-header bg-danger">
                                <h4 class="modal-title">Hapus Data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Yakin Data Dengan ID Masyarakat <span class="id_masyarakat-confirm"></span> Ini Akan Dihapus ?</p>
                                <input type="text" name="id_masyarakat" class="id_masyarakat" id="id_masyarakat">
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
<script src="<?= base_url() ?>/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/AdminLTE-3.0.5/dist/js/demo.js"></script> 

<script>
        $(document).ready(function() {
            $('.btn-edit').on('click', function() {
                const id_masyarakat = $(this).data('id_masyarakat');
                const nik = $(this).data('nik');
                const nama = $(this).data('nama');
                const username = $(this).data('username');
                const password = $(this).data('password');
                const telp = $(this).data('telp');
               

                $('.id_masyarakat').val(id_masyarakat);
                $('.nik').val(nik);
                $('.nama').val(nama);
                $('.username').val(username);
                $('.password').val(password);
                $('.telp').val(telp);
                

                $('#modal-ubah').modal('show');
            });
        });
  </script>


<script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function() {
                const id = $(this).data('id');

                $('.id_masyarakat-confirm').text(id);
                $('.id_masyarakat').val(id);
                $('#modal-hapus').modal('show');
            });
        });
    </script>

</body>
</html>
