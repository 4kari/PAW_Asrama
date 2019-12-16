<?php
    $_SESSION['page']='Selamat';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
?>
<!--- Pesan --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light text-center">
        <h1>Selamat!!!</h1>
        <a>anda sudah melakukan pendaftaran</a><br>
        <a>silahkan klik <a href="<?php echo site_url('daftar/pengumuman'); ?>">&nbsp;link ini</a> untuk melihat pengumuman</a><br>
        <a>atau bisa melalui menu PWB Online->Pengumuman</a>
        <a href="<?php echo site_url('daftar/pengumuman'); ?>" class="btn btn-success">OK</a>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>

</body>
</html>