<?php include('partials/menu.php'); ?>
<main>
    <br>
    <div class="container2"> 
        <div class="sub-container2">
            <div class="sub-container2-title">Update Projects</div>
        
        
             <form class="forms">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details"> Project Name:</span>
                         <input type="text" placeholder="Enter name" required>
    
                     </div>
                     <div class="input-box">
                        <span class="details"> Description</span>
                        <textarea name="description" cols="80" rows="10" placeholder="Enter Description of the Project Here."></textarea>
                        
                    </div>
                 
                    <div class="input-box">
                     <span class="details"> Current Image:</span>
                        <input type="text" placeholder="Enter your name" required>
                     </div>
                        
                        

                        <div class="project">
                            <div class="row center">
                                <div class="proj-col">
                                    <img src="./images/2.jpg" width="50" height="150">
                                    
                                    <input type="submit" value="Delete" class="btn4" >
                                    <input type="submit" value="Delete" class="btn4" >                
                           </div>  
                         
                                <div class="proj-col">
                                    <img src="./images/2.jpg" width="50" height="150">
                                  
                                    <input type="submit" value="Delete" class="btn4" >
                                    <input type="submit" value="Delete" class="btn4" >     
                             </div>                        
                      
                                <div class="proj-col">
                                    <img src="./images/2.jpg" width="50" height="150">
                                    
                                    <input type="submit" value="Delete" class="btn4" >
                                    <input type="submit" value="Delete" class="btn4" >     
                                </div>                    
                            </div>                                                 
                        </div>


                       
                    
                   
                        <span class="details"> New Image:</span>
                        <input type="file" name="image">
                        
                  
                        
               
                    <div class="active-details">
                        <span class="active-title">Active:</span>
                <div class="choices">
        
                    
                        <input type="radio" name="featured" value="Yes">Show
                        <input type="radio" name="featured" value="Yes">Hide
                        
                   
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