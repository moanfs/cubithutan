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

	<!-- this content -->
	<?= $this->renderSection('content') ?>
	<footer class="auth-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
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
				<div class="col-12">
					<p> &copy; Cubit Hutan <?= date('Y') ?></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript -->
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>