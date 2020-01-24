<?php

$persrelease='';
$berita='';
$wartahukum='';
$getslide='';
$getbanner='';
$newsticker='';
$getcerita='';
$ceritalpsk='';
$statistik='';
$b=0;
$c=0;
$d=0;


foreach ($this->Home_model->getPers() as $pers) {
  $persrelease.='
  <div class="col-md-4 col-berita-card">
      <div class="card h-100 berita-card " >
          <img src="'.base_url('assets/uploads/images/berita/'.($pers->news_media==""?"default.jpg":$pers->news_media)).'" class="card-img-top" alt="...">
          <div class="card-body">
              <h3>'.date('j F Y',strtotime($pers->news_created_date) ).'</h3>
              <a href="'.base_url('berita/detailpersrelease/'.$pers->news_id).'"  style="text-decoration: none"><h2 class="card-title"><strong> '.$pers->news_title.'</strong></h2></a>
              <p class="card-text">'.character_limiter(strip_tags($pers->news_content), 120).'</p>
                      
          </div>
      </div>
  </div>
  ';
}

foreach ($data as $sip) {
  $berita.='
  <div class="col-md-4 col-berita-card">
      <div class="card h-100 berita-card " >
          <img src="'.base_url('assets/uploads/images/berita/'.($sip->news_media==""?"default.jpg":$sip->news_media)).'" class="card-img-top" alt="...">
          <div class="card-body">
              <h3>'.date('j F Y',strtotime($sip->news_created_date) ).'</h3>
              <a href="'.base_url('berita/detailberita/'.$sip->news_id).'"  style="text-decoration: none"><h2 class="card-title"><strong> '.$sip->news_title.'</strong></h2></a>
              <p class="card-text">'.character_limiter(strip_tags($sip->news_content), 120).'</p>
              
                      
          </div>
      </div>
  </div>
  ';
}


foreach ($this->Home_model->getWarta() as $item){
  $wartahukum.='
  <div class="col-md-4 col-berita-card">
      <div class="card h-100 berita-card shadow" >
          <img src="'.base_url('assets/uploads/images/berita/'.($item->news_media==""?"default.jpg":$item->news_media)).'" class="card-img-top" alt="...">
          <div class="card-body">
              <h3>'.date('j F Y',strtotime($item->news_created_date) ).'</h3>
              <a href="'.base_url('berita/detailwartahukum/'.$item->news_id).'"  style="text-decoration: none"><h2 class="card-title"><strong> '.$item->news_title.'</strong></h2></a> 
              <p class="card-text">'.character_limiter(strip_tags($item->news_content), 120).'</p>
                     
          </div>
      </div>
  </div>
  
  ';
}


foreach ($this->Home_model->getBanner() as $banner){
  $active =  ($b == 0) ? 'active' : '';

  $getslide.='
      <li data-target="#myCarousel" data-slide-to="'.$b++.'"  class="'.$active.'"></li>
  ';
  
  $getbanner.='
  <div class="carousel-item '.$active.'">
      <div class="bg-img" style=" background: url('.base_url('assets/uploads/images/splash/'.($banner->sp_image==""?"default.jpg":$banner->sp_image)).') ; background-size:  cover;
      background-repeat: no-repeat;"></div>
      <svg class="bd-placeholder-img"  width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
      <div class="container">
          <div class="carousel-caption text-left">
             <a href="'.$banner->sp_url.'"> <h1 href="'.base_url('berita/detailwartahukum/'.$item->news_id).'">'.$banner->sp_title.'</h1></a>
              <p>'.character_limiter(strip_tags($banner->sp_desc), 250).'</p>
              
          </div>
      </div>
  </div>
  ';
}


foreach ($this->Home_model->getNewsTicker() as $ticker){
  $newsticker.= '
    <a href="'.$ticker->sp_url.'" style="">::: '.$ticker->sp_title.'  :::</a> 
  ';
                                  
}

