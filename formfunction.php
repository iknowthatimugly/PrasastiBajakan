<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <Legend>
        Luas Persegi
    </Legend>
    <form action="" method="get">
    <label for="">sisi</label>
    <input type="number" min="1" name="s" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
</fieldset>
<?php
if (isset($_GET['simpan'])){
    $sisi = $_GET['s'];
    function luas_persegi($s){
        $luas = $s *$s;
        return $luas;
    }
    $luas = $luas_persegi($sisi);
    echo "Luas persegi : $luas";
}

?>
</body>
</html>