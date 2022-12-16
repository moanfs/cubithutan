<!-- halaman podcast admin -->

<?= $this->extend('Layout/admin-layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid materi-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Podcast</h1>

    <div class="card shadow">
        <div class="card-body">
            <?php if (session()->getFlashdata('update')) : ?>
                <div class="alert alert-info alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">X</button>
                        <b>! Berhasil</b>
                        <?= session()->getFlashdata('update'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <form action="<?= site_url('admin/podcast/update/' . $podcast['id'] . '/' . $podcast['slug']); ?>" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Episode</label>
                    <select name="episode" class="form-control">
                        <option selected disabled>Pilih Episode</option>
                        <?php foreach ($episode as $row) : ?>
                            <option value="<?= $row['id_epi']; ?>" <?php if ($podcast['id_episode'] == $row['id_epi']) : ?>selected <?php endif; ?>><?= $row['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Session</label>
                    <select name="session" class="form-control">
                        <option value="1" <?php if ($podcast['id_episode'] == 1) : ?>selected <?php endif; ?>>satu</option>
                        <option value="2" <?php if ($podcast['id_episode'] == 2) : ?>selected <?php endif; ?>>Dua</option>
                        <option value="3" <?php if ($podcast['id_episode'] == 3) : ?>selected <?php endif; ?>>Tiga</option>
                        <option value="4" <?php if ($podcast['id_episode'] == 4) : ?>selected <?php endif; ?>>Empat</option>
                        <option value="5" <?php if ($podcast['id_episode'] == 5) : ?>selected <?php endif; ?>>Lima</option>
                        <option value="6" <?php if ($podcast['id_episode'] == 6) : ?>selected <?php endif; ?>>Enam</option>
                        <option value="7" <?php if ($podcast['id_episode'] == 7) : ?>selected <?php endif; ?>>Tujuh</option>
                        <option value="8" <?php if ($podcast['id_episode'] == 8) : ?>selected <?php endif; ?>>Delapan</option>
                        <option value="9" <?php if ($podcast['id_episode'] == 9) : ?>selected <?php endif; ?>>Sembilan</option>
                        <option value="10" <?php if ($podcast['id_episode'] == 10) : ?>selected <?php endif; ?>>Sepuluh</option>
                        <option value="11" <?php if ($podcast['id_episode'] == 11) : ?>selected <?php endif; ?>>Sebelas</option>
                        <option value="12" <?php if ($podcast['id_episode'] == 12) : ?>selected <?php endif; ?>>Dua Belas</option>
                        <option value="13" <?php if ($podcast['id_episode'] == 13) : ?>selected <?php endif; ?>>Tiga Belas</option>
                        <option value="14" <?php if ($podcast['id_episode'] == 14) : ?>selected <?php endif; ?>>Empat Belas</option>
                        <option value="15" <?php if ($podcast['id_episode'] == 15) : ?>selected <?php endif; ?>>Lima Belas</option>
                        <option value="16" <?php if ($podcast['id_episode'] == 16) : ?>selected <?php endif; ?>>Enam Belas</option>
                        <option value="17" <?php if ($podcast['id_episode'] == 17) : ?>selected <?php endif; ?>>Tuju Belas</option>
                        <option value="18" <?php if ($podcast['id_episode'] == 18) : ?>selected <?php endif; ?>>Delapan Belas</option>
                        <option value="19" <?php if ($podcast['id_episode'] == 19) : ?>selected <?php endif; ?>>Sembilan Belas</option>
                        <option value="20" <?php if ($podcast['id_episode'] == 20) : ?>selected <?php endif; ?>>Dua Puluh</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pocast</label>
                    <?= $podcast['link']; ?>
                    <input type="text" class="form-control" name="link" id="session" placeholder="link">
                </div>
                <input type="submit" class="btn btn-primary" value="Update">
                <a href="<?= site_url('admin/podcast'); ?>" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>