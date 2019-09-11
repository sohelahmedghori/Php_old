<?php
include("header.php");
session_start();
?>
     <div class="col-md-9">
     	<div class="row my-2">
     		<div class="col-md-12">
          <form action="auth.php" method="post">
            <div class="card">
               <div class="card-header">
                  <h1>Sign in</h1>
               </div>
               <div class="card-body">
               <div class="form-group">
                  <label>User- name</label>
                  <div class="input-group">
                     <input type="text" name="username" class="form-control" placeholder="username">
                  </div>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
               </div>
            </div>
               <div class="card-footer">
                  <input type="submit" class=" btn btn-success" value="Signin">
               </div>
               <p class="text-danger text-center">
             <?php
              if(isset($_SESSION['msg']))
              {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }

             ?>
           </p>
            </div>
          </form>
   	</div>
   </div> 

   </div>
   <?php
    include("footer.php");
   ?>

</body>
</html>