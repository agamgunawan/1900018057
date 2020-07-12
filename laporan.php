<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pasien Rawat Inap - Rumah Sakit Kasih Bagas Waras</title>
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
			<h2>Laporan Data Pasien Rawat Inap</h2>
		</div>

		<table>

			<tr>
				<th>No. Pasien</th>
				<th>Nama Pasien</th>
				<th>Tanggal Lahir</th>
				<th>Umur</th>
				<th>Jenis Kelamin</th>
				<th>Pelayanan</th>
				<th>Diagnosa</th>
				<th>Dokter</th>
			</tr>

			<?php

				$OpenLaporan 	= fopen("laporan.txt", "r");

				$i 				= 0;

				$laporan 	= fgets($OpenLaporan);

				if (empty($laporan)) {
					echo "<tr>";
					echo "<td colspan='8' class='kosong'> <b>! DATA PENDAFTARAN MAHASISWA BARU MASIH KOSONG !</b> </td>";
					echo "</tr>";
				}else{
											
					$arrayLaporan	= explode("+", $laporan);

					$banyaknyaArray	= substr_count($laporan, "+");


					while ( $i < $banyaknyaArray) {

							echo "<tr>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<td>".$arrayLaporan[$i++]."</td>";
							echo "<br />";
							echo "</tr>";

					}

				}

				fclose($OpenLaporan);

			?>

		</table>

	</div>

	<footer>
		<h3>&copy; Rumah Sakit Kasih Bagas Waras. Website By Agam Gunawan Setiaji</h3>
	</footer>

</body>
</html>