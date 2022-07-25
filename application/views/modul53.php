<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tabel Perulangan</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	<script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Tabel Perulangan</h1><hr/></div>
	<div class="artikel">
		<table border="1">
			<?php
				for ($i=1; $i<=5; $i++){
					echo "<tr>";
					for($j=1; $j<=5; $j++){
						echo "<td>$i.$j</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>