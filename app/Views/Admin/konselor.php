<!-- halaman index admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Konselor Cubit Hutan</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <h5>Daftar Konselor</h5>
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
                            <th>No Phone</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($konselor as $key => $value) : ?>
                            <tr>
                                <th><?= $key + 1; ?></th>
                                <td><?= $value['first_name']; ?> <?= $value['last_name']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['phone']; ?></td>
                                <td>
                                    <?php if ($value['active_consoler'] == 1) : ?>
                                        <span class="badge badge-info">aktif</span>
                                    <?php else : ?>
                                        <span class="badge badge-warning">belum aktif</span>
                                    <?php endif; ?>
                                <td><a href="<?= site_url('admin/konselor/edit/' . $value['id'] . '/' . $value['slug']); ?>" class="btn btn-primary">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>