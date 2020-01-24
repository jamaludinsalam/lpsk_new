 <?php 
$hasil='';
	foreach ($data as $i) {
		$hasil.='
					<div class="col-md-8">
						<h1 class="mb-5 ">'.$i->page_title.' </h1>
						<p>'.$i->page_content.'</p>
					</div>
				
				';
		
	}




	echo '
	<section class="visi" id="visi">
		<div class="container">
			<div class="row justify-content-md-center " >
				'.$hasil.'
				
				
			</div>
			
		</div>
	</section>
		';

?>

