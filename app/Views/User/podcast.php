<!-- halaman podcast -->

<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>

<main>
	<div class="container">
		<div class="podcast-page">
			<h1>Podcast Cubit Hutan</h1>
			<p>Mendengarkan cerita orang lain dapat membantu mendapatkan prespektif lain, loh</p>
			<div class="podcast-playlist">
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/1tMsuM06OQmBTKtLBP0TYm?si=96fbd28b78bc44ab"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/6reBRsYux87Lt6xLSdkG0M?si=3284e9c8061845f4"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/4owOYNFwxXICMQwrog9LNK?si=4004245b3ebc4ad2"></iframe>
				<iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/4iGrj9Dkttq86TkI1lvDOG?si=c7b83f7cb9094931"></iframe>
			</div>
		</div>
	</div>
</main>

<?= $this->endSection() ?>