<?php 
include("db.php");
include("header.php");
$id = $_SESSION['id'];
$query ="SELECT * FROM project WHERE id= $id";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
// print_r($data);
// die;


?>
<div class="col-md-9">
<div class="row">
	<div class="col-md-12">
	   <h3 class="bg-secondary text-light ">Profile Update</h3>
    </div>
    <div class="col-md-10 offset-md-1">
    	<div class="card">
    		<div class="card-header">
    			<h3>Update</h3></div>
    		
    		<div class="card-body">
    			<form action="update_profile.php" method="POST" enctype="multipart/form-data">
    				<div class="form-group">
                        <lable>Full Name</lable>
                        <input type="text" name="full_name" value="<?php echo $data['full_name']; ?>" placeholder="full name"  class="form-control"></div>
    					

                        <div class="form-group">
    					<lable>Profile Pic</lable>
    					<input type="file" name="image"  class="form-control"></div>

                        <div class="form-group">
    					<label>Current Pic</lable>
    				     <img src="user_image/<?php echo $data['image_name']; ?>"></div>

                        <div class="form-group">
    					<lable>Username/gmail</label>
    					<input type="text" name="gmail_name" value="<?php echo $data['user_name']; ?>" placeholder="full name"  class="form-control"></div>

                        <div class="form-group">
    					<lable>gender</lable>
    					<input <?php   if($data['gender']=="male") echo "checked='checked'" ; ?>type="radio" name="gender" value="male"  >male
                        <input <?php  if($data['gender']=="female") echo "checked='checked'" ; ?> type="radio" name="gender"  value="female"  >female
                         </div>

                          <div class="form-group">
    					<lable>Address</lable>
    					<input type="text" name="address" value="<?php  echo $data['address']; ?>" placeholder="inter your address"  class="form-control"></div>

                        <div class="form-group">
    					<lable>Contact</lable>
    					<input type="text" name="contact" value="<?php echo $data['contact']; ?>" placeholder="enter ypur contact number"  class="form-control"></div>
    					


                        <div class="form-group"> 
    						<label>City</label>
    						<select class="form-control" name="city">
    							<option<?php if($data['city']=="Indore") echo "selected='selected'" ?> >Indore</option>
    							<option<?php if($data['city']=="Bhopal") echo "selected='selected'"?>  >Bhopal</option>
    							<option<?php if($data['city']=="Mumbai") echo "selected='selected'" ?> >Mumbai</option>
    							<option<?php if($data['city']=="Pune")   echo "selected='selected'" ?> >Pune</option>
    						</select>
    					</div>
    					<div class="card-footer">
    						<input type="submit" value="Update" class="btn-success"></div>




    				</form></div></div></div>
</div><hr>--