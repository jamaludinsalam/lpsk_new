<?php

if($menupublikasi=='active'){
	echo '<div class="col-sm-4">
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

	
?>