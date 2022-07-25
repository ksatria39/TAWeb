<html>
	<head>
		<title>Pendaftaran Mahasiswa Baru</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	<?php include('header.php'); ?>
	<div class="container">
			<div class="judul">
				<h1>Pendaftaran Mahasiswa Baru</h1><hr/>
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
				<form method="post" action="<?php echo site_url('daftar/proses'); ?>">
					<div class="form-group">
						<label for="nisn">NISN</label>
						<input type="text" class="form-control" name="nisn" id="nisn" placeholder="Masukkan NISN">
					</div>
					<br/>
                    <div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
					</div>
					<br/>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
					</div>
					<br/>
                    <div class="form-group">
						<label for="tmp_lahir">Tempat Lahir</label>
						<input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Masukkan Tempat Lahir">
					</div>
					<br/>
                    <div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
					</div>
					<br/>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
				        <select name="jk" class="form-control">
					        <option value="L">Laki-laki</option>
					        <option value="P">Perempuan</option>
				        </select>
					</div>
					<br/>
                    <div class="form-group">
                        <label for="prodi">Program Studi Pilihan</label>
				        <select name="prodi" class="form-control">
					        <option value="44201">Matematika</option>
					        <option value="45201">Fisika</option>
					        <option value="46201">Biologi</option>
					        <option value="47201">Kimia</option>
				        </select>
					</div>
					<br/>
                    <div class="form-group">
						<label for="pw">Kata Sandi</label>
						<input type="password" class="form-control" name="pw" id="pw" placeholder="Masukkan Kata Sandi">
					</div>
					<br/>
					<button type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>
	</div>	
	<?php include('footer.php'); ?>	
	</body>
</html>