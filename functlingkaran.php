<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Menghitung Keliling dan Luas lingkaran</p>
    <fieldset>
    <legend>
    Menghitung Luas
    </legend>
    <form action="" method="post">
    Diketahui! :
    Keliling Lingkaran = K = π × d = 2 × π × r <br>
    Luas Lingkaran = L = π × d²/4 = π × r²
    <br>
    Masukkan Ruas     : <input type="number" name="r"><br>
    <input type="submit" value="Hitung" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $ruas = $_POST['r'];
        function keliling_lingkaran($r){
            $hasil = 3.14*2*$r;
            return $hasil;
        }
        function luas_lingkaran($r){
            $jumlah = 3.14*($r*$r);
            return $jumlah;
        }
        $hasil = keliling_lingkaran($ruas);
        $jumlah = luas_lingkaran($ruas);
        echo "Keliling Lingkaranya adalah : $hasil<br>";
        echo "Luas Lingkaranya adalah : $jumlah";
    }

    ?>
    </fieldset>
</body>
</html>