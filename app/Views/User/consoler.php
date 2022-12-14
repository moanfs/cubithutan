<?= $this->extend('layout/user-layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="container">
        <div class="konselor-page">
            <!-- <div class="card">
                <div class="card-header">
                    Konselor Cubit Hutan
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($consoler as $key => $value) : ?>
                            <div class="card d-flex">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">

                                            <div class="card-body">
                                                <img src="<?= site_url('assets/img/' . $value['profile_consoler']); ?>" class="card-img" alt="">
                                            </div>
                                        </div>

                                        <div class="col-sm-9">

                                            <div class="card-body">
                                                <h5 class="card-title"><?= $value['first_name']; ?> <?= $value['last_name']; ?></h5>
                                                <p class="card-text"><?= $value['desc_consoler']; ?></p>

                                                <a href="https://wa.me/<?= $value['phone']; ?>?text=Halo%20saya%20ingin%20konseling%20dengan%20cubit%20hutan" class="btn btn-primary" target="_blank">WhatsApp <i class="bi bi-whatsapp"></i></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div> -->

            <h1>Konselor Cubit Hutan</h1>
            <?php foreach ($consoler as $key => $value) : ?>
                <div class="row konselor-item">
                    <div class="col-12 col-md-4">
                        <img class="konselor-img rounded" src="<?= site_url('assets/img/' . $value['profile_consoler']); ?>" />
                    </div>
                    <div class="col-12 col-md-8">
                        <h2 class="konselor-name"><?= $value['first_name']; ?> <?= $value['last_name']; ?></h2>
                        <p class="konselor-desc"><?= $value['desc_consoler']; ?> </p>

                        <a href="https://wa.me/<?= $value['phone']; ?>?text=Halo%20saya%20ingin%20konseling%20dengan%20cubit%20hutan" class="btn btn-primary" target="_blank">WhatsApp <i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?= $this->endSection() ?>