<main class="container-fluid mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-info">
						<h5>Edit data pendaftar</h5>
					</div>
					<div class="card-body">
						<form action="<?= base_url('registrant/update/' . $registrant['id']); ?>" method="POST">
							<input type="hidden" name="_method" value="PUT">
							<input type="hidden" name="id" value="<?= $registrant['id']; ?>">
							<div class="mb-3">
								<label for="fullname" class="form-label">Nama lengkap</label>
								<input type="text" name="fullname"
									id="fullname" class="form-control form-control-sm"
									value="<?= old('fullname', $registrant['fullname']) ?>">
							</div>
							<div class="mb-3">
								<label for="birth" class="form-label">Tanggal lahir</label>
								<input type="text" name="birth"
									id="birth" class="form-control form-control-sm"
									value="<?= old('birth', $registrant['birth']) ?>">
							</div>
							<div class="mb-3">
								<label for="address" class="form-label">Alamat</label>
								<input type="text" name="address"
									id="alamat" class="form-control form-control-sm"
									value="<?= old('address', $registrant['address']) ?>">
							</div>
							<div class="mb-3">
								<label for="gender" class="form-label">Jenis Kelamin</label>
								<div class="d-flex gap-4">
									<div class="form-check d-">
										<input class="form-check-input" type="radio"
											name="gender" value="L" id="laki-laki"
											<?= old('gender', $registrant['gender']) === 'L' ? 'checked' : '' ?> >
										<label class="form-check-label" for="laki-laki">Laki-laki</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio"
											name="gender" value="P" id="perempuan"
											<?= old('gender', $registrant['gender']) === 'P' ? 'checked' : '' ?> >
										<label class="form-check-label" for="perempuan">Perempuan</label>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label for="religion" class="form-label">Agama</label>
								<input type="text" name="religion"
									id="religion" class="form-control form-control-sm"
									value="<?= old('religion', $registrant['religion']) ?>">
							</div>
							<div class="mb-3">
								<label for="ipk" class="form-label">Nilai akhir</label>
								<input type="number" step="0.01" name="ipk"
									id="ipk" class="form-control form-control-sm"
									value="<?= old('ipk', $registrant['ipk']) ?>">
							</div>
							<div class="mb-3">
								<label for="graduated_from" class="form-label">Asal sekolah</label>
								<textarea name="graduated_from" id="graduated_from" class="form-control"><?= $registrant['graduated_from']; ?></textarea>
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