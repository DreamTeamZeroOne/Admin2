<?php include('partials/menu.php'); ?>
<main>
    <br>
    <div class="container"> 
        <div class="sub-container">
            <div class="sub-container-title"> Add Category</div>
        
        
             <form class="forms">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details"> Title</span>
                         <input type="text" placeholder="Enter your name" required>
                        
                     </div>
             
                        <br><span class="details"> Add Image</span><br>
                        <input type="file" name="image">
                        
                    
                    <div class="input-box">
                        <span class="details"> Featured</span>
                        <input type="text" placeholder="Enter your name" required>
                        
                    </div>
                    
                    <div class="active-details">
                        <span class="active-title">Active:</span>
                <div class="choices">
        
                    
                        <input type="radio" name="featured" value="Yes">Show
                        <input type="radio" name="featured" value="Yes">Hide
                        
                   
                </div>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Save" class="btn4" >
    
                    </div>
                 </div>
             </form>
                
            </div>
        </div>
            
    </div>
    </div>
  
</main>
<?php include('partials/footer.php');?>