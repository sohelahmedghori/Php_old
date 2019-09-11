<div class="container mt-4" style="min-height: 500px;">
  <h2>User Profile Page</h2>
  <div class="row">
  	<div class="col-md-6 offset-md-3">
  		
      <form action="<?php echo site_url('user/update_password') ?>" method="post">
        
      <table class="table table-dark table-hover table-bordered">
        <tr>
          <td>Current Password</td>
          <td><input type="password" name="c_pass" class="form-control" /></td>
        </tr>
        <tr>
          <td>New Password</td>
          <td><input type="password" name="n_pass" class="form-control" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="cn_pass" class="form-control" /></td>
        </tr>



        
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Update" class="btn btn-primary">
          </td>
        </tr>
      </table>
      <p class="text-danger">
        <?php echo $this->session->flashdata("msg"); ?>
      </p>
      </form>
      
    </div>
  </div>
</div>
