<?php
include("header.php");
?>
<script type="text/javascript" src="js/val.js"></script>
     <div class="col-md-9">
     	<div class="row my-2">
     		<div class="col-md-12">
           <div class="card">
        
        <div class="card-header">
          <h1>Sign up</h1>
        </div>
        <div class="card-body">
          <form action="save.php" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="full-name">Full name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" id="full_name" name="full_name" class="form-control" placeholder="full-name">
              <p id="full_name_msg" class="text-danger"></p>
            </div>


          <div class="form-group">
            <label>Profile pic</label>
            <input type="file" name="image" id="profile_pic" class="form-control">
            <p id="profile_pic_msg" class="text-danger"></p>
          </div>


          <div class="form-group">
            <label for="User-name">User Name/E-mail</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true">
                </i></span>
              </div>
              <input type="text" id="user_name" name="user_name" class="form-control" placeholder="User-Name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
            </div>
                <p id="user_name_msg" class="text-danger"></p>
          </div>



          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              
                <input type="password" id="pass" name="pass" class="form-control" placeholder="password">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
              </div>
            </div>
            <p class="text-danger" id="pass_msg"></p>
          </div>

           <div class="form-group">
            <label>Re_Password</label>
            <div class="input-group">
              
                <input type="password" id="re_pass" name="pass" class="form-control" placeholder="password">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
              </div>
            </div>
            <p class="text-danger" id="re_pass_msg"></p>
          </div>


          <div class="form-group">
            <label>Gender</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="male" value="male" type="radio" name="gender">
              <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="female" value="female" type="radio" name="gender">
              <label class="form-check-label">Female</label>
            </div>
            <p class="text-danger" id="gender_msg"></p>
          </div>
                    
                    <div class="form-group">
                      <label for="add">Address</label>
                      <textarea class="form-control" id="address" name="add" placeholder="Address" id="add"></textarea>
                      <p id="address_msg" class="text-danger"></p>
                    </div>
          
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city" id="city">
              <option>Select</option>
              <option>Indore</option>
              <option>Mumbai</option>
              <option>Pune</option>
            </select>
            <p id="city_msg" class="text-danger"></p>
          </div>
   

          </div>
          <div class="card-footer">
          <input type="submit" id="submit" class="btn btn-primary" value="Signup">
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