<!-- halaman konseling individual online -->
<?= $this->extend('Layout/user-layout') ?>

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
								<a class="konseling-item" href="#">
									<i class="bi bi-arrow-through-heart"></i>
									<p>Percintaan</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-fill-exclamation"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-slash"></i>
									<p>Stress</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-down"></i>
									<p>Hopelessness</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-person-workspace"></i>
									<p>Karir</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-clipboard2-pulse"></i>
									<p>Prospek kerja</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
									<i class="bi bi-bookmark-star"></i>
									<p>Pemilihan jurusan kuliah</p>
								</a>
							</div>
							<div class="col-4">
								<a class="konseling-item" href="#">
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
			<div class="konseling-tab">
				<ul class="nav nav-pills" id="tabs">
					<li class="nav-item">
						<button class="nav-link active" id="tabTujuan" data-bs-toggle="pill" data-bs-target="#tujuan">Tujuan Konseling</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" id="tabPertanyaan" data-bs-toggle="pill" data-bs-target="#pertanyaan">Seputar Pertanyaan</button>
					</li>
				</ul>
				<div class="tab-content" id="pillsContent">
					<div class="tab-pane show active col-6 mx-auto" id="tujuan" tabindex="0">
						<h2>Tujuan Dari Konseling Individual Online</h2>
						<p>Membantu mengatasi permasalahan yang dimikili konseli secara online. Konseling online ini dinilai Praktis, sehingga dapat mengurangi potensi hambatan yang dapat membuat konseling dibatalkan. Tidak menghabiskan waktu untuk perjalanan. Secara umum lebih murah ketimbang konseling tatap muka. Terhindar dari potensi rasa takut bertemu dengan kerabat/kenalan saat di lokasi konseling. Adanya konseling online juga merupakan salah satu harapan bagi konseli yang masih cemas dengan pelabelan dari masyarakat. Dengan konseling online maka individu tersebut tidak perlu takut akan stigma orang sekitar karena proses konseling dilakukan melalui media </p>

					</div>
					<div class="tab-pane" id="pertanyaan" tabindex="0">
						<ul>
							<li>Percintaan</li>
							<li>Kecemasan</li>
							<li>Stress</li>
							<li>Hopelessness</li>
							<li>Karir</li>
							<li>Prospek kerja</li>
							<li>Pemilihan jurusan kuliah</li>
							<li>Pemilihan jurusan pekerjaan</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection() ?>