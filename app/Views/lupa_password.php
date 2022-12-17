<!-- halaman lupa password -->
<?= $this->extend('Layout/auth-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Lupa Password &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<!-- content -->
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
							<form class="auth-form" method="post">
								<?= csrf_field() ?>
								<input class="form-control" type="text" name="email" placeholder="Masukan email atau nomor hp" />
								<button class="btn btn-primary" type="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>