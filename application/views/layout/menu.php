<nav class="navbar navbar-expand-lg navbar-light main-nav">
	<a class="navbar-brand logo" href="#"><img src="<?= base_url('assets/resources/css/img/logonew.png') ?>" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<hr>
		<ul class="navbar-nav mr-auto ">
			<li class="nav-item {menuhome}">
				<a class="nav-link" href="<?php echo base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {menuprofil} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
				</a>
				<div class="dropdown-menu " aria-labelledby="navbarDropdown">
					<a class="dropdown-item {sekilaslpsk}" href="<?php echo base_url('profil/sekilaslpsk') ?>">Sekilas LPSK</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {struktur}" href="<?php echo base_url('profil/struktur') ?>">Struktur Organisasi</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pejabat}" href="<?php echo base_url('profil/pejabat') ?>">Pejabat Struktural</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {roadmap}" href="<?php echo base_url('profil/roadmap') ?>">Road Map dan Rencana Strategis</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pimpinan}" href="<?php echo base_url('profil/pimpinan') ?>">Profil Pimpinan</a> 
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
					<a class="dropdown-item {berita}" href="<?php echo base_url('berita/berita') ?>">Berita</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {persrelease}" href="<?php echo base_url('berita/persrelease') ?>">Pers Release</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {wartahukum}" href="<?php echo base_url('berita/wartahukum') ?>">Warta Hukum</a> 
				</div>
			</li>
			<li class="nav-item {menuinformasi} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Informasi Publik
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {informasi}" href="<?php echo base_url('informasi/informasipublik') ?>">Tentang Informasi Publik</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pedoman}" href="<?php echo base_url('informasi/pedoman') ?>">Pedoman Pengelolaan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {standar}" href="<?php echo base_url('informasi/standar') ?>">Standar Pelayanan Informasi Publik</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {struktur}" href="<?php echo base_url('informasi/struktur') ?>">Struktur PPID</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {formulir}" href="<?php echo base_url('informasi/formulir') ?>">Formulir PPID</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {lhkpn}" href="<?php echo base_url('informasi/lhkpn') ?>">LHKPN</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pengaduan}" href="<?php echo base_url('informasi/pengaduan') ?>">Pengaduan Masyarakat</a> 
				</div>
			</li>
			<li class="nav-item {menukerjasama} dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Kerja Sama
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {aparat}" href="<?php echo base_url('kerjasama/aparat') ?>">Instansi Aparat Penegak Hukum</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {umum}" href="<?php echo base_url('kerjasama/umum') ?>">Instansi Umum</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {internasional}" href="<?php echo base_url('kerjasama/internasional') ?>">Internasional</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {kesehatan}" href="<?php echo base_url('kerjasama/kesehatan') ?>">Kesehatan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item {pendidikan}" href="<?php echo base_url('kerjasama/pendidikan') ?>">Pendidikan</a> 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url('kerjasama/lsm') ?>">LSM/Pers</a> 
				</div>
			</li>
			<li class="nav-item {menukontakkami}">
				<a class="nav-link" href="<?php echo base_url('kontakkami/kontakkami') ?>">Kontak Kami</a>
			</li>


		</ul>
		
	</div>
	
</nav>