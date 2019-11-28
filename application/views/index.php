<?php
    $_SESSION['page']='utama';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
?>
    <!--- Image Slider --->
<div id="slide-gambar" class="carousel slide" data-ride="carousel" data-interval="7000">
  <ol class="carousel-indicators">
    <li data-target="#slide-gambar" data-slide-to="0" class="active"></li>
    <li data-target="#slide-gambar" data-slide-to="1"></li>
    <li data-target="#slide-gambar" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="<?php echo base_url();?>img/key.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1 class="titleU">Selamat Datang</h1>
        <h3 class="titleU">Asrama Universitas Trunojoyo Madura</h3>
        <a class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#warga">Masuk</a>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="<?php echo base_url();?>img/key2.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1 class="titleU">Profil Asrama</h1>
        <h3 class="titleU">Halaman ini berisikan sejarah, visi dan misi, fasilitas, dll.</h3>
        <a class="btn btn-outline-light btn-lg" href="">Baca</a>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="<?php echo base_url();?>img/key3.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1 class="titleU">Kegiatan</h1>
        <h3 class="titleU">Temukan banyak kegiatan bersama kami</h3>
        <a class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#warga">Lihat</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#slide-gambar" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#slide-gambar" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
<!--- info 1--->
<div id="info" class="offset">
  <div class="col-12 narrow text-center p-5 bg-light">
    <h1>Asrama Universitas Trunojoyo Madura</h1>
    <p class="lead">askdlkansdkansuidnasdnaklsndjlnadjandjklsandjnajsnjandjn</p>
    <a class="btn btn-secondary btn-md" href="">See More</a>
  </div>
</div>
<div class="fixed narrow">&nbsp;</div>
<div id="info" class="offset">
  <div class="col-12 narrow text-center p-5 bg-light">
    <h1>Asrama Universitas Trunojoyo Madura</h1>
    <p class="lead">askdlkansdkansuidnasdnaklsndjlnadjandjklsandjnajsnjandjn</p>
    <a class="btn btn-secondary btn-md" href="">See More</a>
  </div>
</div>
</body>
</html>