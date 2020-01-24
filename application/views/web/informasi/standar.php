 <?php 

$hasil='';
foreach ($data as $d) {
	$hasil.='
			
			<div class="col-lg-6">
				<div class="standar">
					<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
					<h1>'.$d->page_title.'</h1>
					<a href="'.base_url('assets/uploads/files/'.$d->page_media).'" target="_blank" class="btn btn-primary btn-custom">Download</a>
				</div>
			</div>
			
			';
	
}
	echo '
		

		<section class="standars">
			<div class="container">
				<div class="row justify-content-center">
					'.$hasil.'
					
					
				</div>
					
			</div>
		</section>
		';

?>

