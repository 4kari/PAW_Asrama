<?php
    $_SESSION['page']='buat akun';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
?>
<!--- Form Daftar --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
        <form>
          <h1>Buat Akun Warga</h1>
          <div class="form-group">
          <label>NIM</label>
          <input type="text" name="nim" placeholder="NIM mahasiswa" class="form-control">
          </div>
          <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" class="form-control">
          </div>
          <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>

</body>
</html>