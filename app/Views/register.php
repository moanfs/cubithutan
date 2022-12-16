<!-- halaman register -->

<?= $this->extend('Layout/auth-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container mt-5">
		<div class="auth-page">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<a href="<?= site_url('/'); ?>">
								<img src="<?= base_url('assets/img/logo.png') ?>" />
							</a>
							<p>Yuk Buat Akun</p>
							<form class="auth-form" action="<?= site_url('register'); ?>" method="post">
								<?= csrf_field() ?>
								<input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" type="email" name="email" placeholder="email" value="<?= set_value('email'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('email'); ?>
								</div>
								<input class="form-control <?= ($validation->hasError('first_name')) ? 'is-invalid' : ''; ?>" type="text" name="first_name" placeholder="nama depan" value="<?= set_value('first_name'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('first_name'); ?>
								</div>
								<input class="form-control" type="text" name="last_name" placeholder="nama belakang" value="<?= set_value('last_name'); ?>" />

								<input class="form-control <?= ($validation->hasError('pass_hash')) ? 'is-invalid' : ''; ?>" type="password" name="pass_hash" placeholder="password" />
								<div class="invalid-feedback">
									<?= $validation->getError('pass_hash'); ?>
								</div>
								<button class="btn btn-primary" type="submit">Daftar</button>
							</form>
							<span>Sudah Memiliki Akun? <a href="<?= site_url('login') ?>">Masuk Sekarang</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>