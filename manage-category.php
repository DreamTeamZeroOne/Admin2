<?php include('partials/menu.php'); ?>
<main>
  
   <div class="table-container">
       <h1 class="heading">MANAGE CATEGORIES</h1>
       <button class="btn4"><a href="add-category.php"><i class="fa fa-plus"> Add Category</i></a></button>
       <table class="table">
           <thead>
               <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
               </tr>
           </thead>
           <tbody>
            
                
              <tr>
                  <td>1</td>
                  <td>RESIDENCIAL</td>
                  <td>IMAGE</td>
                  <td>Yes</td>
                  <td>Show</td>
                  <td><button class="btn1"><a href="update-category.php"><i class="fa fa-wrench">Update Category</i></a></button>
                    <button class="btn2"><i class="fa fa-trash"></i> Delete Category</button>
              </tr>
              <tr>
                <td>2</td>
                <td>RESIDENCIAL</td>
                <td>IMAGE</td>
                <td>Yes</td>
                <td>Show</td>
                <td><button class="btn1"><a href="update-category.php"><i class="fa fa-wrench">Update Category</i></a></button>
                  <button class="btn2"><i class="fa fa-trash"></i> Delete Category</button>
            </tr>
            <tr>
                <td>3</td>
                <td>RESIDENCIAL</td>
                <td>IMAGE</td>
                <td>Yes</td>
                <td>Show</td>
                <td><button class="btn1"><a href="update-category.php"><i class="fa fa-wrench">Update Category</i></a></button>
                  <button class="btn2"><i class="fa fa-trash"></i> Delete Category</button>
            </tr>
            
          
            
              
             
           </tbody>
       </table>
   </div>     
       
        
</main>
<?php include('partials/footer.php');?>