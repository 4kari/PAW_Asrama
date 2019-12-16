<?php echo form_open_multipart('pengurus/proses_musahil');
?>
  <div class="modal fade" id="Umusahil">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Musahil</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <input type="hidden" id="id" name="id">
            <div class="form-group">
            <label>Nama</label>
            <input type="text" id="Nama" name="Nama" placeholder="Nama" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Gedung</label>
            <input type="text" id="Gedung" name="Gedung" placeholder="Gedung" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Kamar</label>
            <input type="text" id="Kamar" name="Kamar" placeholder="Kamar" class="form-control" required>
            </div>
            <div class="form-group">
            <label>No WA</label>
            <input type="text" id="WA" name="WA" placeholder="WA" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <input  type="submit" name="Submit" class="btn btn-success btn-block" value="Ubah">
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>
<?php echo form_open_multipart('pengurus/proses_musahil/0/1');
?>
  <div class="modal fade" id="Dmusahil">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body bg-info">
          Apakah anda yakin akan menghapus data ini?
          <input type="hidden" id="id2" name="id">
        </div>
        <div class="modal-footer">
          
          <input  type="submit" name="Submit" class="btn btn-danger btn-block" value="Delete">
          <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>
<?php echo form_open_multipart('pengurus/proses_musahil/0/0/1');
?>
  <div class="modal fade" id="Imusahil">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Musahil</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <input type="hidden" id="id" name="id">
            <div class="form-group">
            <label>Nama</label>
            <input type="text" id="Nama" name="Nama" placeholder="Nama" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Username</label>
            <input type="text" id="Username" name="Username" placeholder="Username" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" id="Password" name="Password" placeholder="Password" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Gedung</label>
            <input type="text" id="Gedung" name="Gedung" placeholder="Gedung" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Kamar</label>
            <input type="text" id="Kamar" name="Kamar" placeholder="Kamar" class="form-control" required>
            </div>
            <div class="form-group">
            <label>No WA</label>
            <input type="text" id="WA" name="WA" placeholder="WA" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <input  type="submit" name="Submit" class="btn btn-success btn-block" value="Ubah">
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>