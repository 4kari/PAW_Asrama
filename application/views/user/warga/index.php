<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda-Warga Asrama</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Aplikasi Asrama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Profil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Prosedur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('izin') ?>">Izin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('izin/bayar') ?>">Info Izin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('izin/bayar') ?>">Pembayaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Informasi Pembayaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Laporan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Pelanggaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Informasi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Informasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login/logout'); ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!--- Image Slider --->
<div id="slide-gambar" class="carousel slide" data-ride="carousel" data-interval="7000">
  <ol class="carousel-indicators">
    <li data-target="#slide-gambar" data-slide-to="0" class="active"></li>
    <li data-target="#slide-gambar" data-slide-to="1"></li>
    <li data-target="#slide-gambar" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="<?php echo base_url();?>img/key8.jpg" alt="slide">
    </div>
</body>
</html>
