 <?php 
	$no=$page;
	$no++;$hasil='';
	if ($data) {

		foreach ($data as $sip) {
			

			$hasil.='
						<div class="card mb-5 ml-5 berita  no-border" style="">
							<div class="row no-gutters berita">
								<div class="col-sm-4 image-box-all" id="image-box-all">
									<img class="bg-img card-img image-box-cover-all" src="'.base_url('assets/uploads/images/berita/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" alt="">
								</div>
								
								<div class="col-md-8">
									<div class="card-body">
										<h3>29 September 2019</h3>
										<a href="'.base_url('berita/detailpersrelease/'.$sip->news_id).'" class="stretched-link"><h1 class="card-title">'.$sip->news_title.'</h1></a> 
									</div>
								</div>
							</div>
						</div>
					
					';
			$no++;
		}

		echo '<div class="row">
				'.$hasil.'
				</div>';
	}
?>

{links}