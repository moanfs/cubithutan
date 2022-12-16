<!-- halaman profile admin -->

<?= $this->extend('Layout/admin-layout') ?>

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
                    <img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Nama Lengkap</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <p><?= $profile['first_name']; ?> <?= $profile['last_name']; ?></p>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Email</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <span><?= $profile['email']; ?></span>
                            <span>
                                <a href="<?= site_url('admin/ganti-email'); ?>">Ganti email</a>
                            </span>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Kata Sandi</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <span>*********</span>
                            <span>
                                <a href="<?= site_url('admin/ganti-password') ?>">Ganti kata sandi</a>
                            </span>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Tempat, Tanggal Lahir</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <p><?= $profile['tempat_lahir']; ?> <?= $profile['tanggal_lahir']; ?></p>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Jenis Kelamin</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <p><?= $profile['jenis_klamin']; ?></p>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">No WhatsApp</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <p><?= $profile['phone']; ?></p>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Alamat</p>
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
<!-- /.container-fluid -->

<!-- modal -->

<div class="modal modal-profile" id="profileModal">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="modal-form">
                            <h1>Perbarui Profil</h1>
                            <form action="<?= site_url('admin/profile/update/' . $profile['id']); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="mb-2">
                                    <label for="namadepan" class="form-label">Nama Depan</label>
                                    <input class="form-control" value="<?= $profile['first_name']; ?>" name="first_name" type="text" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nama Depan</label>
                                    <input class="form-control" value="<?= $profile['last_name']; ?>" name="last_name" type="text" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">WhatsApp</label>
                                    <input class="form-control" value="<?= $profile['phone']; ?>" name="phone" type="number" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tempat lahir</label>
                                    <input class="form-control" value="<?= $profile['tempat_lahir']; ?>" name="tempat_lahir" type="text" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" value="<?= $profile['tanggal_lahir']; ?>" name="tanggal_lahir" type="date" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_klamin">
                                        <option value="Laki laki" <?php if ($profile['jenis_klamin'] == 'Laki laki') : ?>selected <?php endif; ?>>Laki Laki</option>
                                        <option value="Perempuan" <?php if ($profile['jenis_klamin'] == 'Perempuan') : ?>selected <?php endif; ?>>Perempuan</option>
                                        <option value="lainya" <?php if ($profile['jenis_klamin'] == 'lainya') : ?>selected <?php endif; ?>>lainya</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <input class="form-control" value="<?= $profile['alamat']; ?>" name="alamat" placeholder="alamat">
                                </div>
                                <div class="form-button">
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                    <button class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-profile" id="fotoModal">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="> -->
                    <div class="card">
                        <!-- klik card untuk pilih upload -->
                        <label class="card-body profile-img" for="uploadPhoto">
                            <img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
                            <p>Besar file maksimum 10 MB.</p>
                            <p>Format file JPG/JPEG/PNG.</p>
                        </label>
                        <input type="file" id="uploadPhoto" accept="image/jpg, image/jpeg, image/png" hidden />
                    </div>
                    <!-- </div> -->
                    <div class="modal modal-profile" id="profileModal">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>