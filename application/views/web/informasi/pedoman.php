 <?php 

$hasil='';
foreach ($data as $d) {
	$hasil.='
			<div class="col-lg-6">
				<div class="pedoman">
					<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
					<h1>'.$d->page_title.'</h1>
					<a href="'.base_url('assets/uploads/files/'.$d->page_media).'" target="_blank" class="btn btn-primary btn-custom">Download</a>
				</div>
			</div>
			
			';
	
}

	echo '
		<section class="pedomans" >
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="pedoman">
							<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
							<h1>Draft Rancangan Pelayanan Informasi Publik</h1>
							<a href="'.base_url('assets/uploads/files/b93eca0c468f78cf65173bb7b425f9ee.pdf').'" target="_blank" class="btn btn-primary btn-custom">Download</a>
						</div>
					</div>
					'.$hasil.'
								
					
				</div>
					
			</div>
		</section>
		';

?>

