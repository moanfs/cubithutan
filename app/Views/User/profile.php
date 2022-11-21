<!-- halaman profile pengguna -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="profile-page">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body profile-img">
							<img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-md-4">
									<p class="label">Nama Panggilan</p>
								</div>
								<div class="col-12 col-md-8">
									<p>Malika</p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Email</p>
								</div>
								<div class="col-12 col-md-8">
									<span>malika@gmail.com</span>
									<span>
										<a href="#">Ganti email</a>
									</span>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Kata Sandi</p>
								</div>
								<div class="col-12 col-md-8">
									<span>*********</span>
									<span>
										<a href="#">Ganti kata sandi</a>
									</span>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Tempat, Tanggal Lahir</p>
								</div>
								<div class="col-12 col-md-8">
									<p>Bandung, 10 Januari 2000</p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Jenis Kelamin</p>
								</div>
								<div class="col-12 col-md-8">
									<p>Perempuan</p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">No WhatsApp</p>
								</div>
								<div class="col-12 col-md-8">
									<p>08210808323</p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Alamat</p>
								</div>
								<div class="col-12 col-md-8">
									<p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat</p>
								</div>

								<div class="col-12">
									<button class="btn btn-primary">Perbarui Profil</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>