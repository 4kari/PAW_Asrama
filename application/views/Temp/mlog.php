<!--- Modal Login --->
<?php echo form_open_multipart('login/log');
?>
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <input  type="submit" name="Submit" class="btn btn-success btn-block" value="Submit">
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>