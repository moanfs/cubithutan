<!-- halaman konseling individual offline -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Konseling Offline &mdash; Cubit Hutan</title>
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
						<h1>Konseling Individual Offline</h1>
						<p>Fitur konseling offline dalam website CuBit HuTan digunakan bagi konseli yang memang menginginkan konseling secara langsung dan tatap muka, didukung oleh jarak konseli dan konselor yang berdekatan sehingga bisa dilakukan konseling secara offline. Konseling offline ini harus persetujuan antara konseli dan konselor terkait apakah keduanya sanggup untuk melakukan konseling secara offline.</p>
					</div>
				</div>
			</div>
			<div class="konseling-tujuan">
				<h2>Tujuan Dari Konseling Individual Offline</h2>
				<P>Konseling Offline bertujuan untuk melaksanakan konseling secara lebih nyaman dan tanpa terganggu oleh kondisi sinyal sehingga membuat proses konseling berjalan lebih nyaman dan lancar. Dan setiap orang memiliki keinginan atau kenyamanan yang berbeda, ada yang nyaman secara langsung tatap muka maka pilihan layanan konseling offline ini cocok dan sangat berguna.</p>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection() ?>