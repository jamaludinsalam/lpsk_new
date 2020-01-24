 <?php 
	
	$hasil='';
	$related='';

	if ($data) {

		foreach ($data as $sip) {
			

			
			$hasil.='<div class="blog ">
						<h1>'.$sip->news_title.'</h1>
						<h3>'.date('j F Y',strtotime($sip->tgl) ).' , Ditulis Oleh : '.$sip->written_by.'</h3>
							<hr>
						<div class="image-box-all" id="image-box-all" style="width: 100%;">
							<img class="image-box-cover-all-detail" src="'.base_url('assets/uploads/images/berita/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" alt="" style="width: 100%;">
						</div>
						
						<h6>'.$sip->news_content.'</h6>
							<hr>
							<hr>
					</div>
					';

		}

		foreach ($this->Berita_model->getRelatedWartaHukum() as $w){
			$related.='
						<div class="card">
							<div class="bg-img card-img-top" style="background-image: url('.base_url('assets/uploads/images/berita/'.($w->news_media==""?"default.jpg":$w->news_media)).');"></div>
							<div class="card-body">
								<a href="'.base_url('berita/detailpersrelease/'.$w->news_id).'" class="stretched-link"><h1 class="card-title" style="font-size: .9em;">'.$w->news_title.'</h1></a>
								<p class="card-text">'.character_limiter(strip_tags($w->news_content), 50).'</p>
								<p class="card-text"><small class="text-muted">'.date('jS F, Y',strtotime($w->news_created_date) ).'</small></p>
							</div>
						</div>
					';
		}


		echo '
				'.$hasil.'
				<div class="related-post ">
					<h1 class="mb-5">Related Post</h1>
						<div class="card-deck">
							'.$related.'
							
						</div>
				</div>
				';
	}
?>

