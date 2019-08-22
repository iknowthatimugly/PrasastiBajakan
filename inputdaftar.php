<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regitrasi</title>
</head>
<body>
    <FORM ACTION="porsesdaftar.php" NAME="SUBMIT" METHOD="POST">
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    Jenis kelamin : 
    <input type="radio" name="jk" value="Laki laki" >Laki Laki
    <input type="radio" name="jk" value="perempuan" >Perempuan
    <br>
    Agama : <select name="agama">
    <option value="islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="katholik">Katholik</option>
    <option value="buddha">Buddha</option>
    <option value="hindu">Hindu</option>
    <option value="kafir">Kafir</option>
    <option value="wahyudi">Wahyudi</option>
    <option value="Atheist">Atheist</option>
    </select>
    <br>
    Alamat :<br><textarea name="alamat" cols="40"></textarea>
    <br>Password :<input type="password" name="pass">
    <br><input type="submit" name="submit">
</body>
</html>