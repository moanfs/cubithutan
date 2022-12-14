<!-- halaman podcast -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Podcast &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="podcast-page">
			<h1>Podcast Cubit Hutan</h1>
			<p>Mendengarkan cerita orang lain dapat membantu mendapatkan prespektif lain, loh</p>
			<div class="podcast-playlist">
				<?php foreach ($podcast as $key => $value) : ?>
					<?= $value['link'] ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>