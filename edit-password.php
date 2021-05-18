<?php include('partials/menu.php'); ?>
<main>
    <br><br>
    <div class="container"> 
        <div class="sub-container">
   
            <div class="sub-container-title text center">Edit Password</div>

            <br>
            <form class="forms">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> Current Password</span>
                        <input type="text" placeholder="Enter current password required">
   
                    </div>
                    <div class="input-box">
                       <span class="details"> New Password</span>
                       <input type="text" placeholder="Enter new password" required>
                       
                   </div>
                   <div class="input-box">
                       <span class="details"> Confirm Password </span>
                       <input type="text" placeholder="Confirm your password" required>
                       
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