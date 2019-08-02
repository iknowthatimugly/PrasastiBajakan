<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Masukan angka : <input type="text" name="angka">
</body>
</html>
<?php
if (isset($_GET['input'])) {
    $angka = $_POST['angka'];
    echo "anda memasukan angka $angka";
    if ($angka == "1") {
        echo "anda memasukan warna biru";
        echo "<hr width=10px color='blue' >";
    }
    elseif ($angka == "2") {
        echo "anda memasukan warna merah";
        echo "<hr width=10px color='red' >";
    }
    elseif ($angka == "3") {
        echo "anda memasukan warna hijau";
        echo "<hr width=10px color='green' >";
    }
    elseif ($angka == "4") {
        echo "anda memasukan warna kuning";
        echo "<hr width=10px color='yellow' >";
    }
    elseif ($angka == "5") {
        echo "anda memasukan warna biru";
        echo "<hr width=10px color='blue' >";
    }
    elseif ($angka == "6") {
        echo "anda memasukan warna biru";
        echo "<hr width=10px color='blue' >";
    }
    elseif ($angka == "7") {
        echo "anda memasukan warna nigga";
        echo "<hr width=10px color='#000000' >";
    }
    elseif ($angka == "8") {
        echo "anda memasukan warna orange";
        echo "<hr width=10px color='#ff8000' >";
    }
    elseif ($angka == "9") {
        echo "anda memasukan warna pink";
        echo "<hr width=10px color='#ff00ff' >";
    }
    elseif ($angka == "10") {
        echo "anda memasukan warna lime";
        echo "<hr width=10px color='#66ff33' >";
    }
    else {
        echo "Maaf,Nomor yang anda masukan Invalid karena anda wibu";
    }
}
?>