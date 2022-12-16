<?= $this->extend('Layout/user-layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="container">
        <div class="konselor-page">
            <h1>Konselor Cubit Hutan</h1>
            <?php foreach ($consoler as $key => $value) : ?>
                <div class="row konselor-item">
                    <div class="col-12 col-md-4">
                        <img class="konselor-img" src="<?= site_url('assets/img/' . $value['profile_consoler']); ?>" />
                    </div>
                    <div class="col-12 col-md-8">
                        <h2 class="konselor-name"><?= $value['first_name']; ?> <?= $value['last_name']; ?></h2>
                        <p class="konselor-desc"><?= $value['desc_consoler']; ?></p>

                        <a href="https://wa.me/<?= $value['phone']; ?>?text=Halo%20saya%20ingin%20konseling%20dengan%20cubit%20hutan" class="btn btn-primary" target="_blank">WhatsApp <i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?= $this->endSection() ?>