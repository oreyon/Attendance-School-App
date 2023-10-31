<?= $this->extend('layout/templatewithoutnav'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="cetakhead" width="100%">
                <tr>
                    <td align="center"><h2 class="text-center">DETAIL PRESENSI SISWA</h2></td>
                </tr>
            </table>
            
            <table class="cetak_judul" width="100%">
              <tr>
                <td align="left"><strong>NAMA SISWA: </strong><?= $student['studentname']; ?></td>
                
              </tr>
                <tr>
                    <td align="left"><strong>MATA PELAJARAN:</strong><?= $mapels['db_namamapel']; ?></td>
                    <td align="left"><strong>SEMESTER:</strong> <?= $mapels['db_namasemester']; ?></td>
                </tr>
                <tr>
                    <td align="left"><strong>KELAS:</strong> <?= $mapels['db_tingkatkelas']; ?> - <?= $mapels['db_namakelas']; ?></td>
                    <td align="left"><strong>TAHUN PELAJARAN:</strong> <?= $mapels['db_tahunajar']; ?></td>
                </tr>
                <tr>
                    <td align="left"><strong>JURUSAN:</strong> <?= $mapels['db_namajurusan']; ?></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td align="left"><strong>GURU PENGAJAR:</strong> <?= $mapels['db_namaguru']; ?></td>
                </tr>
                <tr>
                    <!-- <td align="left"><strong>TANGGAL:</strong> <?= date('d-n-Y'); ?></td> -->
                </tr>
            </table>
            <table border="1" class="isi" width="100%">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL PERTEMUAN</th>
                    <th>HADIR</th>
                    <th>IZIN</th>
                    <th>SAKIT</th>
                    <th>ALPHA</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($studentpresents as $i) : ?>
                <tr align="">
                    <td align="center"><?= $no++; ?></td>
                    <td align="left"><?= $i['db_date']; ?></td>
                    <td align="center"><?= $i['Hadir']; ?></td>
                    <td align="center"><?= $i['Izin']; ?></td>
                    <td align="center"><?= $i['Sakit']; ?></td>
                    <td align="center"><?= $i['Tanpa Keterangan']; ?></td>
                </tr>
                <?php endforeach ?>
                
            </table>
            <table width="100%" class="cetak_footer">
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center">Banjarmasin, <?= date('d F Y'); ?></td>
                </tr>
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center"></td>
                </tr>
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center"></td>
                </tr>
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center"><br><br><br><br><br></td>
                </tr>
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center"><?= $mapels['db_namaguru']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>