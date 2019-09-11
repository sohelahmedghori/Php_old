<?php
include("dashboard.php");
?>
<div class="container">
 <h1>User Panel</h1>
</div>
<div class="row">
 <div class="col-md-6 offset-md-3">
 <form action="newusersave.php" method="post">  
  <div class="card">
   <div class="card-header">
    User Login
   </div>
   <div class="card-body">
     <div class="form-group">
     	<label>	Username</label>
     	<input type="text" name="username" class="	form-control" placeholder="username">
     </div>
     <div class="form-group">
     	<label>Password</label>
     	<input type="	text" name="password" class="form-control" placeholder="password">
     </div>
     <div class="form-group">
       <label>Re-Password</label>
       <input type="text" name="re_password" class="form-control" placeholder="re_password">
     </div>
   </div>
     <div class="card-footer">
       <input type="Submit" value="add" class="btn btn-success">
     </div>
  </div>
  </form>
 </div>
</div>