 <?php 

$roadmap='';


foreach ($data as $r) {
	

	$roadmap.='
			
				<div class="col-md-4">
					<div class="roadmap">
						<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
						<h1>'.$r->profile_title.'</h1>
						<a href="'.base_url('assets/uploads/images/profil/original/'.($r->profile_image==""?"default.jpg":$r->profile_image)).'" class="btn btn-primary btn-custom">Download</a>
					</div>
				</div>	
			';
	
}
	echo '
	<section class="roadmaps" >
		<div class="container">
			<div class="row justify-content-center">
				'.$roadmap.'
			</div>
				
		</div>
	</section>



	
		';

?>

