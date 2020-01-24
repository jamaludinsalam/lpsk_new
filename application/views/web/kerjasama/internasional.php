<?php 
	$no=$page;
	$no++;$hasil='';
	
	
	
	
	if ($data) {
		$nourut = 1;
		foreach ($data as $sip) {
			
			$hasil.='
					<tbody>
						<tr>
							<th scope="row">'.$nourut++.'</th>
							<td>'.$sip->kerjasama_title.'</td>
							<td> <p>'.$sip->written_by.'</p></td>
							<td>
								<a class="ihover" target="_blank" href="'.base_url()."assets/uploads/files/".$sip->kerjasama_media.'" style="font-size: 1.5em;">
									<i class="fas fa-file-pdf"></i>
								</a>
							</td>
						</tr>
						
					</tbody>
					
					
					';
			$no++;
		}

		echo '
				<div class="row">
					<div class="col-lg-12">
						<div class="row kerjasamarow rowmd">
							<h4 class="">Instansi Internasional</h4>
							<hr class="mt-2 mb-5">
						</div>
						 
						<div class="row kerjasamarow mt-5">
							<table class="table table-hover">
								<thead>
									<tr>
									<th scope="col"> No</th>
									<th scope="col">Judul</th>
									<th scope="col">Penulis</th>
									<th scope="col" ><i class="fas fa-file-download"></i></th>
									<th></th>
									</tr>
								</thead>
								'.$hasil.'
							</table>
						</div>
					</div>
				</div>
				
				
				
				<div class="row justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
							</li>
						</ul>
					</nav>
				</div>
		';
	}
?>

{links}