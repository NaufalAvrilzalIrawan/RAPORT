<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>R.O - Tabel Siswa</title>
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
            echo "<script>window.location.replace('login.php') </script>";
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
                <a class="nav-link" href="Siswa.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                BASIS DATA
            </div>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>RAPOT</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nilai Detail dari:</h6>
                        <a class="collapse-item active" href="siswasmt1s.php">Semester 1</a>
                        <a class="collapse-item" href="siswasmt2s.php">Semester 2</a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

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
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * from siswa where nama='$_SESSION[nama]'");
                    $data = mysqli_fetch_array($sql)
                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">RAPORT SEMESTER 1</h6>
                        </div>
                        <div class="card-body">
                        <table style="text-align:left;">
                            <tr style="text-align:left;">
                                <th width="350">NIS</th>
                                <td> : </td>
                                <td> <?php echo $data['nis']; ?> </td>
                            </tr>
                            <tr>
                                <th>NAMA</th>
                                <td> : </td>
                                <td> <?php echo $data['nama']; ?> </td>
                            </tr>
                            <tr>
                                <th>UMUR</th>
                                <td> : </td>
                                <td> <?php echo $data['umur']; ?> Tahun</td>
                            </tr>
                            <tr>
                                <th>JENIS KELAMIN</th>
                                <td> : </td>
                                <td> <?php echo $data['gender']; ?> </td>
                            </tr>
                            <tr>
                                <th>AGAMA</th>
                                <td> : </td>
                                <td> <?php echo $data['agama']; ?> </td>
                            </tr>
                            <tr>
                                <th>KELAS</th>
                                <td> : </td>
                                <td> <?php echo $data['kelas']; ?> </td>
                            </tr>
                        </table><br>
                        <div class="row">
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Nilai Tertinggi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $jum = "SELECT GREATEST(pai, bind, ppkn, ipas, mtk, pjok, rupa, musk, tari, tetr, bing) AS tinggi FROM smt1, siswa WHERE siswa.nis = smt1.nis AND siswa.nama='$_SESSION[nama]'";
                                                    $haj = $koneksi->query($jum);

                                                    while($row = mysqli_fetch_array($haj)) {
                                                        echo $row['tinggi'];
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-people fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Nilai Terendah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $jum = "SELECT LEAST(pai, bind, ppkn, ipas, mtk, pjok, rupa, musk, tari, tetr, bing) AS rendah FROM smt1, siswa WHERE siswa.nis = smt1.nis AND siswa.nama='$_SESSION[nama]'";
                                                    $haj = $koneksi->query($jum);

                                                    while($row = mysqli_fetch_array($haj)) {
                                                        echo $row['rendah'];
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-people fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rata-Rata Nilai</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $jum = "SELECT MAX(pai + bind + ppkn + ipas + mtk + pjok + rupa + musk + tari + tetr + bing) / 11 AS rata FROM smt1, siswa WHERE siswa.nis = smt1.nis AND siswa.nama='$_SESSION[nama]'";
                                                    $haj = $koneksi->query($jum);

                                                    while($row = mysqli_fetch_array($haj)) {
                                                        echo $row['rata'];
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-people fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>KKM</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Komentar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>KKM</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Komentar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM siswa, smt1 WHERE siswa.nis = smt1.nis AND siswa.nama='$_SESSION[nama]'");
                                    $data = mysqli_fetch_array($sql)
                                    ?>
                                        <tr>
                                            <th>1</th>
                                            <td>Pendidikan Agama Islam</td>
                                            <td>75</td>
                                            <td><?php echo $data['pai']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['pai'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['pai'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['pai'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['pai'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['pai'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['pai'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Bahasa Indonesia</td>
                                            <td>75</td>
                                            <td><?php echo $data['bind']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['bind'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['bind'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['bind'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['bind'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['bind'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['bind'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                            <td>75</td>
                                            <td><?php echo $data['ppkn']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['ppkn'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['ppkn'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['ppkn'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['ppkn'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['ppkn'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['ppkn'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>Ilmu Pengetahuan Alam dan Sosial</td>
                                            <td>75</td>
                                            <td><?php echo $data['ipas']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['ipas'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['ipas'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['ipas'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['ipas'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['ipas'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['ipas'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        <tr>
                                            <th>5</th>
                                            <td>Matematika</td>
                                            <td>75</td>
                                            <td><?php echo $data['mtk']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['mtk'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['mtk'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['mtk'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['mtk'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['mtk'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['mtk'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td>Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                                            <td>75</td>
                                            <td><?php echo $data['pjok']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['pjok'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['pjok'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['pjok'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['pjok'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['pjok'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['pjok'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td>Seni Rupa</td>
                                            <td>75</td>
                                            <td><?php echo $data['rupa']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['rupa'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['rupa'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['rupa'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['rupa'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['rupa'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['rupa'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <td>Seni Musik</td>
                                            <td>75</td>
                                            <td><?php echo $data['musk']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['musk'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['musk'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['musk'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['musk'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['musk'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['musk'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>9</th>
                                            <td>Seni Tari</td>
                                            <td>75</td>
                                            <td><?php echo $data['tari']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['tari'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['tari'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['tari'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['tari'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['tari'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['tari'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>10</th>
                                            <td>Seni Teater</td>
                                            <td>75</td>
                                            <td><?php echo $data['tetr']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['tetr'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['tetr'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['tetr'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['tetr'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['tetr'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['tetr'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>11</th>
                                            <td>Bahasa Inggris</td>
                                            <td>75</td>
                                            <td><?php echo $data['bing']; ?></td>
                                            <td>
                                                <?php 
                                                if ($data['bing'] >= 90) {
                                                    echo "A";
                                                }
                                                else if ($data['bing'] >= 80) {
                                                    echo "B";
                                                }
                                                else if ($data['bing'] >= 75) {
                                                    echo "C";
                                                }
                                                else {
                                                    echo "D";
                                                }?>
                                            </td>
                                            <td><?php 
                                                if ($data['bing'] >= 90) {
                                                    echo "Siswa dapat menguasai materi dengan sangat baik";
                                                }
                                                else if ($data['bing'] >= 80) {
                                                    echo "Siswa dapat menguasai materi dengan baik";
                                                }
                                                else if ($data['bing'] >= 75) {
                                                    echo "Siswa dapat menguasai materi dengan cukup baik";
                                                }
                                                else {
                                                    echo "Siswa dapat kurang menguasai materi";
                                                }?>
                                            </td>
                                        </tr>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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