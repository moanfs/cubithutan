<!-- halaman podcast admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid podcast-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Podcast</h1>

    <div class="card shadow">
        <div class="card-header py-3">
            <a class="btn btn-primary" data-toggle="modal" data-target="#tambahpodcast">Tambah Episode</a>
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
                            <th>Episode</th>
                            <th>episode</th>
                            <th>session</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($podcast as $key => $value) : ?>
                            <tr>
                                <td><?= $value['link']; ?></td>
                                <td><?= $value['name']; ?></td>
                                <td><?= $value['session']; ?></td>
                                <td>
                                    <form onSubmit="return confirm('Yakin untuk menghapus?')" action="<?= site_url('admin/podcast/delete/' . $value['id']); ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" name="Hapus" value="Hapus" class="btn btn-danger">
                                    </form>
                                    <a class="btn btn-primary" href="<?= site_url('admin/podcast/edit/' . $value['id'] . '/' . $value['slug']); ?>">Edit</a>
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
                            <div class="d-flex justify-content-between mb-3">
                                <h1>Form Tambah Podcast</h1>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#tambahepisode">Tambah Episode</a>
                            </div>
                            <form action="<?= site_url('admin/podcast/create'); ?>" method="POST">
                                <?= csrf_field() ?>
                                <select name="episode" class="form-control">
                                    <option selected disabled>Pilih Session</option>
                                    <?php foreach ($episode as $row) : ?>
                                        <option value="<?= $row['id_epi']; ?>"><?= $row['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <select name="session" class="form-control">
                                    <option selected disabled>Pilih Episode</option>
                                    <option value="1">Satu</option>
                                    <option value="2">Dua</option>
                                    <option value="3">Tiga</option>
                                    <option value="4">Empat</option>
                                    <option value="5">Lima</option>
                                    <option value="6">Enam</option>
                                    <option value="7">Tujuh</option>
                                    <option value="8">Delapan</option>
                                    <option value="9">Sembilan</option>
                                    <option value="10">Sepuluh</option>
                                    <option value="11">Sebelas</option>
                                    <option value="12">Dua Belas</option>
                                    <option value="13">Tiga Belas</option>
                                    <option value="14">Empat Belas</option>
                                    <option value="15">Lima Belas</option>
                                    <option value="16">Enam Belas</option>
                                    <option value="17">Tuju Belas</option>
                                    <option value="18">Delapan Belas</option>
                                    <option value="19">Sembilan Belas</option>
                                    <option value="20">Dua Puluh</option>
                                </select>
                                <input class="form-control" type="text" name="link" placeholder="link" />
                                <input class="btn btn-primary" type="submit" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-profile" id="tambahepisode">
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
                            <form action="<?= site_url('admin/episode/create'); ?>" method="POST">
                                <?= csrf_field() ?>
                                <input class="form-control" type="text" name="name" placeholder="nama podcast" />
                                <input class="btn btn-primary" type="submit" value="Tambah">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>