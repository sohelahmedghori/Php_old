<div class="container mt-4" style="min-height:500px;">
<h2>My Profile</h2>
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
  			<td><?php echo $data['full_name'] ?>
  			</td>
  		</tr>
      <tr>
        <td>Picture</td>
        <td><img src="<?php echo $path; ?>" height="100" width="100">
          <form action="<?php echo site_url('user/pic_upload'); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="userfile" onchange="this.form.submit()"/></form></td>
      </tr>
       <p class="text-danger">
              <?php echo $this->session->flashdata("msg");
              ?>
            </p>

  		<tr>
  			<td>User Name</td>
  			<td><?php echo $data['username'] ?>
  			</td>
  		</tr>
  		<tr>
  			<td>Address</td>
  			<td><?php echo $data['add'] ?>
  			</td>
  		</tr>
  		<tr>
  			<td>Contact</td>
  			<td><?php echo $data['contact'] ?>
  			</td>
  		</tr>
  		<tr>
  			<td>City</td>
  			<td><?php echo $data['city'] ?>
  			</td>
  		</tr>
  		<tr>
  			<td>Gender</td>
  			<td><?php echo $data['gender'] ?>
  			</td>
  		</tr>
  	</table>
  	<a href="<?php echo site_url('user/edit') ?>" class="btn btn-primary">Edit</a>
    <a href="<?php echo site_url('user/change_password'); ?>" class="btn btn-primary">Change Password</a>
  </div></div></div>