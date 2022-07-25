<nav class="navbar navbar-expand-lg" style="background-color: #1da4ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">UNIROW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('tentang'); ?>">Tentang</a>
        </li>
        <li class="nav-item dropdown">
			<div class="dropdown">
			<button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #1da4ff;">Akademik</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php
            if(null != $this->session->userdata('is_login'))
              {
                
              }
            else
              {
                echo "<a class='dropdown-item' href='",site_url('masuk'),"'>Masuk</a>";
                echo "<a class='dropdown-item' href='",site_url('daftar'),"'>Pendaftaran</a>";
              }
        ?>
				<a class="dropdown-item" href="<?php echo site_url('akademik/prodi'); ?>">Program Studi</a>
				<a class="dropdown-item" href="<?php echo site_url('akademik/kalender'); ?>">Kalender Akademik</a>
			</div>
			</div>
		</li>
        <li class="nav-item dropdown">
			<div class="dropdown">
			<button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #1da4ff;">Tugas</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<li><a class="dropdown-item" href="<?php echo site_url('modul1'); ?>">Modul 1</a></li>
				<li><a class="dropdown-item" href="<?php echo site_url('modul3'); ?>">Modul 3</a></li>
				<li><a class="dropdown-item" href="<?php echo site_url('modul5'); ?>">Modul 5</a></li>
			</ul>
			</div>
		</li>
    <li class="nav-item">
      <?php
        if(null != $this->session->userdata('is_login'))
          {
            echo "<a class='nav-link' href='",site_url('masuk/logout'),"'>Keluar</a>";
          }
        else
          {
                
          }
      ?>
    </li>
      </ul>
    </div>
  </div>
</nav>