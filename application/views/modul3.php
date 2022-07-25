<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modul 3</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Modul 3</h1><hr/></div>
	<div class="artikel">
		<form action="<?php echo site_url('modul3/modul4'); ?>" method="post">
		<fieldset>
			<legend><h1>Pendaftaran</h1></legend>
			<p>
				<label>Nama : </label>
				<input type="text" name="nama" placeholder="Masukkan nama lengkap" required class="form-control">
			</p>
			<p>
				<label>Username : </label>
				<input type="text" name="username" placeholder="Masukkan username" required pattern="[A-Za-z0-9]{3,}" title="Harus berisi minimal 3 huruf dan/atau angka" required class="form-control">
			</p>
			<p>
				<label>Password : </label>
				<input type="password" name="password" placeholder="Masukkan password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung angka, huruf besar, dan huruf kecil." required class="form-control">
			</p>
			<p>
				<label>Jenis Kelamin : </label><br/>
				<input type="radio" name="jk" value="Laki-laki" class="form-check-input">Laki-laki
				<input type="radio" name="jk" value="Perempuan" class="form-check-input">Perempuan
			</p>
			<p>
				<label>Tanggal Lahir : </label>
				<input type="date" name="ttl" required class="form-control">
			</p>
			<p>
				<label>Minat Logo : </label>
				<select name="minat" class="form-control">
					<option value="Ambigram">Ambigram</option>
					<option value="Futuristik">Futuristik</option>
				</select>
			</P>
			<p>
				<label>Email : </label>
				<input type="email" name="email" placeholder="Masukkan email" required class="form-control">
			</p>
			<p>
				<p>Alamat :</p>
				<textarea name="alamat" cols="50" rows="3" placeholder="Masukkan alamat" required class="form-control"></textarea>
			</p>
			<p>
				<input type="submit" name="submit" value="Daftar" required class="btn btn" style="background: #1da4ff;">
			</p>
		</fieldset>
		</form>
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>