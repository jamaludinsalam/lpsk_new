 <?php 
 $formulir1='';
 $formulir2='';
 foreach ($data1 as $d1) {
	 $formulir1.='
			 
			<div class="col-lg-6">
				<div class="pedoman">
					<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
					<h1>'.$d1->page_title.'</h1>
					<a href="'.base_url('assets/uploads/files/'.$d1->page_media).'" target="_blank" class="btn btn-primary btn-custom">Download</a>
				</div>
			</div>
			 
			 ';
	 
 }
 foreach ($data2 as $d2) {
	 $formulir2.='
			 
			<div class="col-lg-6">
				<div class="pedoman">
					<i><img src="'.base_url('assets/resources/css/img/pdf.svg').'" alt=""></i>
					<h1>'.$d2->page_title.'</h1>
					<a href="'.base_url('assets/uploads/files/'.$d2->page_media).'" target="_blank" class="btn btn-primary btn-custom">Download</a>
				</div>
			</div>
			 
			 ';
	 
 }
	echo '
		<section class="pedomans">
			<div class="container">
				<div class="row justify-content-center">
					'.$formulir1.'
					'.$formulir2.'
					
								
					
				</div>
					
			</div>
		</section>
		';

?>

