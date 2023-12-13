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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">

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
        <aside class="main-sidebar sidebar-dark text-white bg-danger elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/AdminLTE-3.2.0/index3.html" class="brand-link">
                <img src="<?= base_url() ?>/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PengaduanMasyarakat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php $session = session();
                                                    echo $session->get('nama'); ?> <br> Role: Masyarakat</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?= base_url('Masyarakat/Beranda') ?>" class="nav-link" style="color:white;">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Masyarakat/Pengaduan') ?>" class="nav-link" style="color:white;">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Pengaduan
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
                                    Menambahkan tanggapan
                                </div>

                                <div class="card-body">
                                    <form class="form-horizontal"
                                        action="<?= base_url('petugas/pengaduan/proses_tambah_tanggapan'); ?>"
                                        method="POST">
                                        <div class="form-group row">
                                            <div class="col-8">
                                                <input type="hidden" name="id_pengaduan" id="id_pengaduan"
                                                    value="<?= $dataPengaduan->id_pengaduan ?>">
                                                <!-- <?= $dataPengaduan->id_pengaduan ?> -->
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label for="nik" class="col-4 col-form-label">NIK</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->nik ?>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label for="nama" class="col-4 col-form-label">Nama</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->nama ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Tanggal" class="col-4 col-form-label">Tanggal</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->tanggal ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Isi Laporan" class="col-4 col-form-label">Isi Laporan</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->laporan ?>


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-4 col-form-label">Foto</label>
                                            <div class="col-8">
                                                <img src="<?php echo base_url('images/' . $dataPengaduan->foto) ?>"
                                                    alt="" style="width:500px;">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Status" class="col-4 col-form-label">Status</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->status ?>
                                            </div>
                                        </div>


                                    </form>

                                    <?php if ($dataTanggapan) : ?>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tanggapan</th>
                                                <th scope="col">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($dataTanggapan as $index => $tanggapan) : ?>
                                            <tr>
                                                <th scope="row"><?= $index + 1 ?></th>
                                                <td><?= $tanggapan['nama_petugas'] ?></td>
                                                <td><?= $tanggapan['tanggapan'] ?></td>
                                                <td><?= $tanggapan['tanggal'] ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <div class="modal fade" id="modal-ubah" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title">Ubah Tanggapan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Petugas/Pengaduan/proses_edit_tanggapan'); ?>" method="POST">
                            <input type="hidden" name="id_tanggapan" class="id_tanggapan">
                            <div class="form-group">
                                <textarea name="tanggapan" id="tanggapan" cols="30" rows="10"
                                    class="form-control tanggapan" placeholder="Ubah tanggapan"></textarea>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success btn-submit-ubah">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <div class="modal fade" style="display: none;" id="modal-hapus">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= base_url('Petugas/Pengaduan/proses_hapus_tanggapan'); ?>" method="post">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">Hapus Tanggapan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin Tanggapan Ini Akan Dihapus ?</p>
                            <input type="hidden" name="id_tanggapan" class="id_tanggapan" id="id_tanggapan">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-outline-light bg-danger">Iya</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

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
            const id_tanggapan = $(this).data('id_tanggapan');
            const tanggapan = $(this).data('tanggapan');
            $('.id_tanggapan').val(id_tanggapan);
            $('.tanggapan').val(tanggapan);
            $('#modal-ubah').modal('show');

            $('.tanggapan').keyup(function(event) {
                if (!event.target.value.length) {
                    $('.btn-submit-ubah').prop('disabled', true)
                } else {
                    $('.btn-submit-ubah').prop('disabled', false)
                }
            })
        });

        $('.btn-delete').on('click', function() {
            const id_tanggapan = $(this).data('id_tanggapan')
            $('.id_tanggapan').val(id_tanggapan);
            $('#modal-hapus').modal('show');
        })
    });
    </script>
</body>

</html>