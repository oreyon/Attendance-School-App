<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <title><?= $title; ?></title>


  </head>
  <body>    
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <!-- <div class="container-fluid"> -->
    <a class="navbar-brand" href="#">SMKN 3 BJM</a>
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
        
        <a class="nav-link" href="/pages/presensi">Presensi</a>
        <a class="nav-link" href="#">Guru</a>
        <a class="nav-link disabled">Kelas</a>
        <a class="nav-link disabled">Siswa</a>        
        <a class="nav-link" href="/pages/about">About</a>        
        

      </div>
    </div>
  <!-- </div> -->
  </div>
</nav>