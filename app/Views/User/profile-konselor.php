<!-- halaman profile pengguna -->
<?= $this->extend('Layout/user-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Profile &mdash; Cubit Hutan</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<main>
    <div class="container">
        <div class="profile-page">
            <div class="row">
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <b>! Berhasil</b>
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <b>! Gagal</b>
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body profile-img">
                            <a data-bs-toggle="modal" data-bs-target="#fotoModal">
                                <p><b>Profile <?= $konselor['callname']; ?></b></p>
                                <img src="<?= base_url('assets/consoler/' . $konselor['profile_consoler'])  ?>" width="300" class="rounded img-thumbnail" />
                                <div id="emailHelp" class="form-text ms-2">Klik Gambar untuk update foto profile</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <p class="label">Nama Lengkap</p>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p><?= $konselor['fullname']; ?></p>
                                </div>

                                <div class="col-12 col-md-4">
                                    <p class="label">No WhatsApp</p>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p>0<?= $konselor['phone']; ?></p>
                                </div>

                                <div class="col-12 col-md-4">
                                    <p class="label">Pendidikan</p>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p><?= $konselor['pendidikan']; ?></p>
                                </div>

                                <div class="col-12 col-md-4">
                                    <p class="label">Universitas</p>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p><?= $konselor['kuliah']; ?></p>
                                </div>

                                <div class="col-12 col-md-4">
                                    <p class="label">Deskripsi</p>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p><?= $konselor['desc_consoler']; ?></p>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal">Perbarui Profil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
                            <h1>Perbarui Profil Konselor</h1>
                            <form action="<?= site_url('profile/konselor/update/' . $konselor['id']); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="">
                                    <label for="namadepan" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" value="<?= $konselor['fullname']; ?>" name="fullname" type="text" />
                                </div>
                                <div class="">
                                    <label for="exampleFormControlTextarea1" class="form-label">WhatsApp</label>
                                    <input class="form-control" value="0<?= $konselor['phone']; ?>" name="phone" type="text" />
                                    <span id="emailHelp" class="form-text">contoh : 08123456789</span>
                                </div>
                                <div class="">
                                    <label for="exampleFormControlTextarea1" class="form-label">Pendidikan</label>
                                    <input class="form-control" value="<?= $konselor['pendidikan']; ?>" name="pendidikan" type="text" />
                                </div>
                                <div class="">
                                    <label for="exampleFormControlTextarea1" class="form-label">Universitas</label>
                                    <input class="form-control" value="<?= $konselor['kuliah']; ?>" name="kuliah" type="text" />
                                </div>
                                <div class="">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat</label>
                                    <input class="form-control" value="<?= $konselor['desc_consoler']; ?>" name="desc_consoler" type="text" />
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
                    <h3>Perbarui Profil Konselor</h3>
                    <!-- <div class="> -->
                    <div class="card">
                        <!-- klik card untuk pilih upload -->
                        <form action="<?= site_url('profile/konsoler/ganti-foto/' . $konselor['id']); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <label class="card-body profile-img" for="uploadPhoto">
                                <img src="<?= base_url('assets/consoler/' . $konselor['profile_consoler']) ?>" width="300" class="rounded img-thumbnail" />
                                <p>Besar file maksimum 2 MB.</p>
                                <p>Format file JPG/JPEG/PNG.</p>
                            </label>
                            <input type="file" id="uploadPhoto" name="profile_consoler" class="form-control" hidden />
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-2">Simpan</button>
                            </div>
                        </form>
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