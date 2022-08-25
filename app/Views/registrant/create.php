<main class="container-fluid mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-info">
						<h5>Formulir pendaftaran</h5>
					</div>
					<div class="card-body">
						<form action="<?= base_url('registrant/store'); ?>" method="POST">
							<div class="mb-3">
								<label for="fullname" class="form-label">Nama lengkap</label>
								<input type="text" name="fullname" id="fullname" class="form-control form-control-sm">
							</div>
							<div class="mb-3">
								<label for="birth" class="form-label">Tanggal lahir</label>
								<input type="text" name="birth" id="birth" class="form-control form-control-sm">
							</div>
							<div class="mb-3">
								<label for="address" class="form-label">Alamat</label>
								<input type="text" name="address" id="alamat" class="form-control form-control-sm">
							</div>
							<div class="mb-3">
								<label for="gender" class="form-label">Jenis Kelamin</label>
								<div class="d-flex gap-4">
									<div class="form-check d-">
										<input class="form-check-input" type="radio" name="gender" value="L" id="laki-laki">
										<label class="form-check-label" for="laki-laki">
											Laki-laki
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gender" value="P" id="perempuan">
										<label class="form-check-label" for="perempuan">
											Perempuan
										</label>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label for="religion" class="form-label">Agama</label>
								<input type="text" name="religion" id="religion" class="form-control form-control-sm">
							</div>
							<div class="mb-3">
								<label for="ipk" class="form-label">Nilai akhir</label>
								<input type="number" step="0.01" name="ipk" id="ipk" class="form-control form-control-sm">
							</div>
							<div class="mb-3">
								<label for="graduated_from" class="form-label">Asal sekolah</label>
								<textarea type="text" name="graduated_from" id="graduated_from" class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?= base_url('registrant'); ?>" class="text-danger">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
  $( function() {
    $( "#birth" ).datepicker({ dateFormat: 'dd M yy' }).val();
  } );
</script>