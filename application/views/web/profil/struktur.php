 <?php 

$struktur='';


foreach ($data as $s) {
	

	$struktur.='
				<img style="pt-5 pb-5" src="'.base_url('assets/uploads/images/profil/original/'.($s->profile_image==""?"default.jpg":$s->profile_image)).'" alt="">
					
			';
	
}

	echo '
	<section class="struktur">
		<div class="container-fluid">
			<div class="row">
				<div class="img-struktur">
				'.$struktur.'
				</div>
			</div>
		</div>
	</section>
		';

?>

