<!-- halaman profile pengguna -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Profile &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="profile-page">
			<div class="row">
				<?php if (session()->getFlashdata('message')) : ?>
					<div class="alert alert-success alert-dismissible show fade">
						<div class="alert-body">
							<b>! Berhasil</b>
							<?= session()->getFlashdata('message'); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if (session()->getFlashdata('error')) : ?>
					<div class="alert alert-danger alert-dismissible show fade">
						<div class="alert-body">
							<b>! Gagal</b>
							<?= session()->getFlashdata('error'); ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body profile-img">
							<a data-bs-toggle="modal" data-bs-target="#fotoModal">
								<p><b>Profile <?= $profile['callname']; ?></b></p>
								<img src="<?= base_url('assets/profile/' . $profile['img_profile']) ?>" width="300" class="rounded img-thumbnail" />
								<div id="emailHelp" class="form-text ms-2">Klik Gambar untuk update foto profile</div>
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
									<p><?= $profile['fullname']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Email</p>
								</div>
								<div class="col-12 col-md-8">
									<span><?= $profile['email']; ?></span>
									<span>
										<a href="<?= site_url('ganti-email'); ?>">Ganti email</a>
									</span>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Kata Sandi</p>
								</div>
								<div class="col-12 col-md-8">
									<span>*********</span>
									<span>
										<a href="<?= site_url('ganti-password') ?>">Ganti kata sandi</a>
									</span>
								</div>
								<div class="col-12 col-md-4">
									<p class="label">No WhatsApp</p>
								</div>
								<div class="col-12 col-md-8">
									<p>0<?= $profile['phone']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Tempat, Tanggal Lahir</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['tempat_lahir']; ?>, <?= $profile['tanggal_lahir']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Agama</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['agama']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Jenis Kelamin</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['jenis_klamin']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Pendidikan</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['pendidikan']; ?></p>
								</div>

								<div class="col-12 col-md-4">
									<p class="label">Anak Ke</p>
								</div>
								<div class="col-12 col-md-8">
									<p><?= $profile['anakke']; ?></p>
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
							<form action="<?= site_url('profile/update/' . $profile['id']); ?>" method="post" enctype="multipart/form-data">
								<?= csrf_field() ?>
								<div class="">
									<label for="namadepan" class="form-label">Nama Lengkap</label>
									<input class="form-control" value="<?= $profile['fullname']; ?>" name="fullname" type="text" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Nama Panggilan</label>
									<input class="form-control" value="<?= $profile['callname']; ?>" name="callname" type="text" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">WhatsApp</label>
									<input class="form-control" value="0<?= $profile['phone']; ?>" name="phone" type="number" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Tempat lahir</label>
									<input class="form-control" value="<?= $profile['tempat_lahir']; ?>" name="tempat_lahir" type="text" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
									<input class="form-control" value="<?= $profile['tanggal_lahir']; ?>" name="tanggal_lahir" type="date" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Agama</label>
									<select class="form-control" name="agama">
										<option value="Islam" <?php if ($profile['agama'] == 'Islam') : ?>selected <?php endif; ?>>Islam</option>
										<option value="Katolik" <?php if ($profile['agama'] == 'Katolik') : ?>selected <?php endif; ?>>Katolik</option>
										<option value="Kristen" <?php if ($profile['agama'] == 'Kristen') : ?>selected <?php endif; ?>>Kristen</option>
										<option value="Buddha" <?php if ($profile['agama'] == 'Buddha') : ?>selected <?php endif; ?>>Buddha</option>
										<option value="Hindu" <?php if ($profile['agama'] == 'Hindu') : ?>selected <?php endif; ?>>Hindu</option>
										<option value="Khonghucu" <?php if ($profile['agama'] == 'Khonghucu') : ?>selected <?php endif; ?>>Khonghucu</option>
										<option value="Other" <?php if ($profile['agama'] == 'Other') : ?>selected <?php endif; ?>>Other</option>
									</select>
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Pendidikan</label>
									<input class="form-control" value="<?= $profile['pendidikan']; ?>" name="pendidikan" type="text" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Anak Ke</label>
									<input class="form-control" value="<?= $profile['anakke']; ?>" name="anakke" type="number" />
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
									<select class="form-control" name="jenis_klamin">
										<option value="Laki laki" <?php if ($profile['jenis_klamin'] == 'Laki laki') : ?>selected <?php endif; ?>>Laki Laki</option>
										<option value="Perempuan" <?php if ($profile['jenis_klamin'] == 'Perempuan') : ?>selected <?php endif; ?>>Perempuan</option>
										<option value="lainya" <?php if ($profile['jenis_klamin'] == 'lainya') : ?>selected <?php endif; ?>>lainya</option>
									</select>
								</div>
								<div class="">
									<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
									<input class="form-control" value="<?= $profile['alamat']; ?>" name="alamat" placeholder="alamat">
								</div>
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
					<h3>Perbarui Profil</h3>
					<!-- <div class="> -->
					<div class="card">
						<!-- klik card untuk pilih upload -->
						<form action="<?= site_url('profile/ganti-foto/' . $profile['id']); ?>" method="post" enctype="multipart/form-data">
							<?= csrf_field() ?>
							<label class="card-body profile-img" for="uploadPhoto">
								<img src="<?= base_url('assets/profile/' . $profile['img_profile']) ?>" width="300" class="rounded img-thumbnail" />
								<p>Besar file maksimum 2 MB.</p>
								<p>Format file JPG/JPEG/PNG.</p>
							</label>
							<input type="file" id="uploadPhoto" class="form-control" name="img_profile" hidden />
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn btn-primary m-2">Update</button>
							</div>
						</form>
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