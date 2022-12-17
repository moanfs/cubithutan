<!-- halaman materi admin -->

<?= $this->extend('Layout/admin-layout') ?>
<!-- title -->
<?= $this->Section('title') ?>
<title>Materi &mdash; Admin Cubit Hutan</title>
<?= $this->endSection(); ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Materi</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <a class="btn btn-primary" data-toggle="modal" data-target="#tambahmateri">Tambah Materi</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">X</button>
                            <b>! Berhasil</b>
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">X</button>
                            <b>! Gagal</b>
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('delete')) : ?>
                    <div class="alert alert-warning alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">X</button>
                            <b>! Berhasil</b>
                            <?= session()->getFlashdata('delete'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Poster</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materi as $key => $value) : ?>
                            <tr>
                                <th><?= $key + 1; ?></th>
                                <td><?= $value['name']; ?></td>
                                <td><img src="<?= base_url('assets/materi/' . $value['img']) ?>" /></td>
                                <td>
                                    <a class="btn btn-primary" href="<?= site_url('admin/materi/edit/' . $value['id'] . '/' . $value['slug']); ?>">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<div class="modal modal-profile" id="tambahmateri">
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
                            <h1>Form Tambah Materi</h1>
                            <form action="<?= site_url('admin/materi/create'); ?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nama Materi *</label>
                                    <input type="text" class="form-control" name="name" id="session" placeholder="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Gambar Poster *</label>
                                    <input type="file" class="form-control" name="img">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" name="desc">
                                </div>
                                <input class="btn btn-primary" type="submit" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>