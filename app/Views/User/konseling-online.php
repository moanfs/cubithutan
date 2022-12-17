<!-- halaman konseling individual online -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Konseling Online &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<main>
	<div class="container">
		<div class="konseling-page">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="konseling-topics">
						<p>Pilih Topik Konseling</p>
						<div class="row">
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-arrow-through-heart"></i>
									<p>Percintaan</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-person-fill-exclamation"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-person-slash"></i>
									<p>Stress</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-person-down"></i>
									<p>Hopelessness</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-person-workspace"></i>
									<p>Karir</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-clipboard2-pulse"></i>
									<p>Prospek kerja</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-bookmark-star"></i>
									<p>Pemilihan jurusan kuliah</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-pc-display"></i>
									<p>Pemilihan jurusan pekerjaan</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="konseling-text">
						<h1>Konseling Individual Online</h1>
						<p>Kegiatan pelayanan konseling yang dilakukan dengan pemanfaatan media internet baik secara langsung maupun tidak langsung, dimana layanan konselingnya bisa dilakukan melalui website atau situs resmi konseling online.</p>
					</div>
				</div>
			</div>
			<div class="konseling-tujuan">
				<h2>Tujuan Dari Konseling Individual Online</h2>
				<p>Membantu mengatasi permasalahan yang dimikili konseli secara online. Konseling online ini dinilai Praktis, sehingga dapat mengurangi potensi hambatan yang dapat membuat konseling dibatalkan. Tidak menghabiskan waktu untuk perjalanan. Secara umum lebih murah ketimbang konseling tatap muka. Terhindar dari potensi rasa takut bertemu dengan kerabat/kenalan saat di lokasi konseling. Adanya konseling online juga merupakan salah satu harapan bagi konseli yang masih cemas dengan pelabelan dari masyarakat. Dengan konseling online maka individu tersebut tidak perlu takut akan stigma orang sekitar karena proses konseling dilakukan melalui media telekomunikasi.</p>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection() ?>