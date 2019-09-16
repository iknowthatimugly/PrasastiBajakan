<?php
if(isset($_POST['submit']))
    $nama = $_POST['nama'];
    $jalan = $_POST['jalan'];
    $kec = $_POST['kec'];
    $kota = $_POST['Kota'];
    $pro = $_POST['pro'];
    $pos = $_POST['pos'];
    $nabar = $_POST['nabar'];
    $habar = $_POST['habar'];
    $qty = $_POST['qty'];
    $desk = $_POST['desk'];
    $tgl = $_POST['tgl'];
    echo "<fieldset>";
    echo "<table>";
    if ($qty < 0) {
        echo "PESEN YANG BENER GOBLOK!";
    }
    elseif($qty <= 5){
        echo "Nama : ".$nama."<br>";
    echo "Alamat lengkap :<br>";
    echo "Jalan : ".$jalan."&nbsp&nbsp&nbsp&nbsp"; echo "Kecamatan : ".$kec."&nbsp&nbsp&nbsp&nbsp"; echo "Kota : ".$kota."&nbsp&nbsp&nbsp&nbsp"; echo "Provinsi : ".$pro."&nbsp&nbsp&nbsp&nbsp"; echo "Kode pos : ".$pos."<br>";
    echo "Nama barang : ".$nabar."<br>";
    echo "Harga barang : ".$habar."<br>";
    echo "Jumlah barang : ".$qty."<br>";
    echo "Catatan : ".$desk."<br>";
    echo "Tanggal pembelian : ".$tgl."<br>";
        $jmlh2 = ($qty*$habar);
        echo "Total harga : ".$jmlh2;
    }
    elseif ($qty > 5 && $qty <= 10) {
        $jmlh = ($qty*$habar);
        $diskon = ($jmlh*0.1);
        $total = $jmlh-$diskon;
        echo "Nama : ".$nama."<br>";
    echo "Alamat lengkap :<br>";
    echo "Jalan : ".$jalan."&nbsp&nbsp&nbsp&nbsp"; echo "Kecamatan : ".$kec."&nbsp&nbsp&nbsp&nbsp"; echo "Kota : ".$kota."&nbsp&nbsp&nbsp&nbsp"; echo "Provinsi : ".$pro."&nbsp&nbsp&nbsp&nbsp"; echo "Kode pos : ".$pos."<br>";
    echo "Nama barang : ".$nabar."<br>";
    echo "Harga barang : ".$habar."<br>";
    echo "Jumlah barang : ".$qty."<br>";
    echo "Catatan : ".$desk."<br>";
    echo "Tanggal pembelian : ".$tgl."<br>";
        echo "Potongan diskon : 10%/".$diskon."<br>";
        echo "Total harga : ".$total."<br>";
    }
    elseif ($qty > 10) {
        $jmlh1 = ($qty*$habar);
        $diskon1 = ($jmlh1*0.2);
        $total1 = $jmlh1-$diskon1;
        echo "Nama : ".$nama."<br>";
    echo "Alamat lengkap :<br>";
    echo "Jalan : ".$jalan."&nbsp&nbsp&nbsp&nbsp"; echo "Kecamatan : ".$kec."&nbsp&nbsp&nbsp&nbsp"; echo "Kota : ".$kota."&nbsp&nbsp&nbsp&nbsp"; echo "Provinsi : ".$pro."&nbsp&nbsp&nbsp&nbsp"; echo "Kode pos : ".$pos."<br>";
    echo "Nama barang : ".$nabar."<br>";
    echo "Harga barang : ".$habar."<br>";
    echo "Jumlah barang : ".$qty."<br>";
    echo "Catatan : ".$desk."<br>";
    echo "Tanggal pembelian : ".$tgl."<br>";
        echo "Potongan diskon : 20%/".$diskon1."<br>";
        echo "Total harga : ".$total1."<br>";
    }
    echo "</fieldset>";
    echo "</table>";
?>