<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('logincontent'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h5>APLIKASI PRESENSI SISWA</h5>
                            <h3> SMK NEGERI 3 BANJARMASIN</h3>
                            <hr>
                            <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="user" action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="exampleInputUsername" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" aria-describedby="emailHelp" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleInputPassword" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="exampleRepeatPassword" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                <?=lang('Auth.register')?>
                            </button>
                            <hr>
                         
                        </form>
                        <hr>
                        <div class="text-center">
                            <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                        </div>
                        <div class="text-center">
                            
                                <a class="small" href="<?= url_to('login') ?>"><?=lang('Auth.alreadyRegistered')?><?=lang('Auth.signIn')?></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

  

</div>
<?= $this->endSection(); ?>