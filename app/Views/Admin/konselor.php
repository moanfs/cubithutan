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
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Phone</th>
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
                                <td><a href=""></a></td>
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