<!DOCRYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang</title>

    <!-- Custom fonts for this template-->
    <link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <?php
    //membuat variabel menggunakan php
        include "koneksi_db.php";
        $queri = "select * from user";
        $hasil = mysqli_query($koneksi, $queri);
    ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-15 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img class="col-lg-6 d-none d-lg-block" src="img/LogoDinasPendidikan.jpg" alt="">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali!</h1>
                                    </div>
                                    
                                    <form action="" onclick="cek()" method="post" name="masuk" id="masuk" class="user">

                                        <div class="form-group">
                                            <label>NIS/NIP</label>
                                            <input type="text" class="form-control form-control-user"  name="nisp" id="nisp" placeholder="Masukkan NIS/NIP"></input>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control form-control-user" name="sandi" id="sandi" placeholder="Masukkan Password"></input>
                                        </div>
                                        
                                        <input type="submit" name="Login" value="LOGIN" class="btn btn-primary btn-user btn-block"></input>
                                    
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
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

<script>
    function cek() {
        var username = document.masuk.nama.value;
        var password = document.masuk.sandi.value;
        
        if (username.length=="" && password=="") {
            alert ("NIS/NIP dan Password kosong");
            return true;
        }
        
        if else {
            if (username.length=="") {
                alert ("NIS/NIP kosong");
                return true;
            }
            
            if (password.length=="") {
                alert ("Password kosong");
                return true;
            }
        }

        else {

</script>
<?php
    if (isset($_POST['Login'])) {

        include "koneksi_db.php";

        $user = $_POST['nisp'];
        $pass = $_POST['sandi'];

        $user = stripcslashes($user);
        $pass = stripcslashes($pass);
        $user = mysqli_real_escape_string($koneksi, $user);
        $pass = mysqli_real_escape_string($koneksi, $pass);

        $sql = "select * from user where nisnip = '$user' and password = '$pass'";
        $hasil = mysqli_query($koneksi, $sql);
        $array = mysqli_fetch_array($hasil);
        $cek = mysqli_num_rows($hasil);

        if ($cek==1) {
            echo "<script>alert('Anda Berhasil Masuk');</script>";
            echo "<script>window.location.replace('Dashboard.php?nisp=$user') </script>";
        }
        else {
            echo "<script>alert ('Username atau Password tidak valid. Kembali'); </script>";
            echo "<script>window.location.replace('index.php') </script>";
        }
    }
?>
<script>
        }
    }
</script>



</body>
</html>

