<!-- halaman ganti email user -->

<?= $this->extend('Layout/auth-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="auth-page">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<p>Ganti Email</p>
							<form class="auth-form" method="post">
								<?= csrf_field() ?>
								<input class="form-control" type="password" name="password" placeholder="Masukkan password lama anda" />
								<input class="form-control" type="email" name="email" placeholder="Masukkan email baru anda" />
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