<!-- halaman podcast admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Konselor</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nama Konselor</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['fullname']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['callname']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['email']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['phone']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['pendidikan']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jenis Klamin</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['jenis_klamin']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['tempat_lahir']; ?>,<?= $konselor['tanggal_lahir']; ?> " readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="link" id="session" value="<?= $konselor['alamat']; ?>" readonly>
                </div>
                <a href="<?= site_url('admin/konselor/update/' . $konselor['id'] . '/' . $konselor['slug']); ?>" class="btn btn-primary">Jadikan Pengguna</a>
                <a href="<?= site_url('admin/konselor'); ?>" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>