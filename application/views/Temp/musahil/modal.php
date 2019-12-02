<?php echo form_open_multipart('musahil/proses_kamar/0');
?>
  <div class="modal fade" id="Tkamar">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <div class="form-group">
            <label>Kamar</label>
            <input type="text" id="kamar" name="kamar" placeholder="kamar" class="form-control">
            </div>
            <div class="form-group">
            <label>Gedung</label>
            <input type="text" id="gedung" name="gedung" placeholder="gedung" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <input  type="submit" name="Submit" class="btn btn-success btn-block" value="Submit">
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>