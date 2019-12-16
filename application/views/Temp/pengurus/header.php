<?php
  $username=$_SESSION['user'];
  $data=$this->db->get_where('pengurus',["user_pengurus" => $username])->row();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda-Pengurus</title>
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
        <a class="nav-link" href="<?php echo site_url('pengurus')?>">Home</a>
      </li>
      <li class="nav-item dropdown notifications-menu">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">
          <span class="label label-warning">data</span>
          <i class="fa fa-bell"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('pengurus/warga/nnn')?>">Warga</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/musahil')?>">Musahil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/pelanggaran')?>">Pelanggaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/kegiatan2')?>">Kegiatan</a> 
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/izin')?>">izin</a>
      </li>
      
      <li class="nav-item dropdown notifications-menu">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">
          <span class="label label-warning">Konfirmasi</span>
          <i class="fa fa-bell"></i>
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('pengurus/Pendaftaran')?>">Pendaftaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/pembayaran')?>">Pembayaran</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/kegiatan')?>">Kegiatan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/perizinan')?>">Perizinan</a>
      </li>
      <li class="nav-item dropdown notifications-menu">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">
          <!-- <span class="label label-warning"><img src="<?php echo base_url('img/'); echo $data->foto;?>"></span> -->
            <img  src="<?php echo base_url('img/');?>profil.jpg" class="profil"><?php echo $data->user_pengurus; ?>
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('pengurus/account')?>">Account</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('pengurus/settings')?>">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('login/logout')?>">Logout</a>
      </li> 
    </ul>
  </div>
</nav>
 