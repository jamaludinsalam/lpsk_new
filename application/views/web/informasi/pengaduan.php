 <?php 





	echo '
	<section class="visi" id="visi">
		<div class="container">
			<div class="row justify-content-md-center " >
				<div class="col-md-8">
					<form>
						<div class="form-group">
						<label for="namalengkap">Nama Lengkap</label>
						<input type="text" class="form-control" id="namalengkap" placeholder="Isi nama lengkap anda ...">
						</div>
						<div class="form-group">
						<label for="noidentitas">No Identitas</label>
						<input type="text" class="form-control" id="noidentitas" placeholder="Nomor KTP / SIM / Paspor Pelapor">
						</div>
						<div class="form-group">
						<label for="jeniskelamin">Jenis Kelamin</label>
						<select class="form-control" id="jeniskelamin">
							<option >Please select</option>
							<option>Laki - Laki</option>
							<option>Perempuan</option>
						</select>
						</div>
						<div class="form-group">
							<label for="email">Alamat Email </label>
							<input type="email" class="form-control" id="email" placeholder="Alamat E-mail Aktif">
						</div>
						<div class="form-group">
							<label for="notelp">No Telp </label>
							<input type="text" class="form-control" id="notelp" placeholder="Nomor Telepon Rumah / Kantor Pelapor">
						</div>
						<div class="form-group">
							<label for="nohp">No HP </label>
							<input type="text" class="form-control" id="nohp" placeholder="Nomor HP Pelapor yang dapat dihubungi">
						</div>
						
						<div class="form-group">
						<label for="alamat">Alamat Lengkap Domisili</label>
						<textarea class="form-control" id="alamat" rows="3"></textarea>
						</div>
					</form>
					<button type="submit"  class="btn btn-success">Adukan</button>
				</div>
			</div>
		</div>
	</section>
		';

?>

