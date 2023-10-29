<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h2 class="text-center">Detail Presensi <?= ($student['studentname']); ?></h2>
      <a href="<?php base_url() ?>/presents/<?= $mapels['db_idmapel']; ?>" class="btn btn-primary mt-3">Kembali</a>
      <div class="row g-0">
        <div class="col">
          <div class="card-body">
            <h5 class="card-title">Nama: <?= $student['studentname']; ?></h5>
            <p class="card-text">Kelas: <?= $mapels['db_tingkatkelas']; ?> - <?= $mapels['db_namakelas']; ?></p>
            <p class="card-text">Jurusan: <?= $mapels['db_namajurusan']; ?></p>
            <p class="card-text">Mata Pelajaran: <?= $mapels['db_namamapel']; ?></p>
            <p class="card-text">Semester: <?= $mapels['db_namasemester']; ?></p>
            <p class="card-text">Tahun: <?= $mapels['db_tahunajar']; ?></p>
            <p class="card-text">Guru Pengajar: <?= $mapels['db_namaguru']; ?></p>
            <div class="row">
              <div class="col-md">
                <!-- <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right my-2">Print <i class="fa fa-print"></i></button> -->
                <a href="/presents/printpresentstudent/<?= $mapels['db_idmapel']; ?>/<?= $student['id']; ?>" class="btn btn-outline-secondary shadow float-right my-2" target="_blank">Print<i class="fa fa-print"></i></a>
              </div>  
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" rowspan="2" class="my-auto align-items-center">No</th>
                  <th scope="col" rowspan="2" class="align-items-center">Tanggal Pertemuan</th>
                  <th scope="col" colspan="4" class="text-center">Keterangan</th>
                  <th scope="col" colspan="4" class="text-center"></th>
                </tr>
                <tr>
                  <th scope="col">Hadir</th>
                  <th scope="col">Izin</th>
                  <th scope="col">Sakit</th>
                  <th scope="col">Alpha</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($studentpresents as $i) : ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td class=""><?= $i['db_date'] ?></td>
                    <td class=""><?= $i['Hadir']; ?></td>
                    <td><?= $i['Izin']; ?></td>
                    <td><?= $i['Sakit']; ?></td>
                    <td><?= $i['Tanpa Keterangan']; ?></td>
                    <td class="printhilang">
                      <!-- <a href="<?= $i['db_mapelid']; ?>/<?= $i['db_studentid']; ?>" class="btn btn-success">Detail Presensi Siswa</a> -->
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
</div>
<?= $this->endSection(); ?>