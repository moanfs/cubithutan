<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title -->
	<?= $this->renderSection('title'); ?>

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
						<a class="nav-link" href="<?= site_url('consoler') ?>">Konselor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('tentang-kami') ?>">Tentang Kami</a>
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
						<img class="nav-avatar" src="<?= base_url('assets/profile/' . userlogin()->img_profile) ?>" />
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
								<?= userlogin()->callname; ?>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li class="dropdown-item">
									<a class="nav-link" href="<?= site_url('profile/'); ?>">Profil Saya</a>
								</li>
								<?php if (userlogin()->id_group == 2) : ?>
									<li class="dropdown-item">
										<a class="nav-link" href="<?= site_url('profile/konselor'); ?>">Profile Konselor</a>
									</li>
								<?php endif; ?>
								<div class="dropdown-divider"></div>
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

	<?= $this->renderSection('content') ?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3">
					<a class="footer-link" href="<?= site_url('konseling/online') ?>">Konseling Individual Online</a>
					<a class="footer-link" href="<?= site_url('konseling/offline') ?>">Konseling Individual Offline</a>
					<a class="footer-link" href="<?= site_url('curhat') ?>">Curhat</a>
					<a class="footer-link" href="<?= site_url('podcast') ?>">Podcast</a>
					<a class="footer-link" href="<?= site_url('materi') ?>">Materi</a>

				</div>
				<div class="col-12 col-md-2">
					<a class="footer-link" href="<?= site_url('tentang-kami') ?>">Tentang Kami</a>
					<a class="footer-link" href="<?= site_url('kontak') ?>">Kontak</a>
				</div>
				<div class="col-12 col-md-2">
					<p>Media Sosial</p>
					<div>
						<a href="https://instagram.com/cubithutan_?igshid=NDk5N2NlZjQ=" target="_blank">
							<i class="bi bi-instagram"></i>
						</a>
						<a href="https://twitter.com/CubitHutan" target="_blank">
							<i class="bi bi-twitter"></i>
						</a>
						<a href="https://open.spotify.com/show/6JAP3DCWjl3Rf36YqqUfZF?si=kTtFJReTTiGw6ii-WL9O0A&utm_source=copy-link" target="_blank">
							<i class="bi bi-spotify"></i>
						</a>
					</div>
				</div>
				<div class="col-12 col-md-5 order-md-first">
					<p>
						Dukung selalu kami
					</p>
					<!-- <div class="footer"> -->
					<a href="https://saweria.co/cubithutan6" class="mb-5">
						<img src="<?= base_url('assets/img/saweria.jpg') ?>" width="140" />
					</a>
					<!-- </div> -->
					<p class="mt-2">&copy; Cubit Hutan <?= date('Y') ?></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript -->
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bs5-lighbox.min.js') ?>"></script>
</body>

</html>