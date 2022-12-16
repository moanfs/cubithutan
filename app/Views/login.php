<!-- halaman login -->

<?= $this->extend('Layout/auth-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="auth-page mt-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<a href="<?= site_url('/'); ?>">
								<img src="<?= base_url('assets/img/logo.png') ?>" />
							</a>
							<p>Yuk Masuk Dulu!</p>
							<?php if (session()->getFlashdata('message')) : ?>
								<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<?= session()->getFlashdata('message'); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if (session()->getFlashdata('error')) : ?>
								<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<?= session()->getFlashdata('error'); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if (session()->getFlashdata('success')) : ?>
								<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<?= session()->getFlashdata('success'); ?>
									</div>
								</div>
							<?php endif; ?>
							<form class="auth-form" action="<?= site_url('auth'); ?>" method="post">
								<?= csrf_field() ?>
								<input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" type="text" name="email" placeholder="Masukan email" value="<?= set_value('email'); ?>" />
								<div class="invalid-feedback">
									<?= $validation->getError('email'); ?>
								</div>
								<input class="form-control <?= ($validation->hasError('pass_hash')) ? 'is-invalid' : ''; ?>" type="password" name="pass_hash" placeholder="Masukan kata sandi" />
								<div class="invalid-feedback">
									<?= $validation->getError('pass_hash'); ?>
								</div>
								<!-- <a href="<?= site_url('lupa-password') ?>">Lupa Kata Sandi?</a> -->
								<button class="btn btn-primary " type="submit">Masuk</button>

							</form>
							<span>Belum Memiliki Akun? <a href="<?= site_url('register') ?>">Daftar akun sekarang</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>