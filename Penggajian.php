<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    <legend>GAJIAN SLUR!</legend>
    <fieldset>
    <form method="post" name="submit">
    <table>
    <tr>
    <td>
    Nama : <input type="text" name="nama">
    </td>
    </tr>
    <tr>
    <td>
    Jabatan : <select name="jabatan">
    <option value="Manager">Manager</option>
    <option value="Karyawan">Karyawan</option>
    <option value="Lainya">Lainya</option>
    </select>
    </td>
    <tr>
    <td>
    Lama bekerja : <input type="number" name="lb">
    </td>
    </tr>
    <tr>
    <td>
    Tanggal gajian : <input type="date" name="tgl">
    </td>
    </tr>
    <tr>
    <td>
    <input type="Submit" name="submit" value="BAYAR">
    </td>
    </tr>
    </table>
    </form>
    <table>
    </pre>
    <?php
    echo "<pre>";
    if (isset($_POST['submit'])) {
        $nama=$_POST['nama'];
        $jabatan=$_POST['jabatan'];
        $tanggal=$_POST['tgl'];
        $hari=$_POST['lb'];
        if ($jabatan == "Manager") {
            $hari1 = (500000 * $hari);
            echo "Nama           : ".$nama."<br>";
            echo "Jabatan        : ".$jabatan."<br>";
            echo "Lama bekerja   : ".$hari."<br>";
            echo "Tanggal gajian : ".$tanggal."<br>";
            echo "Gaji perminggu : Rp 500,000<br>";
            echo "Total Gaji     : Rp ".$hari1."<br>";
        }
        elseif ($jabatan == "Karyawan") {
            $hari2 = (250000 * $hari);
            echo "Nama           : ".$nama."<br>";
            echo "Jabatan        : ".$jabatan."<br>";
            echo "Lama bekerja   : ".$hari."<br>";
            echo "Tanggal gajian : ".$tanggal."<br>";
            echo "Gaji perminggu : Rp 250,000<br>";
            echo "Total Gaji     : Rp ".$hari2."<br>";
        }
        elseif ($jabatan == "Lainya") {
            $hari3 = (200000 * $hari);
            echo "Nama           : ".$nama."<br>";
            echo "Jabatan        : ".$jabatan."<br>";
            echo "Lama bekerja   : ".$hari."<br>";
            echo "Tanggal gajian : ".$tanggal."<br>";
            echo "Gaji perminggu : Rp 200,000<br>";
            echo "Total Gaji     : Rp ".$hari3."<br>";
        }
    }
    echo "</pre>";
    ?>
    </table>
	<button>
	<a href="Kwitansi.php">Hal Kwitansi</a>
	</button>
	<button>
	<a href="formullir.php">Hal Formullir</a>
    </button>
    </fieldset>
</pre>
</body>
</html>