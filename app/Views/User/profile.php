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
							<a data-bs-toggle="modal" data-bs-target="#fotoModal">
								<img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-md-4">
									<p class="label">Nama Lengkap</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['first_name']; ?> <?= $profile['last_name']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Email</p>
								</div>
								<div class="col-12 col-md-8">
									<span><?= $profile['email']; ?></span>
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
									<p><?= $profile['tempat_lahir']; ?> <?= $profile['tanggal_lahir']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Jenis Kelamin</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['jenis_klamin']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">No WhatsApp</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['phone']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Alamat</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['alamat']; ?></p>
								</div>

								<div class="col-12">
									<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal">Perbarui Profil</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<!-- modal -->

<div class="modal modal-profile" id="profileModal">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div class="row">

					<div class="col-12 col-md-12">
						<div class="modal-form">
							<h1>Perbarui Profil</h1>
							<form action="<?= site_url('profile/update/' . $profile['id'] . '/' . $profile['slug']); ?>" method="post" enctype="multipart/form-data">
								<?= csrf_field() ?>
								<input class="form-control" value="<?= $profile['first_name']; ?>" name="first_name" type="text" placeholder="nama depan" />
								<input class="form-control" value="<?= $profile['last_name']; ?>" name="last_name" type="text" placeholder="nama panggilan" />
								<input class="form-control" value="<?= $profile['phone']; ?>" name="phone" type="text" placeholder="phone" />
								<input class="form-control" value="<?= $profile['tempat_lahir']; ?>" name="tempat_lahir" type="text" placeholder="tempat lahir" />
								<input class="form-control" value="<?= $profile['tanggal_lahir']; ?>" name="tanggal_lahir" type="date" placeholder="tanggal lahir" />
								<select class="form-control" name="jenis_klamin">
									<option selected disabled>Jenis Kelamin</option>
									<option value="Laki laki">Laki Laki</option>
									<option value="Perempuan">Perempuan</option>
									<option value="lainya">lainya</option>
								</select>
								<textarea class="form-control" value="<?= $profile['alamat']; ?>" name="alamat" placeholder="alamat"></textarea>

								<div class="form-button">
									<input class="btn btn-primary" type="submit" value="Simpan">
									<button class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal modal-profile" id="fotoModal">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<!-- <div class="> -->
					<div class="card">
						<!-- klik card untuk pilih upload -->
						<label class="card-body profile-img" for="uploadPhoto">
							<img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
							<p>Besar file maksimum 10 MB.</p>
							<p>Format file JPG/JPEG/PNG.</p>
						</label>
						<input type="file" id="uploadPhoto" accept="image/jpg, image/jpeg, image/png" hidden />
					</div>
					<!-- </div> -->
					<div class="modal modal-profile" id="profileModal">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>