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

                <form action="/classes/save" method="post" enctype="multipart/form-data" >
                  <?= csrf_field(); ?>
                    <div class="mb-3 row">
                    <label for="namakelas" class="col-sm-3 col-form-label">Nama Kelas</label>
                    <div class="col-sm-6">
                      <!-- Validasi digunakan pada class form -->
                      <!-- teknik ternary digunakan | ternary merupakan penggunaan if else dalam satu barus -->
                      <!-- (session('validation')?->listErrors()) ?'is-invalid' : ''; -->
                      <input type="text" class="form-control" id="namakelas" name="namakelas" autofocus value="<?= old('namakelas'); //diambil dari name/variabel input?>">
                      <!-- Method old() digunakan untuk menyimpan variabel yang sudah di inputkan pada form, diambil dari var/name pada form-->
                      <!-- validasi form end -->
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="namaguru" class="col-sm-3 col-form-label">Nama Wali Kelas</label>
                    <div class="col-sm-6">
                      <select name="namaguru" id="namaguru" class="form-control" required>
                        <option value="<?= old('namaguru'); ?>" hidden></option>
                        <?php foreach($namaguru as $i): ?>
                            <option value="<?= $i['db_idguru']; ?>"><?= $i['db_namaguru']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="namasiswa" class="col-sm-3 col-form-label">namasiswa</label>
                    <div class="col-sm-6">
                      <select name="namasiswa" id="namasiswa" class="form-control">
                        <option value="<?= old('namasiswa'); ?>" hidden></option>
                        <?php foreach($namasiswa as $i): ?>
                            <option value="<?= $i['id']; ?>"><?= $i['studentname']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Tambah Data Kelas</button>
                </form>
                <a href="/classes" class="btn btn-danger my-3">Batalkan</a>  
              </div>
        </div>
    </div>
<?= $this->endSection(); ?>