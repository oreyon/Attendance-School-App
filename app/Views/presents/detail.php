<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Detail Presensi Kelas</h2>
            <a href="<?php base_url(); ?>/presents" class="btn btn-primary mt-3">Kembali</a>
            <div class="row g-0">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran: <?= $mapels['db_namamapel']; ?></h5>
                        <p class="card-text">Kelas: <?= $mapels['db_tingkatkelas']; ?> - <?= $mapels['db_namakelas']; ?></p>
                        <p class="card-text">Jurusan: <?= $mapels['db_namajurusan']; ?></p>
                        <p class="card-text">Tahun Pelajaran: <?= $mapels['db_tahunajar']; ?></p>
                        <p class="card-text">Semester: <?= $mapels['db_namasemester']; ?></p>
                        <p class="card-text"><b>Guru Pengajar: <?= $mapels['db_namaguru']; ?></b></p>
                        <p class="card-text"><b>Tanggal: <?= date('d-n-Y'); ?></b></p>
                        <a href="/presents/create/<?= $mapels['db_idmapel']; ?>" class="btn btn-success">Tambah Presensi Kehadiran</a>
                        <a href="<?php base_url(); ?>mapels/edit/" class="btn btn-warning">Edit Mata Pelajaran</a>
                        <form action="<?= base_url(); ?>mapels/" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus kelas? | Data tidak dapat dikembalikan');">Hapus Data</button>
                        </form>
                        <div class="row">
                            <div class="col-md">
                                <!-- <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right my-2">Print <i class="fa fa-print"></i></button> -->
                                <a href="/presents/printpresent/<?= $mapels['db_idmapel']; ?>" class="btn btn-outline-secondary shadow float-right my-2" target="_blank">Print<i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" rowspan="2" class="my-auto align-items-center">No</th>
                                <th scope="col" rowspan="2" class="align-items-center">Nama Siswa</th>
                                <th scope="col" colspan="4" class="text-center">Keterangan</th>
                                <th scope="col" rowspan="2" class="text-center">Detail</th>
                            </tr>
                            <tr>
                                <th scope="col">Hadir</th>
                                <th scope="col">Izin</th>
                                <th scope="col">Sakit</th>
                                <th scope="col">Alpha</th>
                                <!-- <th scope="col"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($presents as $i) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td class=""><?= $i['studentname'] ?></td>
                                    <td class=""><?= $i['Hadir']; ?></td>
                                    <td><?= $i['Izin']; ?></td>
                                    <td><?= $i['Sakit']; ?></td>
                                    <td><?= $i['Tanpa Keterangan']; ?></td>
                                    <td class="printhilang text-center">
                                        <a href="<?= $i['db_mapelid']; ?>/<?= $i['db_studentid']; ?>" class="fa fa-search"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>