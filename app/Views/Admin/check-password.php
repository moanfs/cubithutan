<!-- halaman login -->

<?= $this->extend('Layout/auth-layout2') ?>

<?= $this->section('content') ?>

<main>
    <div class="container">
        <div class="auth-page">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?= site_url('admin/profile'); ?>">
                                <img src="<?= base_url('assets/img/logo.png') ?>" />
                            </a>
                            <p>Ganti Password</p>
                            <form class="auth-form" method="post" action="<?= site_url('ganti-pass/'); ?>">
                                <?= csrf_field() ?>
                                <input class="form-control" type="text" name="pass_hash" placeholder="Masukan Lama" />
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>