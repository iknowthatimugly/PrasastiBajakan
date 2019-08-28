<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form action="" method="get">
    <label for="">Masukan Jumlah</label>
    <input type="number" name="jml">
    <hr>
    <input type="submit" name="submit" value="Simpan">
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $jml_form = $_GET['jml'];
        for ($i=1; $i < $jml_form; $i++) { 
        ?>
        <br>
        <form action="formarraypro.php" method="post">
        <label for="">name</label>
        <input type="text" name="nama[]" required>
        <label for="">Kelas</label>
        <input type="text" name="kelas[]" required>
        <br>
        <br>
       <?php } ?>
       <input type="submit" name="sbm" Value="Simpan">
       <input type="reset" value="reset">
    <?php } 
    ?>
    </fieldset>
</html>
</body>