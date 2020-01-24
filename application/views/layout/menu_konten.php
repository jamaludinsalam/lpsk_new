<?php

if($menupublikasi=='active'){
	echo '<div class="col-md-4">
		<div class="search-container">
			<form action="#">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<div class="categories"><h4 >Categories</h4></div>
		<div class="list-group list-group-flush">
			<a href="'.base_url('publikasi/buku').'" class="list-group-item list-group-item-action {publikasibuku}">Buku</a>
			<a href="'.base_url('publikasi/buletin').'" class="list-group-item list-group-item-action {publikasibuletin}">Buletin</a>
			<a href="'.base_url('publikasi/jurnal').'" class="list-group-item list-group-item-action {publikasijurnal}">Jurnal</a>
			<a href="'.base_url('publikasi/artikel').'" class="list-group-item list-group-item-action {publikasiartikel}">Artikel</a>
			<a href="'.base_url('publikasi/informasi').'" class="list-group-item list-group-item-action {publikasiinformasi}">Informasi</a>
			<a href="'.base_url('publikasi/kegiatan').'" class="list-group-item list-group-item-action {publikasikegiatan}">Kegiatan</a>
			<a href="'.base_url('publikasi/gallery').'" class="list-group-item list-group-item-action {publikasigallery}">Gallery Foto</a>
			<a href="'.base_url('publikasi/video').'" class="list-group-item list-group-item-action {publikasivideo}">Video</a>
			<a href="'.base_url('publikasi/laporan').'" class="list-group-item list-group-item-action {publikasilaporan}">Laporan</a>
		</div>
	</div>';
}

if($menuperaturan=='active'){
	echo '<div class="col-lg-4">
	<div class="search-container">
		<form action="#">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist" style="width: 100%;">
		<a class="nav-item nav-link categories {uuterkait} {pemerintah} {presiden} {perma} {lain} " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"><h4>Peraturan</h4> </a>
		<a class="nav-item nav-link categories {lpsk} {ketualpsk} {sekjenlpsk} {kodeetik} " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true"><h4>Peraturan LPSK</h4> </a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show {uuterkait} {pemerintah} {presiden} {perma} {lain}" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<div class="list-group list-group-flush">
				<a href="'.base_url('peraturan/uuterkait').'" class="list-group-item list-group-item-action  {uuterkait}">Undang Undang Terkait</a>
				<a href="'.base_url('peraturan/pemerintah').'" class="list-group-item list-group-item-action {pemerintah} ">Peraturan Pemerintah</a>
				<a href="'.base_url('peraturan/presiden').'" class="list-group-item list-group-item-action {presiden} ">Peraturan Presiden</a>
				<a href="'.base_url('peraturan/perma').'" class="list-group-item list-group-item-action {perma}">Perma</a>
				<a href="'.base_url('peraturan/lain').'" class="list-group-item list-group-item-action {lain}">Peraturan Lain</a>
			</div>
		</div>
		<div class="tab-pane fade show {lpsk} {ketualpsk} {sekjenlpsk} {kodeetik}" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<div class="list-group list-group-flush">
				<a href="'.base_url('peraturan/lpsk').'" class="list-group-item list-group-item-action {lpsk} ">Peraturan LPSK</a>
				<a href="'.base_url('peraturan/ketualpsk').'" class="list-group-item list-group-item-action {ketualpsk}">Peraturan dan Keputusan Ketua LPSK</a>
				<a href="'.base_url('peraturan/sekjenlpsk').'" class="list-group-item list-group-item-action {sekjenlpsk}">Peraturan dan Keputusan Sekjen LPSK</a>
				<a href="'.base_url('peraturan/kodeetik').'" class="list-group-item list-group-item-action {kodeetik} ">Kode Etik</a>
			</div>
		</div>
	</div>
	
</div>';
}


if($menuberita=='active'){
	echo '<div class="col-md-4">
			
				<div class="search-container">
					<form action="#">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			

				
				<div class="categories"><h4 >Categories</h4></div>
				<div class="list-group list-group-flush">
					<a href="'.base_url('berita/berita').'" class="list-group-item list-group-item-action {berita}">
					Berita 
					</a>
					<a href="'.base_url('berita/persrelease').'" class="list-group-item list-group-item-action {persrelease}">
						Pers Release
					</a>
					<a href="'.base_url('berita/wartahukum').'" class="list-group-item list-group-item-action {wartahukum}">
						Warta Hukum
					</a>
				</div>
			</div>';
}

if($menuinformasi=='active'){
	echo '';
}

	
?>