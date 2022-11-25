<!-- halaman materi -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="materi-page">
			<h1>Materi</h1>
			<div class="materi-poster">
				<img src="<?= base_url('assets/img/poster.jpg') ?>" />
				<img src="<?= base_url('assets/img/poster.jpg') ?>" width="300px" />
				<img src="<?= base_url('assets/img/poster.jpg') ?>" width="300px" />
				<img src="<?= base_url('assets/img/poster.jpg') ?>" />
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>