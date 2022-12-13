<!-- halaman kontak -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="contact-page">
			<h1>Hubungi Kami</h1>
			<p>Lorem ipsum dolor sit amet consectetur. Libero malesuada sollicitudin eget dignissim urna. Est posuere pellentesque sit sed. Condimentum eros nunc sapien molestie adipiscing tincidunt enim enim.</p>
			<div class="contact-item">
				<i class="bi bi-whatsapp"></i>
				<span>081234567890</span>
			</div>
			<div class="contact-item">
				<i class="bi bi-envelope-at"></i>
				<span>cubit@hutan.com</span>
			</div>
			<h1>Media Sosial</h1>
			<div class="contact-item">
				<i class="bi bi-instagram"></i>
				<span>@cubit_hutan</span>
			</div>
			<div class="contact-item">
				<i class="bi bi-twitter"></i>
				<span>@cubit_hutan</span>
			</div>
			<div class="contact-item">
				<i class="bi bi-spotify"></i>
				<span>Cubit Hutan</span>
			</div>

			<h1>Dukung Kami</h1>
			<div class="contact-item">
				<img src="<?= base_url('assets/img/saweria.jpg'); ?>" alt="https://saweria.co/cubithutan6">
			</div>
			<div class="contact-item">
				<span><a href="https://saweria.co/cubithutan6" target="_blank">Link Saweria</a></span>
			</div>

		</div>
	</div>
</main>

<?= $this->endSection() ?>