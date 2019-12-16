<?php
    $_SESSION['page']='Pembayaran';
    $this->load->view('temp/warga/header');
?>

<!--- Form Izin --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
      <form method="post" action="<?php echo site_url('warga/bayar'); ?>" enctype="multipart/form-data" >
          <h1>Pembayaran</h1>
          <div class="form-group">
          <label>Tanggal Bayar</label>
          <input type="text" name="tgl_bayar" placeholder="Tanggal" class="form-control">
          </div>
          <div class="form-group">
          <label>Jumlah Bayar</label>
          <input type="text" name="jml" placeholder="Jumlah" class="form-control">
          </div>
          <div class="form-group">
          <label>Bukti Pembayaran</label>
          <input type="file" name="bukti" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
