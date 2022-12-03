<!-- halaman podcast admin -->

<?= $this->extend('layout/admin-layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid podcast-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Podcast</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <button class="btn btn-primary">Tambah Episode</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Episode</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <iframe class="podcast-episode" src="https://open.spotify.com/embed/episode/6reBRsYux87Lt6xLSdkG0M?si=3284e9c8061845f4"></iframe>
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