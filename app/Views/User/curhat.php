<!-- halaman curhat -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Curhat &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<main>
	<div class="container">
		<div class="konseling-page">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="konseling-topics">
						<p>Topik Curhat</p>
						<div class="row">
							<div class="col-3">
								<a class="konseling-item" href="<?= site_url('consoler'); ?>">
									<i class="bi bi-balloon-heart"></i>
									<p>Percintaan</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="konseling-text">
						<h1>Curhat Cubit Hutan</h1>
						<p>Fitur curhat yang tersedia dalam website CuBit HuTan ini digunakan untuk para pengguna yang ingin curhat atau menceritakan permasalahan yang dialaminya secara gratis. Bagi pengguna yang ingin mencurahkan masalahnya, fitur curhat disini sesuai keinginan pengguna atau konseli apakah curhatan mereka ingin kami beri tanggapan atau hanya ingin didengar saja, itu kembali kepada keinginan pengguna.</p>
					</div>
				</div>
			</div>
			<div class="konseling-tab">
				<ul class="nav nav-pills" id="tabs">
					<li class="nav-item">
						<button class="nav-link active">Tujuan Curhat</button>
					</li>
				</ul>
				<div class="tab-content" id="pillsContent">
					<div class="tab-pane show active" id="tujuan" tabindex="0">
						<h2>Tujuan Dari Curhat</h2>
						<p>Ketika anda merasa bahwa hidup ini tidak lagi tenang secara emosional:</p>
						<p>tujuan pada sesi ini iyalah untuk mencurahkan isi hati yang terpendam untuk meringankan isi pikiran</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection() ?>