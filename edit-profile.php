<?php include('partials/menu.php'); ?>
<main>
    <br><br>
    <div class="container"> 
        <div class="sub-container">
   
            <div class="sub-container-title text center">Edit Profile</div>

            <br>
            <form class="forms">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> First Name</span>
                        <input type="text" placeholder="Enter your first name" required>
   
                    </div>
                    <div class="input-box">
                       <span class="details"> Middle Name</span>
                       <input type="text" placeholder="Enter your middle name" required>
                       
                   </div>
                   <div class="input-box">
                       <span class="details"> Surname Name</span>
                       <input type="text" placeholder="Enter your last name" required>
                       
                   </div>
                   <div class="input-box">
                       <span class="details"> UserName</span>
                       <input type="text" placeholder="Enter your username" required>
                       
                   </div>
                  
                  
                   <div >
                       <input type="submit" value="Save" class="btn4" >
   
                   </div>
                </div>
            </form>
            
    </div>
    </div>
  
</main>
<?php include('partials/footer.php');?>