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
    <!-- Header Navbar -->
    <nav class="navbar navbar-light" style="background:GREY">
        <a class="navbar-brand" href="#">
            <img src="/assets/image/logo-custom.png" width="100" height="80" class="d-inline-block align-content-center" alt="">
            SMK ASSALAAM
        </a>
    </nav>
    <!-- Dead end -->

    <!-- Content -->
    <?php
    if (isset($_POST['sbm'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $ak = $_POST['ak'];
        $nbi = $_POST['nbi'];
        $mtk = $_POST['mtk'];
        $ipa = $_POST['ipa'];
        $eng = $_POST['eng'];

        $avg = ($nbi+$mtk+$ipa+$eng)/4;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table form-group">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai B Indonesia</th>
                        <th>Nilai Matematika</th>
                        <th>Nilai IPA</th>
                        <th>Nilai B Inggris</th>
                        <th>Rata Rata</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <th><?php echo $nama;?></th>
                        <th><?php echo $alamat;?></th>
                        <th><?php echo $jk;?></th>
                        <th><?php echo $ak;?></th>
                        <th><?php echo $nbi;?></th>
                        <th><?php echo $mtk;?></th>
                        <th><?php echo $ipa;?></th>
                        <th><?php echo $eng;?></th>
                        <th><?php echo $avg;?></th>
                        <th><?php if ($avg >= 65) {
                            echo "Lulus";
                        ?></th>
                        <th><?php } else {
                            echo "Tidak lulus";
                        }?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Dead end -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>