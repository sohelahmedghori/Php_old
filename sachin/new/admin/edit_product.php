<?php  
include("../db.php");
if ( ! isset($_SESSION['is_admin_logged_in']))
 {
 header("location:index.php");
 }



include("header.php");
$a =$_GET['edit'];

$query ="SELECT * FROM  product" ;


$result1 = mysqli_query($con,$query);
$data1 = mysqli_fetch_assoc($result1);
// print_r($_GET);
$query = "SELECT * FROM category";
$result = mysqli_query($con,$query);

	
?>
<div class="continer-flud">
	<h1>Product Update</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3 ">
      	<form action="update_product.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="pid" value="<?php echo $a; ?>">
      		<div class="card">
      			<div class="card-header">
      				<h3>Product Detail</h3>
      			</div>
      			<div class="card-body">
      				<div class="form-group">
      					<label>Product Name</label>
      					<input type="text"  name="p_name" class="form-control" value="<?php  echo $data1['p_name']; ?>"></div>


      				<div class="form-group">
      					<label>Product price</label>
      					<input type="text"  name="p_price" value="<?php echo $data1['p_price']; ?>"class="form-control"></div>




      				<div class="form-group">
      					<label>Current image</label>
      					<img src="upload/<?php echo $data1['image_name']; ?> " style="height:250px;width:200px;">




      				<div class="form-group">
      					<label>Product Image</label>
      					<input type="file"  name="p_image" value=""class="form-control">
      					<p class="text-danger">
      					<?php	if(isset($_SESSION['msg']))
      						{  
      							echo $_SESSION['msg'];
      							unset($_SESSION['msg']);




      					     }

      					 ?> </p> </div>



      				<div class="form-group">
      					<label>Product Detail</label>
      					<input type="text"  name="p_detail" value="<?php echo $data1['p_detail']; ?>"class="form-control"></div>





      				<div class="form-group">
      					<label>Product Category</label>

                          <select name="p_cate" class="form-control">
                          	<option>select</option>
                          	<?php 
                          	while ($data=mysqli_fetch_assoc($result))
                          	 {
                          	    if($data1['p_cate']==$data['cate_name'])
                          	    {
                          	    	?>
                          	    	<option selected="selected"><?php echo $data['cate_name']; ?></option>
                          	    	<?php 



                          	    }
                          	    else ?>

                          	    <option><?php echo $data['cate_name']; ?></option>

                          	   <?php }
                          	    { 



                        } ?>


                          </select>

      				<div class="form-group">

      					<label>Product Discount</label>

      					<input type="text"  name="p_discount" value="<?php echo $data1['discount']; ?>"class="form-control"></div>
      					



      				</div>
      				<div class="card-footer">
      					<input type="submit" value="Update" class="btn btn-success"></div></div></form>

 </div></div></div>








