<?php
	if (isset($_POST['simpan'])) {
		$nope = $_POST['np'];
		echo "No.Pendaftaran &nbsp: $nope"."<br>";
		$nisn = $_POST['nisn'];
		echo "NISN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $nisn"."<br>";
		$nama = $_POST['nma'];
		echo "Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $nama"."<br>";
		$alamat = $_POST['almat'];
		echo "Alamat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $alamat"."<br>";
		$jenkel = $_POST['jk'];
		echo "Jenis Kelamin &nbsp&nbsp&nbsp&nbsp: $jenkel"."<br>";
		$telah = $_POST['tela'];
		echo "Tempat Lahir &nbsp&nbsp&nbsp&nbsp&nbsp: $telah"."<br>";
		$talah = $_POST['tala'];
		echo "Tanggal Lahir &nbsp&nbsp&nbsp&nbsp: $talah"."<br>";
		$beba = $_POST['bb'];
		echo "Berat Badan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $beba"."<br>";
		$tiba = $_POST['tb'];
		echo "Tinggi Badan &nbsp&nbsp&nbsp&nbsp&nbsp: $tiba"."<br>";
		$agama = $_POST['agma'];
		echo "Agama  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $agama"."<br>";
		$asek = $_POST['asek'];
		echo "Asal Sekolah  &nbsp&nbsp&nbsp&nbsp&nbsp: $asek"."<br>";
		$jurusan = $_POST['jrusan'];
		echo "Jurusan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $jurusan"."<br>";
		echo "Hobby &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: "."<br>";
		if (isset($_POST['hb1'])) {
			echo "- ".$_POST['hb1']."<br>";
		}
		if (isset($_POST['hb2'])) {
			echo "- ".$_POST['hb2']."<br>";
		}
		if (isset($_POST['hb3'])) {
			echo "- ".$_POST['hb3']."<br>";
		}
		if (isset($_POST['hb4'])) {
			echo "- ".$_POST['hb4']."<br>";
		}
		$namyah = $_POST['nayah'];
		echo "Nama Ayah &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $namyah"."<br>";
		$pekayah = $_POST['pekayh'];	
		echo "Pekerjaan Ayah : $pekayah"."<br>";
		$namibu = $_POST['nabu'];
		echo "Nama Ibu &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $namibu"."<br>";
		$pekibu = $_POST['pekibu'];	
		echo "Pekerjaan Ibu &nbsp&nbsp&nbsp: $pekibu"."<br>";
	}
?>