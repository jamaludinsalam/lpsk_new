<nav class="navbar navbar-expand-lg navbar-light main-nav">
	<a class="navbar-brand logo" href="#"><img src="<?= base_url('assets/resources/css/img/logo.png') ?>" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<hr>
		<ul class="navbar-nav mr-auto ">
			<li class="nav-item {menuhome}">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {menuprofil} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="profil-sekilaslpsk.html">Sekilas LPSK</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item active" href="profil-strukturorganisasi.html">Struktur Organisasi</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="profil-pejabatstruktural.html">Pejabat Struktural</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="profil-roadmap.html">Road Map dan Rencana Strategis</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="profil-profilpimpinan.html">Profil Pimpinan</a> 
				</div>
			</li>
			<li class="nav-item {menupublikasi} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Publikasi
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {publikasibuku}" href="<?php echo base_url('publikasi/buku') ?>">Buku</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasibuletin}" href="<?php echo base_url('publikasi/buletin') ?>">Buletin</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasijurnal}" href="<?php echo base_url('publikasi/jurnal') ?>">Jurnal</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasiartikel}" href="<?php echo base_url('publikasi/artikel') ?>">Artikel</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasiinformasi}" href="<?php echo base_url('publikasi/informasi') ?>">Informasi</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasikegiatan}" href="<?php echo base_url('publikasi/kegiatan') ?>">Kegiatan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasigallery}" href="<?php echo base_url('publikasi/gallery') ?>">Gallery Foto</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasivideo}" href="<?php echo base_url('publikasi/video') ?>">Video</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {publikasilaporan}" href="<?php echo base_url('publikasi/laporan') ?>">Laporan</a> 
				</div>
			</li>
			<li class="nav-item {menuperaturan} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Peraturan
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {uuterkait}" href="<?php echo base_url('peraturan/uuterkait') ?>">Undang Undang Terkait</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pemerintah}" href="<?php echo base_url('peraturan/pemerintah') ?>">Peraturan Pemerintah</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {presiden} " href="<?php echo base_url('peraturan/presiden') ?>">Peraturan Presiden</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {perma}" href="<?php echo base_url('peraturan/perma') ?>">Perma</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {lain}" href="<?php echo base_url('peraturan/lain') ?>">Peraturan Lain</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {lpsk}" href="<?php echo base_url('peraturan/lpsk') ?>">Peraturan LPSK</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {ketualpsk}" href="<?php echo base_url('peraturan/ketualpsk') ?>">Peraturan dan Keputusan Ketua LPSK</a> 
					<div class="dropdown-divider "></div>
					<a class="dropdown-item {sekjenlpsk}" href="<?php echo base_url('peraturan/sekjenlpsk') ?>">Peraturan dan Keputusan Sekjen LPSK</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {kodeetik}" href="<?php echo base_url('peraturan/kodeetik') ?>">Kode Etik</a> 
				</div>
			</li>
			<li class="nav-item {menuberita} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Berita
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {persrelease}" href="<?php echo base_url('berita/persrelease') ?>">Pers Release</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {wartahukum}" href="<?php echo base_url('berita/wartahukum') ?>">Warta Hukum</a> 
				</div>
			</li>
			<li class="nav-item {menuinfopublik} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Informasi Publik
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="informasi-informasipublik.html">Tentang Informasi Publik</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-pedoman.html">Pedoman Pengelolaan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-standar.html">Standar Pelayanan Informasi Publik</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-struktur.html">Struktur PPID</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-formulir.html">Formulir PPID</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-lhkpn">LHKPN</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="informasi-pengaduan">Pengaduan Masyarakat</a> 
				</div>
			</li>
			<li class="nav-item {menukerjasama} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Kerja Sama
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="kerjasama-aparat">Instansi Aparat Penegak Hukum</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="kerjasama-umum">Instansi Umum</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="kerjasama-internasional">Internasional</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="kerjasama-kesehatan">Kesehatan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="kerjasama-pendidikan">Pendidikan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="kerjasama-lsm">LSM/Pers</a> 
				</div>
			</li>
			<li class="nav-item {menukontakkami}">
				<a class="nav-link" href="kontakkami.html">Kontak Kami</a>
			</li>


		</ul>
	</div>
	<div id="myOverlay" class="overlay">
		<span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
		<div class="overlay-content">
			<form action="action_page.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
</nav>