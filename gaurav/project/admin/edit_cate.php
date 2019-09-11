<?php
include("db.php");
include("dashboard.php");

$a = $_GET['cate'];
// print_r($_GET);
$query = "SELECT * FROM admincategory where id =$a";
// die();
  $result = mysqli_query($con,$query);
  $data = mysqli_fetch_assoc($result);

?>

 <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <form action="update.php" method="post">
            <div class="card">
               <div class="card-header">
                  <h1>Update Category</h1>
               </div>
                  <input type="hidden" name="cid" value="<?php echo $a;?>">
               <div class="card-body">
                  <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="cate_name" class="form-control" value="<?php echo $data['cate_name'];?>">
               </div>
               </div>
               <div class="card-footer">
                  <input type="submit" value="update" class="btn btn-success">
               </div>
            </div>
         </form>
         </div>
      </div>
      
   </div>
</body>
</html>