<!-- halaman materi admin -->

<?= $this->extend('layout/admin-layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Materi</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <button class="btn btn-primary">Tambah Poster</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Poster</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="<?= base_url('assets/img/poster.jpg') ?>" />
                            </td>
                            <td>
                                1/2/23
                            </td>
                            <td>
                                <button class="btn btn-primary">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>