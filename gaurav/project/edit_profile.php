<?php
$con = mysqli_connect("localhost","root","","onlineshop");
session_start();
include("header.php");

$id = $_SESSION['id'];
$query = "SELECT * from user WHERE id =$id";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

?>
<div class="col-md-9">
     	<div class="row my-2">
     		<div class="col-md-12">
           <div class="card">
        
        <div class="card-header">
          <h1>Update</h1>
        </div>
        <div class="card-body">
          <form action="update.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="full-name">Full name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" value="<?php echo $data['full_name'];?>" name="full_name" class="form-control" placeholder="full-name">
            </div>
            <div>
              <label>Current Pic</label>
              <img src="userimages/<?php echo $data['userimage']?>">
            </div>
          <div class="form-group">
            <label>Profile pic</label>
            <input type="file" name="image" class="form-control">
          </div>


          <div class="form-group">
            <label for="User-name">User Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true">
                </i></span>
              </div>
              <input disabled = "disabled" type="text" value="<?php echo $data['user_name'];?>" name="user_name" class="form-control" placeholder="User-Name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Gender</label>
            <br>
            <div class="form-check form-check-inline">
              <input <?php if($data['gender']=="male") echo "checked='checked'";?>class="form-check-input" value="male" type="radio" name="gender">
              <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input <?php if($data['gender']=="female") echo "checked='checked'";?>class="form-check-input" value="female" type="radio" name="gender">
              <label class="form-check-label">Female</label>
            </div>
          </div>
                    
                    <div class="form-group">
                      <label for="add">Address</label>
                      <textarea class="form-control" name="add" placeholder="Address" id="add"><?php echo $data['address'];?></textarea>
                    </div>
          
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city">
              <option>Select</option>
              <option <?php if($data['city']=="Mumbai") echo "selected='selected'";?>>Mumbai</option>
              <option <?php if($data['city']=="Indore") echo "selected='selected'";?>>Indore</option>
              <option <?php if($data['city']=="Pune") echo "selected='selected'";?>>Pune</option>
            </select>
          </div>
        </div>
          <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Update">
           </div>
         </form>
        </div>
      </div>
   	</div>
   </div> 

   </div>
   <?php
    include("footer.php");
   ?>

</body>
</html>
