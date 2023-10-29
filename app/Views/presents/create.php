<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 text-center">Tambah Presensi Kehadiran</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="row g-0">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">MATA PELAJARAN: <?= $mapels['db_namamapel']; ?></h5>
                        <p class="card-text">KELAS: <?= $mapels['db_tingkatkelas']; ?> - <?= $mapels['db_namakelas']; ?></p>
                        <p class="card-text">JURUSAN: <?= $mapels['db_namajurusan']; ?></p>
                        <p class="card-text">TAHUN PELAJARAN: <?= $mapels['db_tahunajar']; ?></p>
                        <p class="card-text">SEMESTER: <?= $mapels['db_namasemester']; ?></p>
                        <p class="card-text"><b>GURU PENGAJAR: <?= $mapels['db_namaguru']; ?></b></p>
                        <p class="card-text"><b>Tanggal: <?= date('d-n-Y'); ?></b></p>
                        <?php
                        // echo date('Y-m-d');
                        // echo date('m-d-Y'),"<br>";
                        // echo "Tanggal: ", date('d'), "<br>";
                        // echo "Bulan: ", date('n'), "<br>";
                        // echo "Tahun: ", date('Y'), "<br>";
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="/presents/savepresents" method="post">
                        <?= csrf_field(); ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" class="my-auto align-items-center">No</th>
                                    <th scope="col" rowspan="2" class="align-items-center">Nama Siswa</th>
                                    <th scope="col" colspan="4" class="text-center">Presensi</th>
                                </tr>
                                <tr>
                                    <th scope="col">Hadir</th>
                                    <th scope="col">Izin</th>
                                    <th scope="col">Sakit</th>
                                    <th scope="col">Alpha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                ?>
                                <?php $no = 1 ?>
                                <?php foreach ($presents as $i) : ?>
                                    <!-- <hr> -->
                                    <!-- <br> -->
                                    <input type="number" name="matapelajaran[]" value="<?= $mapels['db_idmapel']; ?>" hidden>
                                    <!-- <br> -->
                                    <input type="number" name="kelas[]" value="<?= $mapels['db_kelasid']; ?>" hidden>
                                    <!-- <br> -->
                                    <input type="date" name="tanggal[]" id="" value="<?= date('Y-m-d'); ?>" hidden>
                                    <!-- <br> -->
                                    <input type="number" name="bulan[]" id="" value="<?= date('n'); ?>" hidden>
                                    <!-- <br> -->
                                    <input type="number" name="semester[]" id="" value="<?= $mapels['db_tahunid']; ?>" hidden>
                                    <!-- <br> -->
                                    <input type="number" name="tahun[]" id="" value="<?= $mapels['db_tahunid']; ?>" hidden>
                                    <!-- <hr> -->

                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td>
                                            <?= $i['studentname']; ?>
                                            <input type="number" name="namastudent[]" id="" value="<?= $i['db_studentid']; ?>" hidden>
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan[<?= $no - 2; ?>]" value="1" checked>
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan[<?= $no - 2; ?>]" value="2">
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan[<?= $no - 2; ?>]" value="3">
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan[<?= $no - 2; ?>]" value="4">
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Tambah Data Presensi Siswa</button>
                    </form>
                    <a href="/presents/<?= $mapels['db_idmapel']; ?>" class="btn btn-danger my-3">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>