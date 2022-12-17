<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Konselor &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<main>

    <div class="container">
        <div class="konselor-page">
            <h1>Konselor Cubit Hutan</h1>
            <?php foreach ($consoler as $key => $value) : ?>
                <div class="row konselor-item">
                    <div class="col-12 col-md-4">
                        <img class="konselor-img" src="<?= site_url('assets/consoler/' . $value['profile_consoler']); ?>" class="rounded img-thumbnail" />
                    </div>
                    <div class="col-12 col-md-8">
                        <h2 class="konselor-name"><?= $value['fullname']; ?></h2>
                        <p class=""><?= $value['pendidikan']; ?></p>
                        <p class=""><?= $value['kuliah']; ?></p>
                        <p class="konselor-desc"><?= $value['desc_consoler']; ?></p>
                        <a href="https://wa.me/62<?= $value['phone']; ?>?text=Halo%20saya%20ingin%20konseling%20dengan%20cubit%20hutan %0A1. Nama Lengkap : %0A2. Nama Penggilan : %0A3. Jenis Klamin :  %0A4. Tempat dan Tanggal Lahir :  %0A5. Usia Saat Pemeriksaan : %0A6. Pendidikan : %0A7. Alamat : %0A8. No Handphone : %0A9. Agama :  %0A10. Anak ke :  %0A11. Topik Konseling / Permasalahan : " class="btn btn-primary" target="_blank">WhatsApp <i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?= $this->endSection() ?>