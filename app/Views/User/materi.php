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
					<a href="<?= base_url('assets/materi/' . $value['img']) ?>" data-toggle="lightbox" data-gallery="materi">
						<img class="materi-img img-thumbnail" src="<?= base_url('assets/materi/' . $value['img']) ?>" />
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>