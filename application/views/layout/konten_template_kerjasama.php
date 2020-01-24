<!doctype html>
<html lang="en">
  	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/resources/css/style-kerjasama.css') ?>" type="text/css">
		<link rel="stylesheet" href="<?= base_url('assets/vendors/css/sal.css') ?>">
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500i,700|Raleway:400,500,500i,600,700,800|Viga&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url('assets/vendors/fonts/fontawesome/all.min.css') ?>">
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>Lembaga Perlindungan Saksi dan Korban </title>
  	</head>
	<body>
		<!-- Navbar -->
			{menu}
		<!-- End Navbar -->

		<div class="red"></div>

        <!-- TITLE -->
		<section class="title" id="title">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">{title}</h1>
                  <p class="lead">
                      <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb d-flex justify-content-center">
                            {navigation}
                          </ol>
                      </nav>
                  </p>
                </div>
              </div>
        </section>
			
        <!-- END TITLE -->

        <!-- Buku -->
		<section class="kerjasama">
			<div class="container">
				{_content}
			</div>
		</section>
        
        <!-- END Struktur-->

		<!-- FOOTER -->
		<div class="rowbiru"></div>
		<footer>
			{footer}
		<!-- </div> -->
		</footer>
		<!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" ></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- Custom Javascript -->
		<script src="<?= base_url('assets/vendors/js/sal.js') ?>"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
		<script>
			sal();
		</script>

	</body>
</html>