foreach ($this->Home_model->getCerita() as $cerita) {
  $activec = ($c == 0) ? 'active' : '';

  $getcerita.='
      <li data-target="#cerita-carousel" data-slide-to="'.$c++.'" class="'.$activec.'"></li>
  '; 

  $ceritalpsk.='
  <div class="carousel-item '.$activec.' ">
      <div class="bg-img" style=""></div>
      <div class="container">
          <div class="carousel-caption text-left">
              <div class="row c-cerita">
                  <div class="col-lg">
                      <p>'.$cerita->cerita_desc.'</p>
                      <h2>'.$cerita->cerita_author.'</h2>
                      <h3>'.$cerita->cerita_jabatan.'</h3>
                  </div>
                  <div class="col-lg">
                    <div class="how-bor1">
                      <div class="hov-iframe">
                        '.$cerita->cerita_link.'
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  ';
}

foreach($this->Home_model->getStatistik() as $c){
	$statistik.='
		'.$c->st_saksi.' , '.$c->st_ahli.', '.$c->st_perlindungan_anak.', '.$c->st_pelapor.'
	';
}


echo '

<!-- Carousel -->
		<div class="section-carousel">
			<div id="myCarousel" class="carousel slide main-slider" data-ride="carousel">
				<ol class="carousel-indicators">
					'.$getslide.'
				</ol>
				<div class="carousel-inner">
					'.$getbanner.'
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
<!-- End Carousel -->


<!-- Running Text -->
		<div id="marquee" >
      <marquee behavior="scroll" direction="left" speed="normal" onmouseover="this.stop();" onmouseout="this.start();" >
        '.$newsticker.'
      </marquee>
		</div>
<!-- End Running Text -->


<!--Features-->
<section id="features" class="features">
<div class="container ">
	<div class="row center" >
		<div class="col-lg box" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
			<img src="'.base_url('assets/resources/css/img/ft1.png').'" alt="">
			<div class="feature-title ">
				<h1><strong>Subjek Perlindungan</strong> </h1>
			</div>
			<div class="feature-content">
				<p>
					Pelapor, <br>
					Saksi , <br>
					Korban Ahli , <br>
					Saksi Pelaku , <br>
					Saksi Pelaku  Kerjasama  
				</p>
			</div>
			
			<a href="'.base_url('home/subjek').'" class="btn btn-primary"> <strong> Info Lengkap</strong></a>
		</div>
		<div class="col-lg box" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
			<img src="'.base_url('assets/resources/css/img/ft2.png').'" alt="">
			<div class="feature-title ">
				<h1><strong>Kasus Prioritas</strong> </h1>
			</div>
			<div class="feature-content">
				<p>Pelanggaran HAM yang berat, Korupsi, Pencucian Uang, Terorisme, Perdagangan Orang, Narkoba, Kekerasan Seksual pada Anak, Penyiksaan, Penganiayaan yang berat, Tindak Pidana lain</p>
			</div>
			
			<a href="'.base_url('home/prioritas').'" class="btn btn-primary"><strong> Info Lengkap</strong></a>
		</div>
		<div class="col-lg box" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
			<img src="'.base_url('assets/resources/css/img/ft3.png').'" alt="">
			<div class="feature-title ">
				<h1><strong>Program Perlindungan</strong> </h1>
			</div>
			<div class="feature-content">
				<p>Perlindungan Fisik, Perlindungan Prosedural, Perlindungan Hukum, Bantuan, Ganti Rugi, Saksi Pelaku Kerjasama</p>
			</div>
			
			<a href="'.base_url('home/perlindungan').'" class="btn btn-primary"><strong> Info Lengkap</strong></a>
		</div>
		<div class="col-md box" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
			<img src="'.base_url('assets/resources/css/img/ft4.png').'" alt="">
			<div class="feature-title ">
				<h1><strong>Cara Mengajukan Permohonan</strong> </h1>
			</div>
			
			<a href="'.base_url('home/permohonan').'" class="btn btn-primary btn4"><strong> Info Lengkap</strong></a>
		</div>
	</div>
</div>
</section>

<!-- End Features -->



		
		
	
<!-- End Features V2 -->	


<!-- Features -->				
	
<!-- End Features -->


