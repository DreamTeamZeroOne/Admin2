<?php include('partials/menu.php'); ?>
<main>
    <br>
    <div class="container"> 
        <div class="sub-container">
            <div class="sub-container-title">Add Projects</div>
        
        
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
                 
                        <span class="details"> Select Image:</span>
                        <input type="file" name="image">
                        
                 <div>
                        <span class="details"> Category:</span>
                        <select name="category">Residence
                        <option value=""></option>
                        </select>
                    </div>
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
    </div>
  
</main>
<?php include('partials/footer.php');?>