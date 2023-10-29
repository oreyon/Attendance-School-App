<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <!-- Custom fonts for this template-->
  <link rel="icon" href="<?= base_url(); ?>home2.png" type="image/gif">
  <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Setting Report Print -->

  <style>
    @media print {
      @page {
        size: A4;
        margin-top: 30px;
        page-break-inside: avoid;
      }

      table {
        page-break-inside: avoid;
      }

      .table.table-striped {
        border: 2px solid black;
        border-collapse: collapse;
        
      }

      .table.table-striped th,
      .table.table-striped td {
        border: 2px solid black;
      }

      .navbar-nav,
      .btn,
      .form-group,
      .printhilang,
      a#debug-icon-link,
      .fas,
      a.scroll-to-top,
      header,
      footer {
        display: none;
      }
    }
  </style>

  <!-- Setting Report Print end-->


  <title><?= $title; ?></title>


</head>

<body id="page-top">
  <div id="wrapper">
    <?= $this->include('layout/navbar'); ?>
    <!--=================================================== -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?= $this->include('layout/topbar'); ?>
        <?= $this->renderSection('content'); ?>
      </div>
      <?= $this->include('layout/footer'); ?>
    </div>
    <!--=================================================== -->
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>
</body>

</html>