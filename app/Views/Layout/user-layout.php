<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cubit Hutan</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
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

	footer
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>