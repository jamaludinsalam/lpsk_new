 <?php 
	$hasil='';
	if ($data) {

		foreach ($data as $sip) {
			
			$hasil.='<div class="kegiatan ml-5">
							<h1>'.$sip->news_title.'</h1>
							<h3>'.$sip->tgl.' | Ditulis Oleh : '.$sip->written_by.'</h3>
								<hr>
							
							<div id="image-box-all" class="image-box-all" style="border-radius: 0;">
								<img class="image-box-cover-all" src="'.base_url('assets/uploads/images/publikasi/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" alt="" style="height:  100%;">
							</div>
					
							<p class="mt-5">'.$sip->news_content.'</p>
								<br>
								<br>
							<hr>
								<hr>
								
						</div>';
		}

		echo $hasil;
	}
?>