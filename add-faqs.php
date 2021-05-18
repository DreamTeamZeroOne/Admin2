<?php include('partials/menu.php'); ?>
<main>
    <br>
    <div class="container"> 
        <div class="sub-container">
            <div class="sub-container-title">Add FAQS</div>
        
        
             <form class="forms">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details"> Question:</span>
                         <input type="text" placeholder="Enter name" required>
    
                     </div>
                     <div class="input-box">
                        <span class="details"> Answer</span>
                        <textarea name="description" cols="80" rows="10" placeholder="Enter Description of the Project Here."></textarea>
                        
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