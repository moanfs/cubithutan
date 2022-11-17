<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cubit Hutan</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- google font kanit roboto -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
</head>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url('/') ?>">
				<img src="<?= base_url('assets/img/logo.png') ?>" />
			</a>

			<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMain">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarMain">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
							Peer Konseling
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item">Individual Online</li>
							<li class="dropdown-item">Individual Offline</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Curhat
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Podcast
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Tentang Kami
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Kontak
						</a>
					</li>
				</ul>

				<div class="navbar-right">
					<img src="<?= base_url('assets/img/avatar.png') ?>" />
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
							Malika
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item">Profil Saya</li>
							<li class="dropdown-item">Keluar</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<?= $this->renderSection('content') ?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3">
					<a class="footer-link" href="#">Konseling Individual Online</a>
					<a class="footer-link" href="#">Konseling Individual Offline</a>
					<a class="footer-link" href="#">Curhat</a>
					<a class="footer-link" href="#">Podcast</a>
				</div>
				<div class="col-12 col-md-2">
					<a class="footer-link" href="#">Tentang Kami</a>
					<a class="footer-link" href="#">Kontak</a>
				</div>
				<div class="col-12 col-md-2">
					<p>Media Sosial</p>
					<div>
						<i class="bi bi-instagram"></i>
						<i class="bi bi-twitter"></i>
						<i class="bi bi-whatsapp"></i>
						<i class="bi bi-spotify"></i>
					</div>
				</div>
				<div class="col-12 col-md-5 order-md-first">
					<p>
						Lorem ipsum dolor sit amet consectetur. At gravida tristique proin egestas etiam viverra orci massa. Dolor in hac tortor maecenas venenatis.
					</p>
					<div class="footer-img">
						<img src="<?= base_url('assets/img/logo.png') ?>" />
					</div>
					<p>Copyright 2022 Cubit Hutan</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript -->
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>