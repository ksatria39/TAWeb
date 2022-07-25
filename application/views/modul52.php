<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Konversi Angka-Huruf</title>
		<?php include('header_script.php'); ?>
	</head>
	<body>
	
	<?php include('header.php'); ?>
	
	<div class="container">
	<div class="judul"><h1>Konversi Angka-Huruf</h1><hr/></div>
	<div class="artikel">
		<?php 
	if(isset($_POST['proses'])){
	$angka = $_POST['angka'];
	function huruf($angka){
		$ar = array("","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas");
		if ($angka < 12){
			return $ar[$angka];
		} elseif ($angka < 20){
			return huruf($angka - 10)." belas";
		} elseif ($angka < 100){
			return huruf($angka / 10)." puluh ".huruf($angka % 10);
		} elseif ($angka <200){
			return "seratus ".huruf($angka - 100);
		} elseif ($angka<1000){
			return huruf($angka/100)." ratus ".huruf($angka%100);
		}
	}
	}
	?>
	<form action="<?php echo current_url() ?>" method="POST">
		<p>
			<label>Angka : </label>
			<input type="text" name="angka" placeholder="Masukkan angka" required pattern="[0-9]{1,3}" title="Maksimal berisi tiga angka">
		</p>
		<p>
			<input type="submit" name="proses" value="Proses">
		</p>
		<p>
			<label>Hasil : </label>
			<?php if(isset($_POST['proses'])){ ?>
			<input type="text" value="<?php echo huruf($angka); ?>">
			<?php }else{ ?>
			<input type="text" value="Masukkan angka dulu.">
			<?php } ?>	
		</p>
	</form>
	</div>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>