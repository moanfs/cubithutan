<!-- halaman curhat -->

<?= $this->extend('layout/user-layout') ?>

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
								<a class="konseling-item" href="#">
									<i class="bi bi-person-exclamation"></i>
									<p>Mudah gelisah</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-angry"></i>
									<p>Marah berlebihan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-video3"></i>
									<p>Sering mimpi buruk</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-fill-down"></i>
									<p>Ketakutan yang berlebihan</p>
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
						<button class="nav-link active" id="tabTujuan" data-bs-toggle="pill" data-bs-target="#tujuan">Tujuan Curhat</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" id="tabPertanyaan" data-bs-toggle="pill" data-bs-target="#pertanyaan">Seputar Pertanyaan</button>
					</li>
				</ul>
				<div class="tab-content" id="pillsContent">
					<div class="tab-pane show active" id="tujuan" tabindex="0">
						<h2>Tujuan Dari Curhat</h2>
						<p>Ketika anda merasa bahwa hidup ini tidak lagi tenang secara emosional:</p>
						<p>tujuan pada sesi ini iyalah untuk mencurahkan isi hati yang terpendam untuk meringankan isi pikiran</p>

					</div>
					<div class="tab-pane" id="pertanyaan" tabindex="0">
						<p>Seputar pertanyaan curhat</p>
						<ul>
							<li>Mudah gelisah</li>
							<li>Marah berlebihan</li>
							<li>Sering mimpi buruk</li>
							<li>Ketakutan yang berlebihan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection() ?>