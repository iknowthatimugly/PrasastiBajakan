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
<input type='submit' name='input' value='Submit'>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $angka = $_POST['angka'];
    echo "<br>anda memasukan angka $angka";
    if ($angka == "1") {
        echo "<br>anda memasukan warna biru";
        echo "<hr width=100px height=100vn color='blue' >";
    }
    elseif ($angka == "2") {
        echo "<br>anda memasukan warna merah";
        echo "<hr width=100px height=100vn color='red' >";
    }
    elseif ($angka == "3") {
        echo "<br>anda memasukan warna hijau";
        echo "<hr width=100px height=100vn color='green' >";
    }
    elseif ($angka == "4") {
        echo "<br>anda memasukan warna kuning";
        echo "<hr width=100px height=100vn color='yellow' >";
    }
    elseif ($angka == "5") {
        echo "<br>anda memasukan warna biru";
        echo "<hr width=100px height=100vn color='blue' >";
    }
    elseif ($angka == "6") {
        echo "<br>anda memasukan warna biru";
        echo "<hr width=100px height=100vn color='blue' >";
    }
    elseif ($angka == "7") {
        echo "<br>anda memasukan warna nigga";
        echo "<hr width=100px height=100vn color='#000000' >";
    }
    elseif ($angka == "8") {
        echo "<br>anda memasukan warna orange";
        echo "<hr width=100px height=100vn color='#ff8000' >";
    }
    elseif ($angka == "9") {
        echo "<br>anda memasukan warna pink";
        echo "<hr width=100px height=100vn color='#ff00ff' >";
    }
    elseif ($angka == "10") {
        echo "<br>anda memasukan warna lime";
        echo "<hr width=100px height=100vn color='#66ff33' >";
    }
    else {
        echo "Maaf,Nomor yang anda masukan Invalid karena anda wibu";
    }
}
?>