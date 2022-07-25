<html>
	<head>
		<title>Dasbor</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	<?php include('header.php'); ?>
	<div class="container">
			<div class="judul">
			<h1>Area Mahasiswa</h1><hr/>
			</div>
			<div class="artikel">
				<center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>
				<hr/>
				<a href="<?php echo site_url('masuk/logout'); ?>" class="btn btn-primary btn-lg btn-block">Keluar</a>
			</div>
	</div>	
	<?php include('footer.php'); ?>	
	</body>
</html>