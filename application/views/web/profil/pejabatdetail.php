 <?php 
$pejabatdetail='';
foreach ($data as $d) {
		

	$pejabatdetail.='
	<section class="pejabatdetails">
	<div class="container">
		<div class="row pejabatrow ">
			<div class="col-lg-4">
				<div class="image-box-all" id="image-box-all">
					<div class="image-box-cover-all">
						<img style="width: 100%;" src="'.base_url('assets/uploads/images/profil/thumb/'.($d->profile_image==""?"default.jpg":$d->profile_image)).'" alt="">
					</div>
				</div>
				
			</div>
			<div class="col-lg-8 ">
				<div class="nama ">
					<h1>Nama</h1>
					<p>'.$d->profile_title.'</p>
				</div>
				<div class="jabatann ">
					<h1>Jabatan</h1>
					<p>'.$d->profile_name.'</p>
				</div>
				
				<div class="profil">
					<h1>Profil</h1>
					<p>'.$d->profile_content.'</p>
				</div>
				
				
			</div>
			
		</div>
			
	</div>
</section>
			
			';
	
}



	echo '
'.$pejabatdetail.'
	';

?>
