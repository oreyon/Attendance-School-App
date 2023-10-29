<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
        
            <div class="col-8">
              
                <h2 class="my-3">Form Tambah Data Siswa</h2>
                <!--VALIDASI  UMUM-->
                <!-- echo \Config\Services::validation()->listErrors();  -->
                  <?php if (session('validation')?->listErrors()): ?> 
                    <div class="alert alert-danger" role="alert">
                      <?= session('validation')?->getError() ?> 
                    </div>
                  <?php endif ?>

                
                <!-- VALIDASI -->

                <form action="/students/save" method="post" enctype="multipart/form-data" >
                  <?= csrf_field(); ?>
                    <div class="mb-3 row">
                    <label for="studentname" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                    <div class="col-sm-6">
                      <!-- Validasi digunakan pada class form -->
                      <!-- teknik ternary digunakan | ternary merupakan penggunaan if else dalam satu barus -->
                      <!-- (session('validation')?->listErrors()) ?'is-invalid' : ''; -->
                      <input type="text" class="form-control <?= (session('validation')?->getError('studentname')) ?'is-invalid' : ''; ?>" id="studentname" name="studentname" autofocus value="<?= old('studentname'); //diambil dari name/variabel input?>">
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
                      <!-- <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo old('kelas') ?>"> -->
                      <select name="kelas" id="kelas" class="form-control">
                        <?php foreach ($class as $i): ?>
                          <option value="<?= $i['db_idkelas']; ?>"><?= $i['db_tingkatkelas']; ?>-<?= $i['db_namakelas']; ?> | <?= $i['db_namajurusan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-6">
                      <!-- <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo old('jurusan') ?>"> -->
                      <select name="jurusan" id="jurusan" class="form-control">
                        <?php foreach ($jurusan as $i): ?>
                          <option value="<?= $i['db_idjurusan']; ?>"><?= $i['db_namajurusan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="sampul" class="col-sm-3 col-form-label">sampul</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control <?= (session('validation')?->getError('sampul')) ?'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?php echo old('sampul') ?>" >
                      <div class="invalid-feedback">
                        Gambar belum di upload
                        <br>
                        <?= (session('validation')?->getError('sampul')),"dari method"; ?>
                      </div>
                    </div>
                  </div>
                  
                    
                  <button class="btn btn-primary" type="submit">Tambah Data Siswa</button>
                </form>
                <a href="/students" class="btn btn-danger my-3">Batalkan</a>  
              </div>
        </div>
    </div>
<?= $this->endSection(); ?>