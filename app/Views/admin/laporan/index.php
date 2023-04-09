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
                  <form class="form-horizontal" action="<?= base_url('Admin/Laporan/index'); ?>" method="POST">
                    <div class="form-group row">
                      <label for="tanggal_awal" class="col-4 col-form-label">Dari tanggal</label>
                      <div class="col-8">
                        <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" placeholder="Nama Jabatan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_akhir" class="col-4 col-form-label">Sampai tanggal</label>
                      <div class="col-8">
                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" placeholder="Nama Jabatan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Nama Pengadu</label>
                      <div class="col-8">
                        <select class="form-control" id="id_pengadu" name="id_pengadu">
                          <option value="" selected>All</option>
                          <?php foreach ($dataMasyarakat as $index => $masyarakat) : ?>
                            <option value="<?= $masyarakat['id_masyarakat'] ?>"><?= $masyarakat['nama'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Nama Petugas</label>
                      <div class="col-8">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option>Ade</option>
                          <option>Pranata</option>
                        </select>
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label for="keterangan" class="col-4 col-form-label">Status</label>
                      <div class="col-8">
                        <select class="form-control" id="status" name="status">
                          <option value="" selected>All</option>
                          <option value="antri">Antri</option>
                          <option value="proses">Proses</option>
                          <option value="selesai">Selesai</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="submit" class="btn btn-primary btn-generate-table">Generate Table</button>
                    </div>

                  </form>
                </div>

              </div>

            </div>

          </div>

        </div>

        <table id="example1" class="table table-bordered table-striped" style="display: none">
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Tanggal Pengaduan</th>
              <th>Nama Pengadu</th>
              <th>NIK</th>
              <th>Isi Laporan</th>
              <th>Foto</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataPengaduan as $index => $pengaduan) : ?>
              <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $pengaduan['id_pengaduan']; ?></td>
                <td><?= $pengaduan['tanggal']; ?></td>
                <td><?= $pengaduan['nama']; ?></td>
                <td><?= $pengaduan['nik']; ?></td>
                <td><?= $pengaduan['laporan']; ?></td>
                <td><img src="<?= base_url('/images/' . $pengaduan['foto']) ?>" alt="" width="100"></td>
                <td><?= $pengaduan['status']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

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
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="<?= base_url(); ?>/AdminLTE-3.2.0/dist/js/adminlte.min.js?v=3.2.0"></script>

  <script>
    setTimeout(() => {
      if (!localStorage.getItem('isTableGenerated')) {
        $('#example1').css({
          'display': 'none'
        });
      } else {
        $('#example1').css({
          'display': 'table'
        });
        generateDataTable()
      }
      $('.btn-generate-table').on('click', function() {
        localStorage.setItem('isTableGenerated', true);
      })
    }, 500);

    function generateDataTable() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "searching": false,
        "paging": false,
        "info": false,
        "buttons": ["print"],
      }).buttons().container().appendTo('.modal-footer');
    };

    $(function() {
      if (performance.navigation.type == 1) {
        localStorage.removeItem('isTableGenerated')
      }
    });

    $('.nav-item').each(function() {
      $(this).on('click', function() {
        localStorage.removeItem('isTableGenerated')
      })
    })
  </script>
</body>

</html>