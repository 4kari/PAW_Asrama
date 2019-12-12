<?php
  $warga=$this->db->get_where('wargaasrama',["user_warga" =>$_SESSION['user']])->row();
  $jk=$this->db->get_where('jk',["id_jk" => $warga->id_jk])->row();
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
        <a class="nav-link" href="<?= site_url('warga/profil'); ?>">Profil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          prosedur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('izin') ?>">Izin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('') ?>">Info Izin</a>
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
      <div class="">
      <img  src="<?php echo base_url();?>img/profil.jpg">
      </div>
      <table>
                            <?php
                            echo "<tr><td>NAMA </td><td>&nbsp;: ".$warga->nama_warga."</td></tr>";
                            echo "<tr><td>NIM </td><td>&nbsp;: ".$warga->nim_warga."</td></tr>";
                            echo "<tr><td>PRODI </td><td>&nbsp;: ".$warga->prodi_warga."</td></tr>";
                            echo "<tr><td>ALAMAT </td><td>&nbsp;: ".$warga->alamat."</td></tr>";
                            echo "<tr><td>JENIS KELAMIN </td><td>&nbsp;: ".$jk->jk."</td></tr>";
                            echo "<tr><td>TANGGAL LAHIR </td><td>&nbsp;: ".$warga->tgllahir."</td></tr>";
                            echo "<tr><td>NOMOR/WA </td><td>&nbsp;: ".$warga->nowa_warga."</td></tr>";
                            ?>
                            </table>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>