 <?php 

	
	$no=$page;
	$no++;$hasil='';
	if ($data) {

		foreach ($data as $sip) {
			
			$hasil.='<a id="image-box" class="image-box" href="'.base_url('assets/uploads/images/publikasi/'.($sip->image_url==""?"default.jpg":$sip->image_url)).'"  data-sub-html=".caption'.$sip->image_id.'">
						<img alt="'.$sip->image_title.'"  class="image-box-cover" src="'.base_url('assets/uploads/images/publikasi/'.($sip->image_url==""?"default.jpg":$sip->image_url)).'" />
						<div class="caption'.$sip->image_id.'"  >
							<p>'.$sip->image_title.'</p>
							
						</div>
					</a>';
			$no++;
		}

		echo '<div class="container">
					<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery</h1>
					<hr class="mt-2 mb-5">
				<div class="rowbox">
					<div id="column" class="column" style="background-size: cover;">
						 '.$hasil.'
					</div>
				</div>
			 </div>';
	}
?>

