<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>
<body>
		<fieldset>	
			<legend align="center"><h3>Formulir Pendaftaran Peserta Didik Baru</h3></legend>
			<form action="formulirprs.php" method="POST" name="Input">
				<table align="center" border="0" width="100%">
					<tr>
						<td colspan="2"><h4>KETERANGAN CALON PESERTA DIDIK</h4></td></tr>
					<tr>
						<td>No.Pendaftaran</td>
						<td>: <input type="number" name="np"></td>
					</tr>
					<tr>
						<td>NISN</td>
						<td>: <input type="text" name="nisn"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>: <input type="text" name="nma"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: <input type="text area" name="almat"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>: <input type="radio" name="jk" value="Perempuan">Perempuan
							<input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>: <input type="text" name="tela"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>: <input type="date" name="tala"></td>
					</tr>
					<tr>
						<td>Berat Badan</td>
						<td>: <input type="number" name="bb"></td>
					</tr>
					<tr>
						<td>Tinggi Badan</td>
						<td>: <input type="number" name="tb"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>: <select name="agma">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Katholik">Katholik</option>
							<option value="Protestan">Protestan</option>
							<option value="Atheis">Atheis</option>
						</select></td>
					</tr>
					<tr>
						<td>Asal Sekolah</td>
						<td>: <input type="text" name="asek"></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>: <select name="jrusan">
							<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
							<option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
							<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
						</select></td>
					</tr>
					<tr>
						<td>Hobby</td>
						<td>: <input type="checkbox" name="hb1" value="Makan">MAIN DOTA 2
						<input type="checkbox" name="hb2" value="Tidur">Tidur
						<input type="checkbox" name="hb3" value="Nafas">Nafas
						<input type="checkbox" name="hb4" value="Ngedip">Ngedip</td>
					</tr>
					<tr>
						<td colspan="2"><h4>KETERANGAN ORANG TUA</h4></td></tr>
					<tr>
						<td>Nama Ayah</td>
						<td>: <input type="text" name="nayah"></td>
					</tr>
					<tr>
						<td>Pekerjaan Ayah</td>
						<td>: <input type="text" name="pekayh"></td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>: <input type="text" name="nabu"></td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>: <input type="text" name="pekibu"></td>
					</tr>
					<tr>
						<td></td>
						<td>&nbsp&nbsp<input type="submit" name="simpan" value="Daftar">
									  <input type="submit" name="resets" value="Reset"></td>
					</tr>
				</table>
				<button>
					<a href="Penggajian.php">Penggajian</a>
					</button>
					<button>
					<a href="Kwitansi.php">Hal Kwitansi</a>
					</button>
			</form>
		</fieldset>
</body>
</html>