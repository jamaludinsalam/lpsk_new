 <?php 
	
	$hasil='';
	$related='';

	if ($data) {

		foreach ($data as $sip) {
			

			
			$hasil.='<div class="blog ml-5">
						<h1>'.$sip->news_title.'</h1>
						<h3>'.$sip->tgl.' , Ditulis Oleh : '.$sip->written_by.'</h3>
							<hr>
						<div class="image-box-all" id="image-box-all" style="width: 100%;">
							<img class="image-box-cover-all" src="'.base_url('assets/uploads/images/berita/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" alt="" style="width: 100%; height: 40vh">
						</div>
						
						<h6>'.$sip->news_content.'</h6>
							<hr>
							<hr>
					</div>
					';


			$related.='
					<div class="card">
						<div class="bg-img card-img-top" style="background-image: url('.base_url('assets/resources/img/news1.jpg').');"></div>
						<div class="card-body">
							<a href="" class="stretched-link"><h1 class="card-title">Card title</h1></a>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum illum doloribus quisquam culpa aspernatur.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					';
			
		}


		echo '
				'.$hasil.'
				<div class="related-post ml-5">
					<h1 class="mb-5">Related Post</h1>
						<div class="card-deck">
							'.$related.'
							'.$related.'
							'.$related.'
						</div>
				</div>
				';
	}
?>

