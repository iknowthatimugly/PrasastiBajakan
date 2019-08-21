<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Input</title>
</head>
<body>
    <FORM Action="" METHOD="POST" NAME="INPUT">
    Masukan Nama : <Input type="text" name="nama" ><br>
    Masukan Nilai 1 : <input type="text" name="nilai1"><br>
    Masukan Nilai 2 : <input type="text" name="nilai2"><br>
    <Input type="submit" name="submit">
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $average = ($nilai1 + $nilai2)/2;
    echo "<br>Nama anda : ".$name."<br>";
    echo "Nilai 1 : ".$nilai1."<br>";
    echo "Nilai 2 : ".$nilai2."<br>";
    echo "Nilai Rata rata : ".$average;
}
?>