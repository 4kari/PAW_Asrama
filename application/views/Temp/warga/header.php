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
        <a class="nav-link" href="<?= site_url('warga'); ?>">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Prosedur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('warga/izin') ?>">Izin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('warga') ?>">Info Izin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('warga/pembayaran') ?>">Pembayaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('warga') ?>">Informasi Pembayaran</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('warga/profil'); ?>">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login/logout'); ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>