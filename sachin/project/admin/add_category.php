<?php 
include('header.php');
?>

<div class="container">
  <h2>Add new cateogry<h2>
    <div class="row">
       <div class="col-md-8 offset-md-2">
         <form action="save_category.php" method="post">

	       <div class="card">
              <div class="card-header">
                <h4>cateogry datail</h4>
              </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>category name</label>
                       <input type="text" name="cate_name" class="form-control" placeholder="cateogry name"></div>
                    </div>
<div class="card-footer">
<input type="submit" value="Add" class ="btn btn-success">
</div>
</div>
</form>
</div>
</div>
</div>



<?php
include('footer.php') 
?>