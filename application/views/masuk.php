<html>
	<head>
		<title>Masuk</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	<?php include('header.php'); ?>
	<div class="container">
			<div class="judul">
				<h1>Masuk</h1><hr/>
			</div>
			<div class="artikel">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo site_url('masuk/proses'); ?>">
					<div class="form-group">
						<label for="npm">Nama Pengguna</label>
						<input type="text" class="form-control" name="npm" id="npm" placeholder="Masukkan Nama Pengguna">
					</div>
					<br/>
					<div class="form-group">
						<label for="pw">Kata Sandi</label>
						<input type="password" class="form-control" name="pw" id="pw" placeholder="Masukkan Kata Sandi">
					</div>
					<br/>
					<button type="submit" class="btn btn-primary">Masuk</button>
				</form>
			</div>
	</div>	
	<?php include('footer.php'); ?>	
	</body>
</html>