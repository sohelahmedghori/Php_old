  rrrrrr<div class="container mt-4" style="min-height: 500px;">
  <h2>User Profile Page</h2>
  <div class="row">
  	<div class="col-md-6 offset-md-3">
  		<?php
  		$data = $result->row_array();
      if($data['image_name']=="")
      {
        $path = base_url("image/avatar.png");
      }
      else
      {
        $path = base_url("image/".$data['image_name']);
      }

  		?>
  		<table class="table table-dark table-hover table-bordered">
  			<tr>
  				<td>Full Name</td>
  				<td><?php echo $data['full_name']; ?></td>
  			</tr>
        <tr>
          <td>Picture</td>
          <td><img src="<?php echo $path; ?>" height="100" width="100">
            <br />
            <form action="<?php echo site_url('user/pic_upload') ?>" method="post" enctype="multipart/form-data">
              
            <input type="file" name="userfile" onchange="this.form.submit()"/>
            </form>
            <p class="text-danger">
              <?php echo $this->session->flashdata("msg");
              ?>
            </p>

        </td>
  			<tr>
  				<td>Username</td>
  				<td><?php echo $data['username']; ?></td>
  			</tr>
  			<tr>
  				<td>Address</td>
  				<td><?php echo $data['address']; ?></td>
  			</tr>
  			<tr>
  				<td>Contact</td>
  				<td><?php echo $data['contact']; ?></td>
  			</tr>
  			<tr>
  				<td>City</td>
  				<td><?php echo $data['city']; ?></td>
  			</tr>
  			<tr>
  				<td>Gender</td>
  				<td><?php echo $data['gender']; ?></td>
  			</tr>
  			

  		</table>
      <a href="<?php echo site_url('user/edit'); ?>" class="btn btn-info">Edit</a>
  		<a href="<?php echo site_url('user/change_pass'); ?>" class="btn btn-info">Change Password</a>
  	</div>
  </div>
</div>