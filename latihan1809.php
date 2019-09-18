<?php
session_start();
if (isset($_SESSION['login'])) {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<!-- header -->
<nav class="navbar navbar-light" style="background:GREY">
  <a class="navbar-brand" href="#">
    <img src="/assets/image/logo-custom.png" width="100" height="80" class="d-inline-block align-content-center" alt="">
    SMK ASSALAAM
  </a>
</nav>
<!-- header end -->

<!-- content -->
<div class="container">
    <div class="row justify-content-center" style="padding:20px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Formulir pendaftaran</div>
                    <div class="card-body">
                        <form action="proses1809.php" method="post">
                            <!-- Tag Nama -->
                            <div class="form-group">
                                <label for="">Nama :</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <!-- Tag Alamat -->
                            <div class="form-group">
                                <label for="">Alamat :</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <!-- Tag Jenis kelamin -->
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
                                <input type="radio" name="jk" class="custom-radio" value="laki laki">Laki-Laki
                                <input type="radio" name="jk" class="custom-radio" value="perempuan">Perempuan
                            </div>
                            <!-- Tag Asal Sekolah -->
                            <div class="form-group">
                                <label>Asal Sekolah :</label>
                                <input type="text" name="ak" class="form-control">
                            </div>
                            <!-- Tag Nilai Bahasa Indonesia-->
                            <div class="form-group">
                                <label>Nilai Bahasa Indonesia :</label>
                                <input type="number" name="nbi" class="form-control">
                            </div>
                            <!-- Tag Nilai Matematika -->
                            <div class="form-group">
                                <label>Nilai Matematika :</label>
                                <input type="number" name="mtk" class="form-control">
                            </div>
                            <!-- Tag Nilai IPA -->
                            <div class="form-group">
                                <label>Nilai IPA :</label>
                                <input type="number" name="ipa" class="form-control">
                            </div>
                            <!-- Tag Nilai ENG -->
                            <div class="form-group">
                                <label>Nilai Bahasa Inggris :</label>
                                <input type="number" name="eng" class="form-control">
                            </div>
                            <!-- Tag Button -->
                            <button type="submit" class="btn btn-outline-dark" name="sbm">Simpan</button>
                            <button class="btn btn-outline-warning"><a href="logout1809.php">Log out</a></button>
                            <button type="reset" class="btn btn-outline-secondary" name="rst">Reset</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content end -->

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }else {
    die ("Silahkan Dlu :) <a href='loginlatihan1809.php'><br>LOGIN DISINI</a>");
}?>