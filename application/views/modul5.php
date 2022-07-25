<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modul 5</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Modul 5</h1><hr/></div>
	<div class="artikel">
		<table class="table table-striped">
		<thead class="thead-light">
			<tr><th>No</th><th>Nama Program</th></tr>
		</thead>
		<tbody>
			<tr><td>1</td><td><a href="<?php echo site_url('modul5/modul51'); ?>">Kalkulator</a></td></tr>
			<tr><td>2</td><td><a href="<?php echo site_url('modul5/modul52'); ?>">Konversi Angka-Huruf</a></td></tr>
			<tr><td>3</td><td><a href="<?php echo site_url('modul5/modul53'); ?>">Tabel Perulangan</a></td></tr>
		</tbody>
		</table>
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>