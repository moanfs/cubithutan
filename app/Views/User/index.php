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
						<div class="hero-online-chat">
							<i class="bi bi-chat-right-text"></i>
							<div>
								<h2>Percakapan obrolan online</h2>
								<p>Mulai percakapan obrolan online untuk mencurahkan keluh kesah</p>
							</div>
						</div>
						<div class="hero-voice-chat">
							<i class="bi bi-telephone-inbound"></i>
							<div>
								<h2>Percakapan Suara</h2>
								<p>Mulai percakapan suara untuk mencurahkan keluh kesah</p>
							</div>
						</div>
						<div class="hero-offline-chat">
							<i class="bi bi-people"></i>
							<div>
								<h2>Percakapan Tatap Muka</h2>
								<p>Lebih dekat lagi dengan malakukan pertemuan tatap muka</p>
							</div>
						</div>
						<div class="hero-podcast">
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

	<div class="tour">
		<div class="container">
			<h1>Cara Konseling di Cubit Hutan</h1>
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body">
							<i class="bi bi-journal-bookmark-fill"></i>
							<h2>1. Pilih Topik Permasalahan</h2>
							<p>Cat ipsum dolor sit amet, snuggles up to shoulders or knees and purrs you to sleep. Stand with legs in litter box </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body">
							<i class="bi bi-send-fill"></i>
							<h2>2. Hubungi Cubit Hutan</h2>
							<p>Cat ipsum dolor sit amet, snuggles up to shoulders or knees and purrs you to sleep. Stand with legs in litter box </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body">
							<i class="bi bi-chat-left-quote-fill"></i>
							<h2>3. Mulai Konsultasi</h2>
							<p>Cat ipsum dolor sit amet, snuggles up to shoulders or knees and purrs you to sleep. Stand with legs in litter box </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="podcast">
		<div class="container">
			<div class="podcast-heading">
				<h1>Dengarkan Kami Lewat Podcast</h1>
				<p>Mendengarkan cerita orang lain dapat membantu mendapatkan prespektif lain, loh</p>
			</div>
			<div class="podcast-playlist">
				<!-- <iframe class="podcast-latest" src="https://open.spotify.com/embed/episode/1tMsuM06OQmBTKtLBP0TYm?si=96fbd28b78bc44ab"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/6reBRsYux87Lt6xLSdkG0M?si=3284e9c8061845f4"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/4owOYNFwxXICMQwrog9LNK?si=4004245b3ebc4ad2"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/4iGrj9Dkttq86TkI1lvDOG?si=c7b83f7cb9094931"></iframe> -->
			</div>
			<a class="podcast-more" href="<?= site_url('podcast') ?>">Lihat Semua Episode →</a>
		</div>
	</div>
</main>

<?= $this->endSection() ?>