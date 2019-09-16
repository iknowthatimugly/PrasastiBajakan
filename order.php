<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order By Ngutang</title>
</head>
<body>
<form method="post" action="ngorder.php" name="submit">
    <fieldset>
    <table>
    <tr>
    <td>
    Nama : <input type="text" name="nama" required>
    </td>
    </tr>
    <tr>
    <td>
    Alamat :
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" name="jalan" placeholder="Masukkan nama jalan">
    &nbsp
    <input type="text" name="kec" placeholder="Masukkan nama Kecamatan">
    &nbsp
    <input type="text" name="Kota" placeholder="Masukkan nama Kota">
    &nbsp
    <input type="text" name="pro" placeholder="Masukkan nama Provinsi">
    &nbsp
    <input type="text" name="pos" placeholder="Masukkan kode pos">
    </td>
    </tr>
    <tr>
    <td>
    Nama barang : <input type="text" name="nabar" required>
    </td>
    </tr>
    <tr>
    <td>
    Harga barang : <input type="number" min="1" name="habar" required>
    </td>
    </tr>
    <tr>
    <td>
    Jumlah Barang : <input type="number" min="1" name="qty" required>
    </td>
    </tr>
    <tr>
    <td>
    Deskripsi : <textarea name="desk" cols="30" rows="5" required>
    </textarea>
    </td>
    </tr>
    <tr>
    <td>
    Tanggal Pembelian : <input type="date" name="tgl">
    </td>
    </tr>
    <tr>
    <td>
    <input type="submit" name="submit">
    </td>
    </tr>
    </table>
    </fieldset>
</body>
</html>