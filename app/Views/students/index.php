<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mt-2 text-center">Daftar Siswa SMKN 3 Banjarmasin</h1>
                <a href="/students/create" class="btn btn-primary mb-3">Tambah Data Siswa</a>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                    <?php endif; ?>
                    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                    <div class="form-group">
                        <label for="kelas">Pilih Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="all">SEMUA KELAS</option>
                            <?php foreach ($class as $i): ?>
                                <option value="<?= $i['db_idkelas']; ?>"><?= $i['db_tingkatkelas']; ?>-<?= $i['db_namakelas']; ?></option>
                            <?php endforeach; ?> 
                        </select>
                             
                        <label for="jurusan" id="jurusan">Pilih Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="all">SEMUA JURUSAN</option>
                            <?php foreach ($jurusan as $i): ?>
                                <option value="<?= $i['db_idjurusan']; ?>"><?= $i['db_namajurusan']; ?></option>
                            <?php endforeach; ?>    
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" value="Cari Kelas" class="btn btn-primary">
                    </div>
                </form>
                <div class="row">
                    <div class="col-md">
                        <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right my-2">Print <i class="fa fa-print"></i></button>
                    </div>
                </div>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col" class="printhilang">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($student as $i): ?>
                    <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><img src="/photos/<?= $i['sampul']; ?>" width="50" alt="" class="sampul"></td>
                    <td><?= $i['studentname']; ?></td>
                    <td><?= $i['db_tingkatkelas']; ?>-<?= $i['db_namakelas']; ?></td>
                    <td><?= $i['db_namajurusan']; ?></td>
                    <td class="printhilang">
                        <a href="/students/<?= $i['slug']; ?>" class="btn btn-success">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>