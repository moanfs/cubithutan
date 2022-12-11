<!-- halaman login -->

<?= $this->extend('layout/auth-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="auth-page">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<img src="<?= base_url('assets/img/logo.png') ?>" />
							<p>Yuk Masuk Dulu!</p>
							<form class="auth-form" action="<?= site_url('auth'); ?>" method="post">
								<?= csrf_field() ?>
								<input class="form-control is-invalid" type="text" name="email" placeholder="Masukan email atau nomor hp" />
								<span class="invalid-feedback">erorr</span>
								<input class="form-control" type="password" name="pass_hash" placeholder="Masukan kata sandi" />
								<!-- <span class="invalid-feedback">erorr</span> -->
								<a href="<?= site_url('lupa-password') ?>">Lupa Kata Sandi?</a>
								<button class="btn btn-primary" type="submit">Masuk</button>

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