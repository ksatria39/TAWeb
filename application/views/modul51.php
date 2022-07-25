<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kalkulator</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Kalkulator</h1><hr/></div>
	<div class="artikel">
	<?php 
		if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) { 
			case "tambah": 
				$hasil = $bil1 + $bil2;
			break;
			case "kurang":  
				$hasil = $bil1 - $bil2;
			break;
			case "kali": 
				$hasil = $bil1 * $bil2;
			break;
			case "bagi": 
				$hasil = $bil1 / $bil2;
			break;			
		}
	}
	?>
		<form method="post" action="<?php echo current_url() ?>">	
			<p>
				<label>Bilangan 1 : </label>
				<input type="text" name="bil1" required pattern="[0-9]{1,}">
			</p> 
			<p>
				<label>Bilangan 2 : </label>
				<input type="text" name="bil2" required pattern="[0-9]{1,}">
			</p> 
	    	<p>
				<label>Hitung : </label>
				<select name="operasi">
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">x</option>
					<option value="bagi">:</option>
				</select> 
			</p>
			<p>
				<label>Hasil : </label>
				<?php if(isset($_POST['hitung'])){ ?>
				<input type="text" value="<?php echo $hasil; ?>">
				<?php }else{ ?>
				<input type="text" value="0">
				<?php } ?>	
			</p>
				<p><input type="submit" name="hitung" value="Hitung"></p> 								
			</form>		
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>