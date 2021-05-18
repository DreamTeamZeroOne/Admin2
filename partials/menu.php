<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="grid-container">
<header>
    
<div class="navbar">
        
    <div class="logo">
        <img class="logo" src="./images/log.png">
        </div>
 
        <ul class="navbar-links">
        <li><a href="index.php">Home</a></li>
        <li><a  href="manage-admin.php">Admin</a></li>
        <li><a  href="manage-category.php">Categories</a></li>
        <li><a  href="manage-project.php">Projects</a></li>
        <li><a  href="manage-faqs.php">FAQS</a></li>
        <li><a  href="manage-inquiry.php">Inquiry List</a></li>
        <li> <div class="dropdown">
            <button class="dropbtn">Account
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="manage-activitylogs.php">Activity logs</a>
              <a href="manage-profile.php">Profile</a>
              <form action=""  method="POST">
                <button class="btn5"><a href="login.php"></a><i class="fa fa-user-o" aria-hidden="true"></i>Logout</button>
             </form>
            </div>
          </div> </li>
    </ul>
 

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</div>
    <script src="app.js"></script>
    
</header>