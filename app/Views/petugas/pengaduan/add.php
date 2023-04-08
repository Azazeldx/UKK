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
                    Logout
                </li>
                <!-- Notifications Dropdown Menu -->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark text-white bg-success elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/AdminLTE-3.0.5/index3.html" class="brand-link">
                <img src="<?= base_url() ?>/AdminLTE-3.0.5/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PengaduanMasyarakat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/AdminLTE-3.0.5/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Putu Ade Pranata <br> Role: Petugas</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?= base_url('Petugas/Beranda') ?>" class="nav-link" style="color:white;">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Petugas/Pengaduan') ?>" class="nav-link" style="color:white;">
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
                                    <form class="form-horizontal" action="<?= base_url('petugas/pengaduan/proses_tambah_tanggapan'); ?>"
                                        method="POST">
                                        <div class="form-group row">
                                            <label for="nik" class="col-4 col-form-label">ID Pengaduan</label>
                                            <div class="col-8">
                                                <input type="text" name="id_pengaduan" id="id_pengaduan" value="<?= $dataPengaduan->id_pengaduan ?>">
                                                <!-- <?= $dataPengaduan->id_pengaduan ?> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nik" class="col-4 col-form-label">NIK</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->nik ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-4 col-form-label">Nama</label>
                                            <div class="col-8">
                                            <?= $dataPengaduan->nama ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Tanggal" class="col-4 col-form-label">Tanggal</label>
                                            <div class="col-8">
                                                <?= $dataPengaduan->tgl_pengaduan ?>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Isi Laporan" class="col-4 col-form-label">Isi Laporan</label>
                                            <div class="col-8">
                                            <?= $dataPengaduan->isi_laporan ?>

                                            
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-4 col-form-label">Foto</label>
                                            <div class="col-8">
                                                <img src="<?php echo base_url('images/'.$dataPengaduan->foto) ?>" alt="" style="width:500px;">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggapan" class="col-4 col-form-label">Tanggapan</label>
                                            <div class="col-8">
                                                <textarea name="tanggapan" id="tanggapan" cols="30" rows="10"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Status" class="col-4 col-form-label">Status</label>
                                            <div class="col-8">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Proses">Proses</option>
                                                    <option value="Selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer justify-content-between">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>

                                    </form>

                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggapan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button class="btn btn-success"><i class="fa-solid fa-pencil"></i> Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>
                                                    <button class="btn btn-success"><i class="fa-solid fa-pencil"></i> Edit</button>
                                                </td>
                                            </tr>
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