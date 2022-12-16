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
                            <a href="<?= site_url('profile'); ?>">
                                <img src="<?= base_url('assets/img/logo.png') ?>" />
                            </a>
                            <p>email anda <?= $email['email']; ?></p>
                            <form class="auth-form" method="post" action="<?= site_url('admin/ganti-email') ?>">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Email Baru</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"" name=" email" id="session" value="<?= set_value('email'); ?>" placeholder="email baru">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
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