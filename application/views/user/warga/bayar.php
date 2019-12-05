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
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Keluar Asrama</a>
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
<!--- Form Izin --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
        <form>
          <h1>Pembayaran</h1>
          <div class="form-group">
          <label>Semester</label>
          <input type="text" name="nim" placeholder="Tanggal" class="form-control">
          </div>
          <div class="form-group">
          <label>Tanggal Bayar</label>
          <input type="text" name="nim" placeholder="Tanggal" class="form-control">
          </div>
          <div class="form-group">
          <label>Bukti Pembayaran</label>
          <input type="file" name="bukti" class="form-control">
          </div>
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
