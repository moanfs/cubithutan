<!-- halaman podcast admin -->

<?= $this->extend('layout/admin-layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid podcast-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Podcast</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahpodcast">Tambah Episode</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Episode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($podcast as $key => $value) : ?>
                            <tr>
                                <td>
                                    <iframe class="podcast-episode" src="<?= $value['link']; ?>"></iframe>
                                </td>
                                <td>
                                    <form onSubmit="return confirm('Yakin untuk menghapus?')" action="<?= site_url('admin/podcast/delete/' . $value['id']); ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" name="Hapus" value="Hapus" class="btn btn-danger">
                                    </form>
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

<div class="modal modal-profile" id="tambahpodcast">
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
                            <h1>Form Tambah Podcast</h1>
                            <form action="<?= site_url('admin/podcast/create'); ?>" method="POST">
                                <?= csrf_field() ?>
                                <input class="form-control" type="text" name="name" placeholder="nama podcast" />
                                <input class="form-control" type="text" name="link" placeholder="link" />
                                <input class="form-control" type="text" name="desc" placeholder="deskripsi" />
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>