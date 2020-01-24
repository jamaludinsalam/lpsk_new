<?php 
$no=$page;
$nourut=0;
$ketuawakil='';

	

	foreach ($data as $pejabat) {
		
		

		$ketuawakil.='
		<tbody>
			<tr>
				<th scope="row">'.$nourut++.'</th>
				<td>'.$pejabat->pejabat_created_date.'</td>
				<td>'.$pejabat->pejabat_name.'</td>
				<td>
					<div class="dropdown show">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Tahun
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							
							<a class="dropdown-item" href="#" disabled>Tahun</a>
							<a class="dropdown-item" href="#">2018</a>
							<a class="dropdown-item" href="#">2019</a>
						</div>
					</div>
				</td>
			</tr>
			
			
		</tbody>
		';
		
	}


	echo '
		<section class="peraturan">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row peraturanrow rowmd">
							<h4 class="">LHKPN Ketua dan Wakil Ketua LPSK</h4>
							<hr class="mt-2 mb-5">
						</div>
						
						<div class="row peraturanrow mt-5">
							<table class="table table-hover">
								<thead>
									<tr>
									<th scope="col"> No</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Nama </th>
									<th scope="col">Pelaporan LHKPN</th>
									</tr>
								</thead>
								'.$ketuawakil.'
								
							</table>
						</div>
					</div>
					<div class="col-lg-12 mt-5">
						<div class="row peraturanrow rowmd">
						
							<h4 class="">Eseleon I </h4>
							<hr class="mt-2 mb-5">
						</div>
						
						<div class="row peraturanrow mt-5">
							<table class="table table-hover">
								<thead>
									<tr>
									<th scope="col"> No</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Nama </th>
									<th scope="col">Pelaporan LHKPN</th>
									</tr>
								</thead>
								'.$ketuawakil.'
								
							</table>
						</div>
					</div>
					<div class="col-lg-12 mt-5">
						<div class="row peraturanrow rowmd">
						
							<h4 class="">Eseleon II </h4>
							<hr class="mt-2 mb-5">
						</div>
						
						<div class="row peraturanrow mt-5">
							<table class="table table-hover">
								<thead>
									<tr>
									<th scope="col"> No</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Nama </th>
									<th scope="col">Pelaporan LHKPN</th>
									</tr>
								</thead>
								'.$ketuawakil.'
								
							</table>
						</div>
					</div>
					<div class="col-lg-12 mt-5">
						<div class="row peraturanrow rowmd">
						
							<h4 class="">Eseleon III </h4>
							<hr class="mt-2 mb-5">
						</div>
						
						<div class="row peraturanrow mt-5">
							<table class="table table-hover">
								<thead>
									<tr>
									<th scope="col"> No</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Nama </th>
									<th scope="col">Pelaporan LHKPN</th>
									</tr>
								</thead>
								'.$ketuawakil.'
								
							</table>
						</div>
					</div>
				</div>
						
						
						
					
			</div>
		</section>


	';



	

	
	
?>

