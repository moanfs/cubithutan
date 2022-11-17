<!-- halaman index user -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="hero">
			<div class="row">
				<div class="col-12 col-md-6 hero-main">
					<div>
						<h1>Merasa Lebih Baik.</h1>
						<p>Lorem ipsum dolor sit amet consectetur. Amet eget lorem rhoncus quam risus lectus sem aliquam. Augue phasellus facilisis platea porttitor. At eu at amet tellus sit eget eleifend et ut vitae.</p>
						<button class="hero-cta">
							Konseling
							<i class="bi bi-whatsapp"></i>
						</button>
					</div>
					<img class="hero-img" src="<?= base_url('assets/img/hero.png') ?>" />
				</div>
				<div class="col-12 col-md-6">
					<div class="hero-side">
						<div class="online-chat">
							<i class="bi bi-chat-right-text"></i>
							<div>
								<h2>Percakapan obrolan online</h2>
								<p>Mulai percakapan obrolan online untuk mencurahkan keluh kesah</p>
							</div>
						</div>
						<div class="voice-chat">
							<i class="bi bi-telephone-inbound"></i>
							<div>
								<h2>Percakapan Suara</h2>
								<p>Mulai percakapan suara untuk mencurahkan keluh kesah</p>
							</div>
						</div>
						<div class="offline-chat">
							<i class="bi bi-people"></i>
							<div>
								<h2>Percakapan Tatap Muka</h2>
								<p>Lebih dekat lagi dengan malakukan pertemuan tatap muka</p>
							</div>
						</div>
						<div class="podcast">
							<i class="bi bi-headphones"></i>
							<div>
								<h2>Mendengarkan Podcast</h2>
								<p>Mendengarkan podcast dengan cerita inspiratif lainnya</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="comparison">
		<div class="comparison-heading">
			<h1>Peer Konseling & Curhat</h1>
			<p>Apa sih perbedaan peer konseling dan curhat?</p>
		</div>
		<div class="comparison-items">
			<div class="card">
				<div class="card-body">
					<h3 class="peer-konseling">Peer Konseling</h3>
					<ul>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
					</ul>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h3 class="curhat">Curhat</h3>
					<ul>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
						<li>Lorem ipsum</li>
						<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>