<!-- halaman podcast admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Pengguna</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('admin/pengguna/update/' . $pengguna['id']); ?>" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['first_name']; ?> <?= $pengguna['last_name']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['email']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['phone']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jenis Klamin</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['jenis_klamin']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['tempat_lahir']; ?>,<?= $pengguna['tanggal_lahir']; ?> " readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $pengguna['alamat']; ?>" readonly>
                </div>
                <a href="<?= site_url('admin/pengguna/update/' . $pengguna['id'] . '/' . $pengguna['slug']); ?>" class="btn btn-primary">Jadikan Konselor</a>
                <a href="<?= site_url('admin/pengguna'); ?>" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>