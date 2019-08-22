<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $password = $_POST['pass'];
    if ($email == "admin@admin.com" && $password == "123") {
        echo "Nama          : ".$nama."<br>";
        echo "Email         : ".$email."<br>";
        echo "Jenis kelamin : ".$jk."<br>";
        echo "Agama         : ".$agama."<br>";
        echo "Alamat        : ".$alamat."<br>";
    }
    else {
        echo "MAAF,ANDA SAYA BANNED DARI SURGA!";
    }
}
?>