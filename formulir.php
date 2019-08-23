<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
</head>
<body>
<FORM METHOD="POST" NAME="submit" ACTION="formulirproses.php"><pre>
    No Pendaftaran        : <input type="number" name="nop"><br>
    NISN                  : <input type="number" name="nisn"><br>
    Nama                  : <input type="text" name="nama"><br>
    Alamat                : <input type="text" name="alamat"><br>
    Tempat lahir          : <input type="text" name="tel"><br>
    tanggal lahir         : <input type="date" name="tal"><br>
    Asal sekolah          : <input type="text" name="AS"><br>
    Jenis Kelamin         : <br>
    <input type="radio" name="jk" value="laki laki">Laki laki<br>
    <input type="radio" name="jk" value="perempuan">Perempuan<br>
    Jurusan               : <select name="jr">
                            <option value="RPL">RPL</option>
                            <option value="TKR">TKR</option>
                            <option value="TSM">TSM</option>
                            </select><br>
    Nama Ayah             : <input type="text" name="na"> <br>
    Pekerjaan ayah        : <input type="text" name="pa"><br>
    Nama ibu              : <input type="text" name="ni"><br>
    Pekerjaan ibu         : <input type="text" name="pi"><br>
    Hobby                 : <br>
    <input type="checkbox" name="G" value="Gaming"> Gaming<br>
    <input type="checkbox" name="NGA" value="Ngarit"> Ngarit<br>
    <input type="checkbox" name="NGU" value="Ngusep"> Ngusep<br>
    <input type="checkbox" name="NGAB" value="Ngabajak"> Ngabajak<br>
    <input type="checkbox" name="DLL" value="DLL"> DLL<br>
    Tinggi badan  : <input type="number" name="tbd"><br>
    <input type="submit" name="submit" value="DAFTAR SLUR">
    </pre></FORM>
</body>
</html>