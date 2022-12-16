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
	<nav class="navbar navbar-expand-lg fixed-top">
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
							<li class="dropdown-item">
								<a class="nav-link" href="<?= site_url('konseling/online') ?>">Individual Online</a>
							</li>
							<li class="dropdown-item">
								<a class="nav-link" href="<?= site_url('konseling/offline') ?>">Individual Offline</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('curhat') ?>">Curhat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('podcast') ?>">Podcast</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('materi') ?>">Materi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('tentang-kami') ?>">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('consoler') ?>">Konselor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
					</li>
				</ul>

				<div class="navbar-right">
					<?php if (!session('id')) : ?>
						<!-- sebelum login -->
						<button class="nav-button"><a href="<?= site_url('login') ?>">Masuk</a></button>
					<?php else : ?>
						<!-- setelah login -->
						<img src="<?= base_url('assets/img/avatar.png') ?>" />
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
								<?= userlogin()->first_name; ?>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-item">
									<a class="nav-link" href="<?= site_url('profile/' . userlogin()->id . '/' . userlogin()->slug); ?>">Profil Saya</a>
								</li>
								<li class="dropdown-item">
									<a class="nav-link" href="<?= site_url('logout'); ?>">Logout</a>
								</li>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</nav>

	<!-- this content -->
	<?= $this->renderSection('content') ?>

	<!-- javascript -->
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>