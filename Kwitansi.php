<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwitansi</title>
</head>
<body>
<pre>
    <form method="post" name="submit">
    <fieldset>
    <legend>KWITANSI BARANG</legend>
    <table>
    <tr>
    <td>
    Masukan nama barang : <input type="text" name="barang">
    </td>
    </tr>
    <tr>
    <td>
    Masukan nama pengirim : <input type="text" name="nama">
    </td>
    </tr>
    <tr>
    <td>
    Masukkan jumlah barang : <input type="number" name="jumlah">
    </td>
    </tr>
    <tr>
    <td>
    Masukkan tanggal pengiriman : <input type="date" name="tgl">
    </td>
    </tr>
    <tr>
    <td>
    Masukkan biaya pengiriman : <input type="number" name="uang">
    </td>
    </tr>
    <tr>
    <td>
    <input type="submit" name="submit">
    </td>
    </tr>
    <tr>
    <td>
<?php
if (isset($_POST['submit'])) {
    $barang=$_POST['barang'];
    $nama=$_POST['nama'];
    $jumlah=$_POST['jumlah'];
    $tgl=$_POST['tgl'];
    $uang=$_POST['uang'];

    echo "Nama Pengirim : ".$nama."<br>";
    echo "Nama barang : ".$barang."<br>";
    echo "Jumlah barang :".$jumlah."<br>";
    echo "Tanggal pengiriman :".$tgl."<br>";
    echo "Dana Pengiriman :".$uang."<br>";
}

?>
                    </td>
                    </tr>
    </table>
    <button>
	<a href="Penggajian.php">Hal Penggajian</a>
	</button>
    <button>
	<a href="formullir.php">Hal Formulir</a>
	</button>
    </fieldset>
    </form>
    </pre>
</body>
</html>