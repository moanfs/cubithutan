<!-- halaman konseling individual online -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="konseling-page">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="konseling-topics">
						<p>Pilih Topik Konseling</p>
						<div class="row">
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
								</a>
							</div>
							<div class="col-3">
								<a class="konseling-item" href="#">
									<i class="bi bi-emoji-neutral"></i>
									<p>Kecemasan</p>
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
					<div class="tab-pane show active col-6" id="tujuan" tabindex="0">
						<h2>Tujuan Dari Konseling Individual Online</h2>
						<p>Membantu mengatasi permasalahan yang dimikili konseli secara online. Konseling online ini dinilai Praktis, sehingga dapat mengurangi potensi hambatan yang dapat membuat konseling dibatalkan. Tidak menghabiskan waktu untuk perjalanan. Secara umum lebih murah ketimbang konseling tatap muka. Terhindar dari potensi rasa takut bertemu dengan kerabat/kenalan saat di lokasi konseling. Adanya konseling online juga merupakan salah satu harapan bagi konseli yang masih cemas dengan pelabelan dari masyarakat. Dengan konseling online maka individu tersebut tidak perlu takut akan stigma orang sekitar karena proses konseling dilakukan melalui media </p>

					</div>
					<div class="tab-pane" id="pertanyaan" tabindex="0">
						<ul>
							<li>1. Percintaan</li>
							<li>2. Kecemasan</li>
							<li>3. Stress</li>
							<li>4. Hopelessness</li>
							<li>5. Karir</li>
							<li>6. Prospek kerja</li>
							<li>7. Pemilihan jurusan kuliah</li>
							<li>8. Pemilihan jurusan pekerjaan</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>