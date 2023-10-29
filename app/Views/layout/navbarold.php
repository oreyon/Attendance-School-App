<?php

use App\Controllers\Teachers;
?>
<!-- Sidebar -->

<!-- =========================================================== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <!-- <div class="container-fluid"> -->
    <a class="navbar-brand" href="/">SMKN 3 BJM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <!-- alternative syntax if you run your server in xampp or mamp
            the syntax write like this-->
        <!-- <a class="nav-link active" aria-current="page" href="< ?= $base_url('/'); ?>">Home</a> -->
        <!-- <a class="nav-link" href="< ?= $base_url('/pages/about'); ?>">About</a>                -->
        
        <a class="nav-link" href="/presents">Presensi</a>
        <a href="/mapels" class="nav-link">Mata Pelajaran</a>
        <a class="nav-link" href="/teachers">Guru</a>
        <a class="nav-link" href="/classes">Kelas</a>
        <a class="nav-link" href="/students">Siswa</a>        
        <a class="nav-link" href="/pages/about">About</a>        
        

      </div>
    </div>
  <!-- </div> -->

  
  </div>
  
</nav>
