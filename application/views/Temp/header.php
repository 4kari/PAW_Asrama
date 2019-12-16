<!DOCTYPE html>
<html>
<head>
  <title> <?php echo $_SESSION['page']; ?> </title>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>
<!--- Menu --->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Aplikasi Asrama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('welcome')?>">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          PWB Online
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('daftar') ?>">Pendaftaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('daftar/pembayaran') ?>">Pembayaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('daftar/pengumuman') ?>">Pengumuman</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('daftar/informasi') ?>">informasi</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link  " data-toggle="modal" data-target="#login" href="">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>