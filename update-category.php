<?php include('partials/menu.php'); ?>
<main>
    <br>
    <div class="container"> 
        <div class="sub-container">
            <div class="sub-container-title">Update Category</div>
        
        
             <form class="forms">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details"> Title:</span>
                         <input type="text" placeholder="Enter Category" required>
    
                     </div>


                     <div class="input-box">
                     <span class="details"> Current Image:</span>
                        <input type="text" placeholder="Enter your name" required>
                     </div>
                        
                        

                        <div class="project">
                            <div class="row center">
                                <div class="proj-col">
                                    <img src="./images/2.jpg" width="200" height="150">
                                    <input type="submit" value="Delete" class="btn4" >     
                                </div>                    
                            </div>                               
                        </div>


                       
                    
                    
                        <span class="details"> New Image:</span>
                        <input type="file" name="image">
                        
                   
                    <div class="active-details">
                        <span class="active-title">Featured:</span>
                <div class="choices">
        
                    
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="Yes">No
                        
                   
                </div>
                    <div class="active-details">
                        <span class="active-title">Active:</span>
                <div class="choices">
        
                    
                        <input type="radio" name="featured" value="Yes">Show
                        <input type="radio" name="featured" value="Yes">Hide
                        
                   
                </div>
                    </div>
                    <div >
                        <input type="submit" value="Save" class="btn4" >
    
                    </div>
                 </div>
             </form>
                
            </div>
        </div>
            
    </div>

  
</main>
<?php include('partials/footer.php');?>