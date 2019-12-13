<?php
$this->load->view('temp/warga/header');
?>
<!--- Form Izin --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
        <form action="izin/insdata" method="POST" name="">
          <h1>Izin Keluar</h1>
          <div class="form-group">
          <label>Tanggal/Waktu Mulai</label>
          <input type="text" name="nama" placeholder="Tanggal Mulai" class="form-control">
          </div>
          <div class="form-group">
          <label>Tanggal/Waktu Kembali</label>
          <input type="text" name="nim" placeholder="Tanggal Kembali" class="form-control">
          </div>
          <div class="form-group">
          <label>Keterangan Izin</label>
          <input type="text" name="prodi" placeholder="Keterangan" class="form-control">
          </div>
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
