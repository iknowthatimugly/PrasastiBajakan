<?php 
session_start();
if (isset($_SESSION['login'])) {
    ?>
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
    Form Array
    </center>
    <fieldset>
    <form action="" method="post">
    <label for="">Masukkan jumlah</label>
    <input type="number" name="jml" min="1" required>
    <br>
    <input type="submit" name="submit" value="simpan">
    <hr>
    </form>

    <form action="phparraypro.php" method="post">
    <?php
    if (isset($_POST['submit'])) {
            $jml_form = $_POST['jml'];
            for ($i=0; $i < $jml_form; $i++) { ?>
               <label for="">Masukan Bilangan</label>
               <input type="text" name="bil[]" required>
               <label for="">Masukan Pangkat</label>
               <input type="text" name="pangkat[]" required>
               <br> 
           <?php } ?>
           <input type="submit" name="sbm" value="Simpan">
           <input type="reset" value="Reset"> 
    </form>
    <?php } 
    echo "Balek meneh temuju ing halaman login<br>";
    echo "<a href='logoutfromarray.php' onclick='myFunction()'>Logout</a>";
    } else {
        die ("KUDU LOGIN MENEH,JENENGAN WES LOG OUT");
        echo "<a href='loginfromarray.php' onclick='myFunction()'>login meneh</a>";
    }
    ?>
    </fieldset>
</body>
</html>