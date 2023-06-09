<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>R.O - Ubah Semester 1</title>
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

                    <!-- Form input siswa -->
                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">UBAH DATA NILAI</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT * FROM smt2, siswa WHERE smt2.nis = siswa.nis AND smt2.nis = '$_GET[nis]'");
                                $data = mysqli_fetch_array($sql)
                                ?>
                                <form action="" method="post" id="haram" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nis" class="form-control" readonly value="<?php echo $data['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Agama Islam</label>
                                        <input type="number" name="pai" class="form-control" max="100" value="<?php echo $data['pai']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa Indonesia</label>
                                        <input type="number" name="bind" class="form-control" max="100" value="<?php echo $data['bind']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Pancasila dan Kewarganegaraan</label>
                                        <input type="number" name="ppkn" class="form-control" max="100" value="<?php echo $data['ppkn']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Ilmu Pengetahuan Alam dan Sosial</label>
                                        <input type="number" name="ipas" class="form-control" max="100" value="<?php echo $data['ipas']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Matematika</label>
                                        <input type="number" name="mtk" class="form-control" max="100" value="<?php echo $data['mtk']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Olahraga, Jasmani dan Kesehatan</label>
                                        <input type="number" name="pjok" class="form-control" max="100" value="<?php echo $data['pjok']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Seni Rupa</label>
                                        <input type="number" name="rupa" class="form-control" max="100" value="<?php echo $data['rupa']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Seni Musik</label>
                                        <input type="number" name="musk" class="form-control" max="100" value="<?php echo $data['musk']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Seni Tari</label>
                                        <input type="number" name="tari" class="form-control" max="100" value="<?php echo $data['tari']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Seni Teater</label>
                                        <input type="number" name="tetr" class="form-control" max="100" value="<?php echo $data['tetr']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa Inggris</label>
                                        <input type="number" name="bing" class="form-control" max="100" value="<?php echo $data['bing']?>">
                                    </div>
                                        <input type="submit" name="ubah" value="UBAH" class="btn btn-primary">
                                        <input type="submit" name="reset" value="RESET" class="btn btn-warning">
                                </form>
                                </div>
                                <?php
                                if (isset($_POST['ubah'])) {
                                    $nis = $_GET['nis'];
                                    $pai = $_POST['pai'];
                                    $bind = $_POST['bind'];
                                    $ppkn = $_POST['ppkn'];
                                    $ipas = $_POST['ipas'];
                                    $mtk = $_POST['mtk'];
                                    $pjok = $_POST['pjok'];
                                    $rupa = $_POST['rupa'];
                                    $musk = $_POST['musk'];
                                    $tari = $_POST['tari'];
                                    $tetr = $_POST['tetr'];
                                    $bing = $_POST['bing'];

                                    mysqli_query ($koneksi, "update smt2 set
                                    pai = '$pai',
                                    bind = '$bind',
                                    ppkn = '$ppkn',
                                    ipas = '$ipas',
                                    mtk = '$mtk',
                                    pjok = '$pjok',
                                    rupa = '$rupa',
                                    musk = '$musk',
                                    tari = '$tari',
                                    tetr = '$tetr',
                                    bing = '$bing'
                                    where nis = '$nis'");
                                
                                    echo "<script>alert('Data Telah Diubah. Kembali');</script>";
                                    echo "<script>window.location.replace('tabelsmt2.php') </script>";

                                    /*upload gambar
                                    $gam = upload();

                                    if ( !$gam ) {
                                        return false;
                                    }*/    
                                }

                                if (isset($_POST['reset'])) {
                                    echo "<script>alert('Kembali');</script>";
                                    echo "<script>window.location.replace('ubahsmt2.php?nis=$_GET[nis]') </script>";
                                }

                                /*function upload() {
                                    $namaFile = $_FILES['gam']['name'];
                                    $ukuranFile = $_FILES['gam']['size'];
                                    $error = $_FILES['gam']['error'];
                                    $tmpName = $_FILES['gam']['tmp_name'];

                                    //cek gambar diupload
                                    if ($error === 4){
                                        echo "<script> alert('ndak ada gambar'); </script>";
                                        return false;
                                    }

                                    //cek jenis file gambar
                                    $gambarvalid = ['jpg', 'jpeg', 'png'];
                                    $ekstensigamb = explode('.', $namaFile);
                                    $ekstensigamb = strtolower(end($ekstensigamb));
                                    
                                    if (!in_array($ekstensigamb, $gambarvalid)) {
                                        echo "<script> alert('file nya sus mang'); </script>";
                                        return false;
                                    }

                                    //cek ukuran file gambar
                                    if ($ukuranFile > 10000000) {
                                        echo "<script> alert('ukuran file terlalu besar'); </script>";
                                        return false;
                                    }

                                    //lolos eliminasi kemunduran
                                    //buat nama baru
                                    $namaFileBaru = uniqid();
                                    $namaFileBaru .= '.';
                                    $namaFileBaru .= $ekstensigamb;

                                    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

                                    return $namaFileBaru;
                                }*/
                            ?>

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