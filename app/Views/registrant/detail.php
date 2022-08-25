<main class="container-fluid mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-info">
						<h5>Detail pendaftar</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<span>Nama lengkap : </span>
							<span class="text-capitalize"> <?= $registrant['fullname'] ?> </span>
						</div>
						<div class="mb-3">
							<span>Tanggal lahir : </span>
							<span class="text-capitalize"> <?= date('d F Y', strtotime($registrant['birth'])); ?> </span>
						</div>
						<div class="mb-3">
							<span>Alamat : </span>
							<span class="text-capitalize">
								<?= $registrant['address'] ?>
							</span>
						</div>
						<div class="mb-3">
							<span>Jenis kelamin : </span>
							<span class="text-capitalize">
								<?= $registrant['gender'] === 'L' ? 'laki-laki' : 'perempuan' ?>
							</span>
						</div>
						<div class="mb-3">
							<span>Agama : </span>
							<span class="text-capitalize">
								<?= $registrant['religion']; ?>
							</span>
						</div>
						<div class="mb-3">
							<span>Nilai akhir : </span>
							<span class="text-uppercase">
								<?= $registrant['ipk']; ?>
							</span>
						</div>
						<div class="mb-3">
							<span>Asal sekolah : </span>
							<span class="text-uppercase">
								<?= $registrant['graduated_from']; ?>
							</span>
						</div>
					</div>
				</div>
				<a href="<?= base_url('registrant'); ?>" class="text-danger"><<< Kembali</a>
			</div>
		</div>
	</div>
</main>