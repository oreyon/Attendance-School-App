<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?> 
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mt-2 text-center">Daftar Guru</h1>
                <a href="/students/create" class="btn btn-primary mb-3">Tambah Data Guru</a>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                    <?php endif; ?>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Nama Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($teacher as $i): ?>
                    <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $i['db_nisn']; ?></td>
                    <td><?= $i['db_namaguru']; ?></td>
                    <td>
                        <a href="/teachers/<?= $i['db_idguru']; ?>" class="btn btn-success">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>