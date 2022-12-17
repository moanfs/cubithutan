<!-- halaman index admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pengguna Cubit Hutan</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <h5>Daftar Pengguna</h5>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">X</button>
                        <b>! Berhasil</b>
                        <?= session()->getFlashdata('message'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No WhatsApp</th>
                            <th>Pendidikan</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengguna as $key => $value) : ?>
                            <tr>
                                <th><?= $key + 1; ?></th>
                                <td><?= $value['fullname']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['phone']; ?></td>
                                <td><?= $value['pendidikan']; ?></td>
                                <td><?= $value['jenis_klamin']; ?></td>
                                <td><a class="btn btn-primary" href="<?= site_url('admin/pengguna/edit/' . $value['id'] . '/' . $value['slug']); ?>">Lihat Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<div class="modal modal-profile" id="lihatdetail">
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
                            <h1>Lihat Detail Pengguna</h1>
                            <form onSubmit="return confirm('Yakin untuk menghapus?')" action="" method="POST">
                                <?= csrf_field() ?>
                                <label class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" name="name" value="" />

                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" name="username" value="" />

                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" name="email" value="" />

                                <label class="form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" value="" />

                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>