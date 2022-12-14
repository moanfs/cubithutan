<!-- halaman index user -->
<?= $this->extend('Layout/user-layout') ?>

<?= $this->section('content') ?>
<main>
	<div class="container">
		<div class="hero">
			<div class="row">
				<div class="col-12 col-md-6 bottom-space">
					<div class="hero-main">
						<div>
							<h1>Merasa Lebih Baik.</h1>
							<p>CuBiT HuTan memberikan ruang kepada setiap orang untuk mencurahkan isi hati tentang masalah percintaan dan juga memberikan kemudahan kepada setiap orang untuk menemukan jalan keluar dari setiap permasalahan yang sedang dihadapi, baik masalah pribadi maupun masalah karir.</p>
							<button class="hero-cta">
								<a href="<?= site_url('consoler'); ?>" rel="noopener">Konseling</a>
								<i class="bi bi-whatsapp"></i>
							</button>
						</div>
						<img class="hero-img" src="<?= base_url('assets/img/hero.png') ?>" />
					</div>
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
			<div class="row justify-content-center">
				<div class="card col-12 col-md-5">
					<div class="card-body">
						<h3 class="peer-konseling">Peer Konseling</h3>
						<ul>
							<li>Membantu permasalahan klinis </li>
							<p>(contoh: anxiety) dan juga masalah karir.</p>
							<li>Memberikan action plan atau solusi.</li>
							<li>Memberikan diagnosis.</li>
						</ul>
					</div>
				</div>
				<div class="card col-12 col-md-5">
					<div class="card-body">
						<h3 class="curhat">Curhat</h3>
						<ul>
							<li>Fokus membantu permasalahan percintaan.</li>
							<li>Dapat memberikan action plan/solusi dan juga tidak dapat memberikan action plan (tergantung klien hanya mau didengar atau membutuhkan saran juga).</li>
							<p>(Contoh: trauma, depresi, anxiety, bipolar, masalah seksualitas)</p>
							<li>Tidak memberikan diagnosis.</li>
						</ul>
					</div>
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
				<?php foreach ($podcast as $key => $value) : ?>
					<?= $value['link'] ?>
				<?php endforeach; ?>
			</div>
		</div>
		<a class="podcast-more" href="<?= site_url('podcast') ?>">Lihat Semua Episode →</a>
	</div>
</main>
<?= $this->endSection() ?>