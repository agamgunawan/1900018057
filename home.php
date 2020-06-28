<!DOCTYPE html>
<html>
<head>
	<title> Belajar Membuat Form </title>
</head>
<body>
	<?php
		$nama = $alamat = $telp = $jenis_kelamin = $agama = $komentar;
		if ($_SERVER[REQUEST_METHOD] == "GET" && isset(&_GET["nama"]) && isset(&_GET["alamat"]) && isset(&_GET["telp"]) && isset(&_GET["jenis_kelamin"]) && isset(&_GET["agama"]) && isset(&_GET["komentar"])) {
			$nama = $_GET["nama"];
			$alamat = $_GET["alamat"];
			$telp = $_GET["telp"];
			$jenis_kelamin = $_GET["jenis_kelamin"];
			$agama = $_GET["agama"];
			$komentar = $_GET["komentar"];
		}
	?>

	<table border="2px" style="text-align: left; height: 400px" width="700px" align="center" cellpadding="40px">
	<tr>
		<td>
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Nama : <input type="text" name="nama"/>
			<br>
			<br>
			Alamat : <input type="text" name="alamat" />
			<br>
			<br>
			Telp : <input type="text" name="telp" />
			<br>
			<br>
			Jenis Kelamin : 
			<input type="radio" name="jenis_kelamin" value="laki-laki" checked />
			Laki-Laki
			<input type="radio" name="jenis_kelamin" value="perempuan" />
			Perempuan
			<br>
			<br>
			Agama
			<select name="agama">
			<option value="Islam">Islam</option>
			<option>Kriten Protestan</option>
			<option>Kriten Katolik</option>
			<option>Hindu</option>
			<option>Budha</option>
			<option>Kong hu cu</option>
			</select>
			<br>
			<br>
			Prestassi Yang Pernah Di Raih : 
			<br>
			<textarea name="komentar" rows="5" cols="20">
			</textarea>
			<br>
			<input type="submit" value="Simpan">
			<input type="reset" value="Batal">
			</form>
		</td>
	</tr>
	</table>

	<?php
		if(!empty($nama) && (!empty($alamat) && (!empty($telp) && (!empty($jenis_kelamin) && (!empty($agama) ){
			echo <h2> Selamat Datang </h2>
			echo $nama. "<br>" . $alamat . "<br>" . $telp . "<br>" . $jenis_kelamin . "<br>" . $agama . "<br>" . $komentar;
		}
	?>

</body>
</html>