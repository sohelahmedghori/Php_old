<?Php
include("db.php");
include("header.php");
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
?>

  
  		<div class="col-md-9">
  			<DIV class="row">
          <?php
                while ($data=mysqli_fetch_assoc($result)) 
                {
                   $a=$data['product_price'];
                   $b=$data['discount'];

                   $x=$a*$b/100;
                   $y=$a-$x;
                
                


          ?>
          
  				 <div class="col-md-4">
             <div class="card mb-2">
               <div class="card-header">
                 <span class="font-weight-bold">
                   <?php echo $data['product_name'];  ?>
                 </span>
                 </div>
                 <img src="admin/upload/<?php echo $data['img_name']?>" style="height: 100px !important; width:100%;"/>

               <div class="card-body">
                 
               </div>
               <div class="card-footer">
                 <a href="#" class="btn btn-dark btn-sm">Buy</a>
                 <br>
                 <del>(<?php echo $data['product_price']; ?></del>
                 <b><?php echo $y; ?>.00</b>
               </div>

             </div>    
           </div>   
         <?php } ?>   

  				</div>
  			 	
  		 
  </div>  
</div>

</div>

  <?php 
  include("footer.php");
   ?>