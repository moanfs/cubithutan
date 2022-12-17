<!-- halaman profile admin -->
<?= $this->extend('Layout/admin-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Profile &mdash; Admin Cubit Hutan</title>
<?= $this->endSection(); ?>
<!-- content -->
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid profile-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">X</button>
                <b>! Berhasil</b>
                <?= session()->getFlashdata('message'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card shadow">
                <div class="card-body profile-img">
                    <img src="<?= base_url('assets/profile/' . $profile['img_profile']) ?>" width="300" class="rounded img-thumbnail" />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <p class="label">Nama Lengkap</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><?= $profile['fullname']; ?></p>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="label">Email</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <span><?= $profile['email']; ?></span>
                                <span>
                                    <a href="<?= site_url('admin/ganti-email'); ?>">Ganti email</a>
                                </span>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="label">Kata Sandi</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <span>*********</span>
                                <span>
                                    <a href="<?= site_url('admin/ganti-password') ?>">Ganti kata sandi</a>
                                </span>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="label">No WhatsApp</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p>0<?= $profile['phone']; ?></p>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="label">Tempat, Tanggal Lahir</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><?= $profile['tempat_lahir']; ?>, <?= $profile['tanggal_lahir']; ?></p>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="label">Jenis Kelamin</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><?= $profile['jenis_klamin']; ?></p>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="label">Pendidikan</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><?= $profile['pendidikan']; ?></p>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="label">Alamat</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><?= $profile['alamat']; ?></p>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Perbarui Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- modal -->
<div class="modal modal-profile" id="profileModal">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-form">
                            <form action="<?= site_url('admin/episode/create'); ?>" method="POST">
                                <?= csrf_field() ?>
                                <input class="form-control" type="text" name="name" placeholder="nama podcast" />
                                <input class="btn btn-primary" type="submit" value="Tambah">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>