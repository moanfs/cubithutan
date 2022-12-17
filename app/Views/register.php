<!-- halaman register -->
<?= $this->extend('Layout/auth-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Register &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<!-- content -->
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
								<input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" type="text" name="email" placeholder="email" value="<?= set_value('email'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('email'); ?>
								</div>
								<div id="emailHelp" class="form-text ms-2">contoh : cubithutan@gmail.com</div>

								<input class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" type="text" name="phone" placeholder="whatsapp" value="<?= set_value('phone'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('phone'); ?>
								</div>
								<div id="emailHelp" class="form-text ms-2">contoh : 08123456789</div>
								<input class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" type="text" name="fullname" placeholder="nama lengkap" value="<?= set_value('fullname'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('fullname'); ?>
								</div>
								<input class="form-control <?= ($validation->hasError('callname')) ? 'is-invalid' : ''; ?>" type="text" name="callname" placeholder="nama pangilan" value="<?= set_value('callname'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('callname'); ?>
								</div>
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