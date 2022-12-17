<!-- halaman kontak -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Kontak &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="contact-page">
			<h1>Hubungi Kami</h1>
			<div class="contact-item">
				<i class="bi bi-whatsapp"></i>
				<span><?= kontak()->phone; ?></span>
			</div>
			<div class="contact-item">
				<i class="bi bi-envelope-at"></i>
				<span><?= kontak()->email; ?></span>
			</div>
			<h1>Media Sosial</h1>
			<div class="contact-item">
				<a href="https://instagram.com/cubithutan_?igshid=NDk5N2NlZjQ=" target="_blank">
					<i class="bi bi-instagram"></i>
					<span>@cubithutan_</span>
				</a>
			</div>
			<div class="contact-item">
				<a href="https://twitter.com/CubitHutan" target="_blank">
					<i class="bi bi-twitter"></i>
					<span>@CubitHutan</span>
				</a>
			</div>
			<div class="contact-item">
				<a href="https://open.spotify.com/show/6JAP3DCWjl3Rf36YqqUfZF?si=kTtFJReTTiGw6ii-WL9O0A&utm_source=copy-link" target="_blank">
					<i class="bi bi-spotify"></i>
					<span>Cubit Hutan</span>
				</a>
			</div>

			<h1>Dukung Kami</h1>
			<div class="contact-item">
				<img src="<?= base_url('assets/img/saweria.jpg'); ?>" alt="https://saweria.co/cubithutan6" target="_blank">
			</div>
			<div class="contact-item">
				<a href="https://saweria.co/cubithutan6" target="_blank">Link Saweria</a>
			</div>

		</div>
	</div>
</main>

<?= $this->endSection() ?>