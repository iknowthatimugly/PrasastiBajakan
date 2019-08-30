<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
    <legend>
    Pendaftaran Master Chaldea
    </legend>
    Masukkan Nama : <input type="text" name="nama"><br>
    Masukkan Tinggi badan : <input type="text" name="tb"><br>
    Masukkan Berat badan : <input type="text" name="bb"><br>
    <input type="submit" value="Submit" name="submit">
    </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['nama'];
        $tinggi = $_POST['tb'];
        $berat = $_POST['bb'];
        function seleksi($tinggi,$berat,$name){
            if ($tinggi >= 165 && $berat >= 60) {
                echo "Selamat!\n";
                echo "Anda Lulus seleksi Master Chaldea<br>";
                echo "Atas nama : ".$name."<br>";
                echo "Dengan tinggi badan : $tinggi<br>";
                echo "Dan berat badan : $berat";
            }
            else {
                echo "Maaf anda tidak lulus seleksi";
            }
        }
        $hasil = seleksi($tinggi,$berat,$name);
        echo $hasil;
    }

?>
</body>
</html>