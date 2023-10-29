<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <!-- Custom fonts for this template-->
  <link rel="icon" href="<?= base_url(); ?>home2.png" type="image/gif">
  <!-- <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <!-- <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/export.css" type="text/css">
  <!-- Setting Report Print -->

  <!-- Setting Report Print end-->

  <title><?= $title; ?></title>
</head>

<body id="page-top">
  <table class="cetakhead" align="center">
    <tr>
      <td td rowspan="4" class="img"><img src="<?= base_url() ?>img/South_Kalimantan.png" alt="" width="50px"></td>
      <td align="center"><h4>PEMERINTAH PROVINSI KALIMANTAN SELATAN</h4></td>
      <td td rowspan="4" class="img"><img src="<?= base_url() ?>img/logo-smk.png" alt="" width="80px"></td>
    </tr>
    <tr>
      <td align="center"><strong><h3>DINAS PENDIDIKAN DAN KEBUDAYAAN</h3></strong></td>
    </tr>
    <tr>
      <td align="center"><strong><h2>SMK NEGERI 3 BANJARMASIN</h2></strong></td>
    </tr>
    <tr>
      <td align="center">Jl. Pramuka No. 84 Telp.0511-6742284 Fax.0511-3272968 Banjarmasin<br>http://www.smkn3banjarmasin.sch.id dan E-mail:smkn3.adm@gmail.com</td>
    </tr>
  </table>
  <div id="wrapper">
  <hr>
    <!--=================================================== -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?= $this->renderSection('content'); ?>
      </div>
    </div>
    <!--=================================================== -->
  </div>
  <!-- Bootstrap core JavaScript-->
  <!-- <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <!-- <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script> -->
  <script>window.print();</script>
</body>

</html>