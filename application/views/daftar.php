<?php
    $data=$this->db->get('jk');
    $_SESSION['page']='Pendaftaran';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
?>
<!--- Form Daftar --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
        <form method="post" action="<?php echo site_url('daftar/add'); ?>" enctype="multipart/form-data" >
          <h1>Daftar</h1>
          <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" placeholder="Nama" class="form-control" required>
          </div>
          <div class="form-group">
          <label>NIM</label>
          <input type="text" name="nim" placeholder="NIM" class="form-control" required>
          </div>
          <div class="form-group">
          <label>Prodi</label>
          <input type="text" name="prodi" placeholder="Prodi" class="form-control" required>
          </div>
          <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" placeholder="alamat" class="form-control" required>
          </div>
          <div class="form-group">
          <label>tanggal lahir</label>
          <input type="text" name="tgl" placeholder="dd/mm/yyyy" class="form-control" required>
          </div>

          <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="jk" class="form-control">
              <?php
                foreach($data->result() as $row){
                  echo "<option value='$row->id_jk' class='form-group'>$row->jk</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
          <label>foto</label>
          <input type="file" name="foto" class="form-control" required>
          </div>
          <div class="form-group">
          <label>KTM</label>
          <input type="file" name="ktm" class="form-control" required>
          </div>
          <div class="form-group">
          <label>No WA</label>
          <input type="number" name="nowa" placeholder="Nomor Whatsapp" class="form-control" required>
          </div>
          <a>Lihat Langkah Pendaftaran </a><a href="">disini!</a>
          <input type="hidden" name="bukti" value="null">
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>

</body>
</html>