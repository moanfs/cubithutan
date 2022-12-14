<!-- halaman profile admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid profile-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

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
                                <a href="#">Ganti email</a>
                            </span>
                        </div>

                        <div class="col-12 col-md-4">
                            <p class="text-gray-900">Kata Sandi</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <span>*********</span>
                            <span>
                                <a href="#">Ganti kata sandi</a>
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
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <!-- klik card untuk pilih upload -->
                            <label class="card-body profile-img" for="uploadPhoto">
                                <img src="<?= base_url('assets/img/avatar-lg.png') ?>" />
                                <p>Besar file maksimum 10 MB.</p>
                                <p>Format file JPG/JPEG/PNG.</p>
                            </label>
                            <input type="file" id="uploadPhoto" accept="image/jpg, image/jpeg, image/png" hidden />
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="modal-form">
                            <h1>Perbarui Profil</h1>
                            <form>
                                <input class="form-control" type="text" placeholder="nama panggilan" />
                                <input class="form-control" type="text" placeholder="tempat lahir" />
                                <input class="form-control" type="text" placeholder="tanggal lahir" />
                                <input class="form-control" type="text" placeholder="jenis kelamin" />
                                <input class="form-control" type="text" placeholder="no whatsapp" />
                                <textarea class="form-control" placeholder="alamat"></textarea>

                                <div class="form-button">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>