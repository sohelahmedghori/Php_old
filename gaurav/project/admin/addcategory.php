 <?php
 include('dashboard.php');
 ?>
 <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <form action="save.php" method="post">
            <div class="card">
               <div class="card-header">
                  <h1>Category</h1>
               </div>
               <div class="card-body">
                  <div class="form-group">
                  <label>Add Category</label>
                  <input type="text" name="cate_name" class="form-control" placeholder="Category Name">
               </div>
               </div>
               <div class="card-footer">
                  <button class="btn btn-success">Add Category</button>
               </div>
            </div>
         </form>
         </div>
      </div>
      
   </div>
</body>
</html>