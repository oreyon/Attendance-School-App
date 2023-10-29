<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                    <div class="form-group">
                        <label for="kelas">Pilih Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                             <option value="all" selected>SEMUA KELAS</option>
                            <?php
                                foreach ($class as $i):
                             ?>
                            <option value="<?= $i['db_idkelas']; ?>"><?= $i['db_tingkatkelas']; ?>-<?= $i['db_namakelas']; ?> | <?= $i['db_namajurusan']; ?></option>
                             <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" value="Cari Kelas" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="mt-2 text-center">Daftar Kelas</h1>
                <a href="/classes/create" class="btn btn-primary mb-3">Tambah Data Kelas</a>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                    <?php endif; ?>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Wali Kelas</th>
                    <th scope="col">Konsentrasi Keahlian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    
                    <?php foreach($class as $i): ?>
                  
                    <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $i['db_tingkatkelas']; ?>-<?= $i['db_namakelas']; ?></td>
                    <td><?= $i['db_namaguru']; ?></td>
                    <td><?= $i['db_namajurusan']; ?></td>
                    <td>
                        <a href="/classes/<?= $i['db_idkelas']; ?>" class="btn btn-success">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>