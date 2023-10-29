<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mt-2 text-center">Presensi Kehadiran</h1>
                <button onclick="window.print()" class="btn btn-outline-secondary shadow my-2">Print <i class="fa fa-print"></i></button>
                <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                <?php endif; ?>
                
                 
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Pengajar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($mapels as $i): ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $i['db_namamapel']; ?></td>
                                <td><?= $i['db_tingkatkelas']; ?> - <?= $i['db_namakelas']; ?> | <?= $i['db_namajurusan']; ?></td>
                                <td><?= $i['db_namaguru']; ?></td>
                                <td class="printhilang">
                                    <a href="/presents/<?= $i['db_idmapel']; ?>" class="btn btn-success">Detail Kelas</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
                
            </div>
        </div>
    </div>
<?= $this->endSection(); ?> 