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
					<a class="dropdown-item" href="<?php base_url('publikasi/buku') ?>">Buku</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/buletin') ?>">Buletin</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/jurnal') ?>">Jurnal</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/artikel') ?>">Artikel</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/informasi') ?>">Informasi</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/kegiatan') ?>">Kegiatan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/gallery') ?>">Gallery Foto</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/video') ?>">Video</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php base_url('publikasi/laporan') ?>">Laporan</a> 
				</div>
			</li>
			<li class="nav-item {menuperaturan} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Peraturan
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="peraturan-uu.html">Undang Undang Terkait</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="peraturan-pemerintah.html">Peraturan Pemerintah</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item " href="peraturan-presiden.html">Peraturan Presiden</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item " href="peraturan-perma.html">Perma</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="peraturan-lpsk.html">Peraturan LPSK</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item " href="peraturan-peraturanlain.html">Peraturan Lain</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="peraturan-kodeetik.html">Kode Etik</a> 
				</div>
			</li>
			<li class="nav-item {menuberita} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Berita
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="berita-pers-release.html">Pers Release</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="berita-wartahukum.html">Warta Hukum</a> 
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