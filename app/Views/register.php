<!-- halaman register -->

<?= $this->extend('Layout/auth-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="auth-page">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<img src="<?= base_url('assets/img/logo.png') ?>" />
							<p>Yuk Buat Akun Dulu!</p>
							<form class="auth-form" action="<?= site_url('register'); ?>" method="post">
								<input class="form-control is-invalid" name="email" type="text" placeholder="Masukan email" />
								<span class="invalid-feedback">erorr</span>
								<input class="form-control" name="first_name" type="text" placeholder="Nama Depan" />
								<input class="form-control" name="last_name" type="text" placeholder="Nama Keluarga" />
								<input class="form-control" name="pass_hash" type="text" placeholder="Masukan kata sandi" />
								<input class="form-control" name="pass_confirm" type="text" placeholder="Konfirmasi kata sandi" />
								<button class="btn btn-primary" type="submit">Masuk</button>
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