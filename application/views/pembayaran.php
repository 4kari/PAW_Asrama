<?php
    $_SESSION['page']='Pembayaran';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
    //echo $_SESSION['bayar'];
?>
<!--- Form Daftar --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
        <form action="<?php echo site_url('daftar/bayar'); ?>" method="POST" enctype="multipart/form-data" >
          <h1>Pembayaran</h1>
          <div class="form-group">
            <label>NIM</label>
            <input type="number" name="nim" placeholder="NIM Mahasiswa" class="form-control" required>
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