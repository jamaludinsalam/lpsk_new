 <?php 
	$no=$page;
	$no++;$hasil='';
	if ($data) {

		foreach ($data as $sip) {
			
			$hasil.='<div class="row bukurow mt-5">
					<div class="col-sm-6">
						<div class="image-box-all" id="image-box-all">
							<iframe src="'.base_url('assets/uploads/images/publikasi/'.$sip->news_media).'" frameborder="0" 
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
							class="image-box-cover-all"></iframe>
						</div>
					</div>
					<div class="col-sm-6 mt-2 bukukanan">
						<h2>'.$sip->tgl.'</h2>
						<strong><h1>'.$sip->news_title.'</h1></strong>
						<h3>Ditulis Oleh : '.$sip->written_by.' </h3>
						<a href="'.base_url('publikasi/detailkegiatan/'.$sip->news_id).'" class="btn btn-primary btn-custom" style="background-color: #707e9d; border-color: #707e9d;">Read More</a>
						<!--<a href="#" class="btn btn-primary btn-custom">Download</a>-->
					</div>
				</div>
				<hr class="bukuhr mt-5">';
			$no++;
		}

		echo $hasil;
	}
?>

