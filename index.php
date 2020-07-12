<!DOCTYPE html>
<html>
<head>
	<title>Form Data Pasien Rawat Inap - Rumah Sakit Kasih Bagas Waras</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>

	<header>
		<img src="rs-bagas-waras.png" alt="Gambar Header Rumah Sakit Bagas Waras">
	</header>

	<div class="menu">
		<ul>
			<a href="index.php">
				<li>ISI FORMULIR</li>
			</a>
			<a href="laporan.php">
				<li>LAPORAN DATA PASIEN</li>
			</a>
		</ul>
	</div>

	<div class="konten">
		
		<div class="judul">
			<h2>ISI FORM DI BAWAH INI DENGAN BENAR</h2>
		</div>

		<?php 

			if (isset($_POST['submit'])) {
				
				// jika Nomor pasien tidak di isi, maka jalankan program ini
				if (empty($_POST['no_pasien'])) {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Nomor Pasien, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Nama pasien tidak di isi, maka jalankan program ini
				else if (empty($_POST['nama_pasien'])) {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Nama Pasien, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Tanggal Lahir tidak di isi, maka jalankan program ini
				else if (empty($_POST['tanggal_lahir'])) {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Tanggal Lahir, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Umur Pasien tidak di isi, maka jalankan program ini
				else if (empty($_POST['umur_pasien'])) {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Umur Pasien, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Jenis Kelamin tidak di isi, maka jalankan program ini
				else if ($_POST['jenis_kelamin'] == "- Pilih Jenis Kelamin -") {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Jenis Kelamin, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Jenis Pelayanan tidak di isi, maka jalankan program ini
				else if ($_POST['jenis_pelayanan'] == "- Pilih Jenis Pelayanan -") {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Jenis Pelayanan, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Diagnosa Penyakit Pasien tidak di isi, maka jalankan program ini
				else if (empty($_POST['diagnosa_penyakit_pasien'])) {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Diagnosa Penyakit Pasien, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}
				
				// jika Dokter tidak di isi, maka jalankan program ini
				else if ($_POST['nama_dokter'] == "- Pilih Dokter -") {
					echo "<script type='text/javascript'>alert('Anda belum mengisi Dokter, silahkan di isi terlebih dahulu!'); window.history.back();</script>";
					exit();
				}


				$no_pasien					= $_POST['no_pasien'];
				$nama_pasien				= $_POST['nama_pasien'];
				$tanggal_lahir				= $_POST['tanggal_lahir'];
				$umur_pasien				= $_POST['umur_pasien'];
				$jenis_kelamin				= $_POST['jenis_kelamin'];
				$jenis_pelayanan			= $_POST['jenis_pelayanan'];
				$diagnosa_penyakit_pasien	= $_POST['diagnosa_penyakit_pasien'];
				$nama_dokter				= $_POST['nama_dokter'];

				
				$fileLaporan	= "laporan.txt";

				
				$fl 	= fopen($fileLaporan, "a+");

				
				fwrite($fl,$no_pasien.'+'.$nama_pasien.'+'.$tanggal_lahir.'+'.$umur_pasien.'+'.$jenis_kelamin.'+'.$jenis_pelayanan.'+'.$diagnosa_penyakit_pasien.'+'.$nama_dokter.'+');

				
				fclose($fl);

				echo "<script type='text/javascript'>alert('Anda berhasil melakukan inputan data pasien rawat inap atas Nama ".$nama_pasien."'); window.location = 'laporan.php';</script>";


			}

		?>

		<form method="POST" action="">

			<label for="no_pasien">NO. Pasien</label>
			<input type="text" name="no_pasien" id="no_pasien" placeholder="Masukkan NO. Pasien">

			<label for="nama_pasien">Nama Pasien</label>
			<input type="text" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Pasien">

			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">

			<label for="umur_pasien">Umur Pasien</label>
			<input type="text" name="umur_pasien" id="umur_pasien" placeholder="Masukkan Umur Pasien">

			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="- Pilih Jenis Kelamin -">- Pilih Jenis Kelamin -</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>

			<label for="jenis_pelayanan">Jenis Pelayanan</label>
			<select name="jenis_pelayanan" id="jenis_pelayanan">
				<option value="- Pilih Jenis Pelayanan -">- Pilih Jenis Pelayanan -</option>
				<option value="BPJS">BPJS</option>
				<option value="Umum">Umum</option>
			</select>

			<label for="diagnosa_penyakit_pasien">Diagnosa Penyakit Pasien</label>
			<input type="text" name="diagnosa_penyakit_pasien" id="diagnosa_penyakit_pasien" placeholder="Masukkan Diagnosa Penyakit Pasien">

			<label for="nama_dokter">Nama Dokter</label>
			<select name="nama_dokter" id="nama_dokter">
				<option value="- Pilih Dokter -">- Pilih Dokter -</option>
				<option value="dr. Andika">dr. Andika</option>
				<option value="dr. Yuni Puspita">dr. Yuni Puspita</option>
				<option value="dr. Rini Melinda">dr. Rini Melinda</option>
				<option value="dr. Agam .S">dr. Agam .S</option>
			</select>

			<button type="submit" name="submit">SELESAI</button>
			<button type="reset" name="reset">BATAL</button>
			
		</form>

	</div>

	<footer>
		<h3>&copy; Rumah Sakit Kasih Bagas Waras. Website By Agam Gunawan Setiaji</h3>
	</footer>

</body>
</html>