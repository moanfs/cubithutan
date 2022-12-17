<!-- halaman podcast admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Materi</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Judul Materi</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $materi['name']; ?>">
                </div>
                <div class="mb-3">
                    <img src="<?= base_url('assets/materi/' . $materi['img']); ?>" alt="" height="400" class="mb-2 shadow">
                    <input type="file" class="form-control" name="img" id="session"">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="desc" id="session" value="<?= $materi['desc']; ?>">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>