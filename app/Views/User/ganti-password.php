<!-- halaman login -->
<?= $this->extend('Layout/auth-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Ganti Password &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<main>
    <div class="container">
        <div class="auth-page">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?= site_url('profile'); ?>">
                                <img src="<?= base_url('assets/img/logo.png') ?>" />
                            </a>
                            <?php if (session()->getFlashdata('message')) : ?>
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <?= session()->getFlashdata('message'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <form class="auth-form" method="post" action="<?= site_url('ganti-password/' . session('id')) ?>">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ganti Passowrd</label>
                                    <input type="password" class="form-control <?= ($validation->hasError('pass_old')) ? 'is-invalid' : ''; ?>"" name=" pass_old" id="session" placeholder="password lama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pass_old'); ?>
                                    </div>
                                    <input type="password" class="form-control <?= ($validation->hasError('pass_hash')) ? 'is-invalid' : ''; ?>"" name=" pass_hash" id="session" placeholder="password Baru">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pass_hash'); ?>
                                    </div>
                                    <input type="password" class="form-control <?= ($validation->hasError('pass_very')) ? 'is-invalid' : ''; ?>"" name=" pass_very" id="session" placeholder="Masukan password baru ulang">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pass_very'); ?>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>