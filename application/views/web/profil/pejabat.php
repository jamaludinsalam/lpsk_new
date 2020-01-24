 <?php 


$pejabat='';


	foreach ($data as $p) {
		

		$pejabat.='
					<div class="row pejabatrow ">
						<div class="col-md-4">
							<div class="image-box-all" id="image-box-all" >
								<img src="'.base_url('assets/uploads/images/profil/thumb/'.($p->profile_image==""?"default.jpg":$p->profile_image)).'" alt="" class="image-box-cover-all" style="width: 100%; height: 350px;">
							</div>
						</div>
						<div class="col-md-8 mt-5">
							<a href="'.base_url('profil/pejabatdetail/'.$p->profile_id).'" class="stretched-link "><h1>'.$p->profile_title.'</h1></a>
							<p>'.$p->profile_name.'</p>
							<p>'.character_limiter(strip_tags($p->profile_content), 400).'</p>
						</div>
						
					</div>
				
				';
		
	}

	echo '

	<section class="pejabat">
		<div class="container">
			'.$pejabat.'
			<hr class="pejabathr mt-5">		
		</div>
	</section>
		';

?>