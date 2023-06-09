<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>R.O - Tabel Semester 1</title>
    <link rel="icon" type="image/x-icon" href="img/LogoDinasPendidikan.png">

    <!-- Custom fonts for this template-->
    <link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <?php
        include "koneksi_db.php";
        session_start();
        if (!isset($_SESSION['login'])){
            echo "<script>window.location.replace('index.php') </script>";
        }
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Raport Online <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="Dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                BASIS DATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data detail dari:</h6>
                        <a class="collapse-item" href="tabelsiswa.php">Siswa</a>
                        <a class="collapse-item" href="tabelnilai.php">Nilai</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>NILAI</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nilai Detail dari:</h6>
                        <a class="collapse-item" href="tabelsmt1.php">Semester 1</a>
                        <a class="collapse-item active" href="tabelsmt2.php">Semester 2</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <!--menampilkan nama dari user-->
                                    <?php
                                        echo $_SESSION['nama'];
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/noname.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <p class="dropdown-item">
                                    <?php
                                        echo $_SESSION['nama'];
                                    ?>
                                </p>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">TABEL DATA NILAI SEMESTER 2</h6>
                        </div>
                        <div class="card-body">
                        <a href="tambahsmt2.php"><input type="submit" name="TAMBAH" value="TAMBAH" class="btn btn-primary btn-sm"></a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>PAI</th>
                                            <th>Bahasa Indonesia</th>
                                            <th>PPKN</th>
                                            <th>IPAS</th>
                                            <th>MTK</th>
                                            <th>PJOK</th>
                                            <th>Seni Rupa</th>
                                            <th>Seni Musik</th>
                                            <th>Seni Tari</th>
                                            <th>Seni Teater</th>
                                            <th>Bahasa Inggris</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>PAI</th>
                                            <th>Bahasa Indonesia</th>
                                            <th>PPKN</th>
                                            <th>IPAS</th>
                                            <th>MTK</th>
                                            <th>PJOK</th>
                                            <th>Seni Rupa</th>
                                            <th>Seni Musik</th>
                                            <th>Seni Tari</th>
                                            <th>Seni Teater</th>
                                            <th>Bahasa Inggris</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $queri = "SELECT * FROM siswa, smt2 WHERE siswa.nis = smt2.nis ORDER BY nama";
                                        $hasil = mysqli_query($koneksi, $queri);

                                        while ($data = mysqli_fetch_array($hasil)) {
                                    ?> 
                                        <tr><th> <?php echo $no; ?> </th>
                                            <td> <?php echo $data['nis']; ?></td>
                                            <td> <?php echo $data['nama']; ?></td>
                                            <td> <?php echo $data['pai']; ?></td>
                                            <td> <?php echo $data['bind']; ?></td>
                                            <td> <?php echo $data['ppkn']; ?></td>
                                            <td> <?php echo $data['ipas']; ?></td>
                                            <td> <?php echo $data['mtk']; ?></td>
                                            <td> <?php echo $data['pjok']; ?></td>
                                            <td> <?php echo $data['rupa']; ?></td>
                                            <td> <?php echo $data['musk']; ?></td>
                                            <td> <?php echo $data['tari']; ?></td>
                                            <td> <?php echo $data['tetr']; ?></td>
                                            <td> <?php echo $data['bing']; ?></td>
                                            <td> <?php echo "<a href='siswasmt2.php?nis=$data[nis]'>"?><input type="submit" name="rapot" value="rapot" class="btn btn-success btn-sm"></a>
                                            <?php echo "<a href='ubahsmt2.php?nis=$data[nis]'>"?><input type="submit" name="ubah" value="ubah" class="btn btn-info btn-sm"></a> 
                                            <?php echo "<a href='?nis=$data[nis]'>"?><input type="submit" name="hapus" value="hapus" onclick="return confirm('Ingin menghapus nilai?')" class="btn btn-danger btn-sm"></a></td>
                                        </tr>

                                    <?php
                                        $no++;
                                        }
                                    ?>
                                    <?php
                                        if (isset($_GET['nis'])) {
                                            mysqli_query($koneksi, "DELETE FROM smt2 WHERE nis = '$_GET[nis]'");

                                            echo "echo <script> alert('Data Telah Terhapus');</script>";
                                            echo "<script>window.location.replace('tabelsmt2.php') </script>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; IWADMIN 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Logout" untuk kembali ke halaman Login</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sbadmin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="sbadmin/vendor/chart.js/Chart.min.js"></script>
    <script src="sbadmin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="sbadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="sbadmin/js/demo/chart-pie-demo.js"></script>
    <script src="sbadmin/js/demo/datatables-demo.js"></script>

</body>

</html>