 <?php 
	$no=$page;
	$no++;$hasil='';
	if ($data) {

		foreach ($data as $sip) {
			

			$hasil.='
						<div class="card mb-5  berita  no-border" style="min-width: 100%">
							<div class="row no-gutters berita" style="margin: 0 0;">
								<div class="col-md-4 image-box-all" id="image-box-all">
									<img class="bg-img card-img image-box-cover-all" src="'.base_url('assets/uploads/images/berita/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" alt="">
								</div>
								
								<div class="col-md-8">
									<div class="card-body">
										<h3>'.date('j F Y',strtotime($sip->tgl) ).' </h3>
										<a href="'.base_url('berita/detailberita/'.$sip->news_id).'" class="stretched-link"><h1 class="card-title">'.$sip->news_title.'</h1></a> 
										<p class="card-text">'.character_limiter(strip_tags($sip->news_content), 165).'</p>
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
