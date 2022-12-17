<!-- halaman materi -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Materi &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="materi-page">
			<h1>Materi</h1>
			<div class="materi-poster">
				<?php foreach ($materi as $key => $value) : ?>
					<img width="300px" src="<?= base_url('assets/materi/' . $value['img']) ?>" />
				<?php endforeach; ?>
				<!-- <img src="<?= base_url('assets/img/poster.jpg') ?>" width="300px" />
				<img src="<?= base_url('assets/img/poster.jpg') ?>" width="300px" />
				<img src="<?= base_url('assets/img/poster.jpg') ?>" /> -->
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>