<!-- BERITA -->
		<section id="berita" class="berita" >
			<div class="container">
				<div class="row title-section">
					<div class="col-lg">
						<h1 class="btn-title">BERITA</h1>
					</div>
				</div>

				<div class="row list-berita">
					<div id="listBerita" class="listberita col-lg-8 berita-desktop">
						<div class="row no-gutters" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce" >
							
							'.$persrelease.' 
							'.$wartahukum.'
							

						</div>
						<div class="row no-gutters" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
							'.$berita.'
						</div>
					</div>


					<div class="col-lg-4 list-app " data-sal="fade" data-sal-delay="300" data-sal-easing="ease-out-bounce">
						<div class="app">
							<a href="#"><img src="'.base_url('assets/resources/css/img/googleplay.svg').'" alt=""></a>
						</div>		
						<div class="app">
							<a href="#"><img src="'.base_url('assets/resources/css/img/tracking.svg').'" alt=""></a>
						</div>		
						<div class="app">
							<img src="'.base_url('assets/resources/css/img/hotline.svg').'" alt="">
						</div>
						<div class="app2">
							<div class="row no-gutters">
								<div class="col-lg list-app2 right mr-0" >
									<a href="#"><img src="'.base_url('assets/resources/css/img/tegas.png').'" alt=""></a>
								</div>
								<div class="col-lg list-app2 left ml-0" style="margin-right: 0; width: auto; right: 0;">
									<a href="#"><img src="'.base_url('assets/resources/css/img/layak.png').'" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
<!-- End BERITA -->


<!-- STATISTIK -->
		<section id="statistik" class="statistik">
			<div class="container">
				<div class="col-lg left ">
					<div class="row row_statistik left">
						<div class="col-custom">
							<h1>Statistik LPSK</h1>
							<canvas id="myChart" ></canvas>
						</div>
					</div>
					<div class="row row_statistik left">
						<div class="col-custom">
							<h1>Statistik LPSK</h1>
							<canvas id="myChart2"></canvas>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END STATISTIK -->




    <!-- CERITA LPSK -->
		<section class="cerita" id="cerita">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg">
						<div class="btn-title-cerita">
							<h1>CERITA LPSK</h1>
						</div>
					</div>
				</div>
				<div id="cerita-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						'.$getcerita.'
					</ol>
					<div class="carousel-inner">
						'.$ceritalpsk.'
						
						
						
					</div>
					<a class="carousel-control-prev" href="#cerita-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#cerita-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</section>
		<!-- END CERITA LPSK -->



		<script >
		let ctx = document.getElementById("myChart").getContext("2d");
		let labels = ["Saksi", "Ahli", "Perlindungan Anak", "Pelapor"];
		let colorHex = ["#FB3640","#EFCA08","#43AA8B", "#253D5B"];

		let myChart = new Chart(ctx, {
			type: "doughnut",
			data: {
				datasets: [{
					label: "# of Kasus",
					data: ['.$statistik.'],
					backgroundColor: colorHex
				}],
				labels: labels,
				fontSize: 100,
			},
			options: {
				responsive: true,
				legend: {
					display:true,
					position: "right"
				},
				layout: {
					padding: {
						left: 0,
						right: 0,
						top: 0,
						bottom: 50
					}
				}
			}
		});

		let ctx2 = document.getElementById("myChart2").getContext("2d");
		let labels2 = ["Saksi", "Ahli", "Perlindungan Anak", "Pelapor"];
		let colorHex2 = ["#FB3640","#EFCA08","#43AA8B", "#253D5B"];

		let myChart2 = new Chart(ctx2, {
			type: "doughnut",
			data: {
				datasets: [{
					label: "# of Kasus",
					data: ['.$statistik.'],
					backgroundColor: colorHex2
				}],
				labels: labels2,
				fontSize: 100,
			},
			options: {
				responsive: true,
				legend: {
					display:true,
					position: "right",
				},
				layout: {
					padding: {
						left: 0,
						right: 0,
						top: 0,
						bottom: 50
					}
				}
			}
		})
	</script>





';

?>