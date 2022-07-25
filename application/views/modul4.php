<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modul 4</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Modul 4</h1><hr/></div>
	<div class="artikel">
		<?php
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$jk = $_POST['jk'];
			$ttl = $_POST['ttl'];
			$minat = $_POST['minat'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
		?>
			<table border="0">
				<tr><th colspan="3"><h1>Data Pendaftar</h1><th></tr>
				<tr><td>Nama</td><td>:</td><td><?php echo $nama; ?></td></tr>
				<tr><td>Username</td><td>:</td><td><?php echo $username; ?></td></tr>
				<tr><td>Password</td><td>:</td><td><?php echo $password; ?></td></tr>
				<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
				<tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $ttl; ?></td></tr>
				<tr><td>Minat Logo</td><td>:</td><td><?php echo $minat; ?></td></tr>
				<tr><td>Email</td><td>:</td><td><?php echo $email; ?></td></tr>
				<tr><td>Alamat</td><td>:</td><td><?php echo $alamat; ?></td></tr>
				<tr><td>Waktu Pendaftaran</td><td>:</td><td><?php echo date('l, d m Y'); ?></td></tr>
			</table></td></tr>
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>