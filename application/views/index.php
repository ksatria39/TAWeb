<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('header_script.php'); ?>
 <title>Beranda</title>
</head>

<body>

 <?php include('header.php'); ?>

 <div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block w-100" src="<?php echo base_url('img/img2.jpg'); ?>" alt="First slide">
	 <div class="carousel-caption d-none d-md-block" style="background-color: #1da4ff; color: #000000;">
        <h5>Berdisiplin</h5>
        <p>Universitas PGRI Ronggolawe melakukan kegiatan perkuliahan yang disiplin dan berkualitas.</p>
      </div>
    </div>
    <div class="carousel-item">
     <img class="d-block w-100" src="<?php echo base_url('img/img1.jpg'); ?>" alt="Second slide">
	 <div class="carousel-caption d-none d-md-block" style="background-color: #1da4ff; color: #000000;">
        <h5>Lulusan Berkualitas</h5>
        <p>Universitas PGRI Ronggolawe selalu berusaha mencetak lulusan yang berkualitas bagi bangsa dan negara.</p>
      </div>
    </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
   </button>
  </div>
 </div>
 
 <br/>
 
 <h4><strong>Berita Terbaru</strong></h4><hr/>

 <div class="container">


  <div class="card" style="width: 18rem; float: left; margin: 5px;">
   <img src="<?php echo base_url('img/img4.jpg'); ?>" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title"><a href="<?php echo site_url('post/post1'); ?>">UNIROW Meluncurkan Smart Classroom</a></h5>
    <p class="card-text">Universitas PGRI Ronggolawe (Unirow) Tuban menggelar kegiatan launching smart...</p>
    <a href="<?php echo site_url('post/post1'); ?>" class="btn btn-primary">Baca selengkapnya</a>
   </div>
  </div>

  <div class="card" style="width: 18rem; float: left; margin: 5px;">
   <img src="<?php echo base_url('img/img5.jpg'); ?>" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title"><a href="<?php echo site_url('post/post2'); ?>">583 Mahasiswa UNIROW Terima Beasiswa</a></h5>
    <p class="card-text">Sebanyak 583 Mahasiswa Universitas PGRI Ronggolawe (Unirow) Tuban dari berbagai...</p>
    <a href="<?php echo site_url('post/post2'); ?>" class="btn btn-primary">Baca selengkapnya</a>
   </div>
  </div>

  <div class="card" style="width: 18rem; float: left; margin: 5px;">
   <img src="<?php echo base_url('img/img6.jpg'); ?>" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title"><a href="<?php echo site_url('post/post3'); ?>">UNIROW Gelar Sosialisasi DIPA</a></h5>
    <p class="card-text">Universitas PGRI Ronggolawe (Unirow) Tuban menggelar Sosialisasi DIPA untuk men...</p>
    <a href="<?php echo site_url('post/post3'); ?>" class="btn btn-primary">Baca selengkapnya</a>
   </div>
  </div>

 </div>

 <?php include('footer.php'); ?>

</body>

</html>