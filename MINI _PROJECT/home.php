<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   
    <title>HOME</title>


    <style>
          
          h1{
                     font-size:50px;
                     colour:blue;
          }
 
    </style>



</head>
<body>
    
                   <h1> WelCome BOB ! </h1>
                   <?php echo $_SESSION['username'];?>

                   <a href="profile.php">Profile</a>
                    
                   <a href="ChangePassword.php".php">ChangePassword</a>
                   
                   <a href="view_user.php">view user </a>                    
                   
                   <a href="logout.php">logout</a>
</body>
</html>