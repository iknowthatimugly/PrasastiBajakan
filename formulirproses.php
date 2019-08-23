<?php
if (isset($_POST['submit'])) {
    $no = $_POST['nop'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tel = $_POST['tel'];
    $tal = $_POST['tal'];
    $as = $_POST['AS'];
    $jk = $_POST['jk'];
    $jr = $_POST['jr'];
    $na = $_POST['na'];
    $pa = $_POST['pa'];
    $ni = $_POST['ni'];
    $pi = $_POST['pi'];
    $tbd = $_POST['tbd'];
    echo "<pre>";
    echo "No Pendaftaran : ".$no."<br>";
    echo "NISN           : ".$nisn."<br>";
    echo "Nama           : ".$nama."<br>";
    echo "Alamat         : ".$alamat."<br>";
    echo "Tempat Lahir   : ".$tel."<br>";
    echo "Tanggal Lahir  : ".$tal."<br>";
    echo "Asal Sekolah   : ".$as."<br>";
    echo "Jenis Kelamin  : ".$jk."<br>";
    echo "Jurusan        : ".$jr."<br>";
    echo "Nama Ayah      : ".$na."<br>";
    echo "Pekerjaan Ayah : ".$pa."<br>";
    echo "Nama Ibu       : ".$ni."<br>";
    echo "Pekerjaan Ibu  : ".$pi."<br>";
    if (isset($_POST['G'])) {
        echo "Hobby          : " . $_POST['G'] . "<br>";
        }
    if (isset($_POST['NGA'])) {
            echo "Hobby          : " . $_POST['NGA'] . "<br>";
        }
    if (isset($_POST['NGU'])) {
        echo "Hobby          : " . $_POST['NGU'] . "<br>";
        }
    if (isset($_POST['NGAB'])) {
        echo "Hobby          : " . $_POST['NGAB'] . "<br>";
        }
    if (isset($_POST['DLL'])) {
        echo "Hobby          : " . $_POST['DLL'] . "<br>";
        }
    echo "Tinggi badan   : ".$tbd;
    echo "</pre>";
}
?>