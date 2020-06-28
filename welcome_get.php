<!DOCTYPE html>
<html>
<head>
<title> Belajar Membuat Form</title>
</head>
<body>
	<table border="2px" style="text-align: left; height: 400px" width="700px" align="center" cellpadding="40px">
	<tr>
		<td>
			
			Selamat Datang <?php echo 
			$_GET["nama"]; ?>
			<br>

			Alamat Anda :  <?php echo 
			$_GET["alamat"]; ?>
			<br>

			NO Telp Anda :  <?php echo 
			$_GET["telp"]; ?>
			<br>

			Jenis Kelamin  Anda :  <?php echo 
			$_GET["jenis_kelamin"]; ?>
			<br>

			Agama Anda :  <?php echo 
			$_GET["agama"]; ?>
			<br>

			Prestassi Yang Pernah Di Raih :  <?php echo 
			$_GET["komentar"]; ?>
			<br>
			
		</td>
	</tr>
	</table>
</body>
</html>

