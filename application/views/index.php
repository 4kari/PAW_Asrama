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
      <img  src="<?php echo base_url();?>img/key10.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1>Selamat Datang</h1>
        <h3>Asrama Universitas Trunojoyo Madura</h3>
        <a class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#login">Masuk</a>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="<?php echo base_url();?>img/key9.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1>Profil Asrama</h1>
        <h3>Halaman ini berisikan sejarah, visi dan misi, fasilitas, dll.</h3>
        <a class="btn btn-outline-light btn-lg" href="">Baca</a>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="<?php echo base_url();?>img/key1.jpg" alt="slide">
      <div class="carousel-caption text-center">
        <h1>Kegiatan</h1>
        <h3>Temukan banyak kegiatan bersama kami</h3>
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
  <div class="col-12 narrow p-5 bg-light">
    <h1 class="text-center">Asrama Universitas Trunojoyo Madura</h1>
    <p>Asrama Mahasiswa Universitas Trunojoyo Madura dalam pelaksanaannya mengembangkan fungsi ganda yaitu sebagai tempat tinggal yang kondusif, ekonomis, dan strategis karena berada dalam wilayah kampus, sekaligus tempat untuk proses pendidikan karakter, pedalaman spiritual, perbaikan akhlak, pengembangan intelektual dan pemantapan minat bakat serta kepedulian sosial mahasiswa sebagai penerus bangsa yang bertaqwa, beraklaqul karimah, cerdas dan profesional.</p>
    <h1 class="text-center">Asrama Universitas Trunojoyo Madura</h1>
    <h5 class="text-center">VISI</h5>
    <p class="text-center">"Sebagai tempat pendidikan karakter yang kondusif untuk mencetak kader bangsa yang religius, amanah, peduli dan kreatif"</p>
    <h5 class="text-center">MISI</h5>
    <p class="text-center">- Mengantarkan mahasiswa memiliki kemantapan aqidah dan kedalaman spiritual dan keluhuran akhlaq<br>
    - Mendukung mahasiswa dalam memperoleh keluasan ilmu, prestasi dan kemantapan profesional<br>
    - Memberikan mahasiswa keterampilan tambahan dan dukungan pengembangan minat dan bakat<br>
    - Memberikan bekal empati dan kepedulian sosial dan kemasyarakatan</p>
    <div class="text-center">
    <a class="btn btn-secondary text-center btn-md" href="<?php echo site_url('daftar') ?>">Daftar</a>
    </div>
  </div>
</div>

</body>
</html>