<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
        
            <div class="col-8">
              
                <h2 class="my-3">Form Edit Data Siswa</h2>
                <!--VALIDASI  UMUM-->
                <!-- echo \Config\Services::validation()->listErrors();  -->
                  <?php if (session('validation')?->listErrors()): ?> 
                    <div class="alert alert-danger" role="alert">
                      <?= session('validation')?->listErrors() ?> 
                    </div>
                  <?php endif ?>
                <!-- VALIDASI -->

                <form action="/students/update/<?= $db_student['id']; ?>" method="post" enctype="multipart/form-data">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="slug" value="<?= $db_student['slug']; ?>">
                    <div class="mb-3 row">
                    <label for="studentname" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                    <div class="col-sm-6">
                      <!-- Validasi digunakan pada class form -->
                      <!-- teknik ternary digunakan | ternary merupakan penggunaan if else dalam satu barus -->
                      <!-- (session('validation')?->listErrors()) ?'is-invalid' : ''; -->
                      <input type="text" class="form-control <?= (session('validation')?->hasError('studentname')) ?'is-invalid' : ''; ?>" id="studentname" name="studentname" autofocus value="<?= (old('studentname')) ? old('studentname') : $db_student['studentname'] ?>">
                      <!-- Method old() digunakan untuk menyimpan variabel yang sudah di inputkan pada form, diambil dari var/name pada form-->
                      <div class="invalid-feedback">
                        Nama telah digunakan dari html
                        <br>
                        <?= (session('validation')?->getError('studentname')),"dari method"; ?>
                      </div>
                      <!-- validasi form end -->
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                    <div class="col-sm-6">
                      <!-- <input type="text" class="form-control" id="kelas" name="kelas" value="<?//= (old('kelas')) ? old('kelas') : $db_student['kelas'] ?>"> -->
                      <select name="kelas" id="kelas" class="form-control">
                        <?php foreach ($class as $i): ?>
                          <option value="<?= (old('kelas')) ? old('kelas') : $i['db_idkelas']; ?>"><?= (old('kelas')) ? old('kelas') : $i['db_tingkatkelas']; ?> - <?= $i['db_namakelas']; ?> | <?= $i['db_namajurusan']; ?></option>  
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-6">
                      <!-- <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?//= (old('jurusan')) ? old('jurusan') : $db_student['jurusan'] ?>"> -->
                      <select class="form-control" name="jurusan" id="jurusan">
                        <?php foreach ($jurusan as $i): ?>
                          <option value="<?= (old('jurusan')) ? old('jurusan') : $i['db_idjurusan']; ?>"><?= (old('jurusan')) ? old('jurusan') : $i['db_namajurusan']; ?></option>
                        <?php endforeach; ?>
                        
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="sampul" class="col-sm-3 col-form-label">Upload Foto</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control <?= (session('validation')?->getError('sampul')) ?'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $db_student['sampul'] ?>" >
                      <div class="invalid-feedback">
                        Gambar belum di upload
                        <br>
                        <?= (session('validation')?->getError('sampul')),"dari method"; ?>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" onclick="return confirm('Apakah anda yakin akan memperbarui data <?= $db_student['studentname']; ?>?');">Edit Data Siswa</button>
                </form>
                <a href="/students/<?= $db_student['slug']; ?>" class="btn btn-danger my-3">Batalkan</a>  
              </div>
        </div>
    </div>
<?= $this->endSection(); ?>