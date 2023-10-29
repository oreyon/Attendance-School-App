<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <div class="col">
            <h2 class="text-center">Detail Data Siswa</h2>
            <a href="/students" class="btn btn-primary mt-3">Kembali</a>
            <div class="card mb-3 mt-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/photos/<?= ($student['sampul']); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $student['studentname']; ?></h5>
                            <p class="card-text"><b><?= $student['db_tingkatkelas'], " - ", $student['db_namakelas']; ?> | <?= $student['db_namajurusan']; ?></b></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="/students/edit/<?= $student['slug']; ?>" class="btn btn-warning">Edit Data</a>
                            <!-- <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-danger">Hapus Data</a> -->

                            <form action="/students/<?= $student['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data <?= $student['studentname']; ?>? | Data tidak dapat dikembalikan');">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>