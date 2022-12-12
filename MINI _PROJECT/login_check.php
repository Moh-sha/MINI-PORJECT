<?php

  session_start();

  $name=$_POST['name'];
 $password=$_POST['password'];

 $connection=mysql_connect('localhost','root','','mini');

 $sql="SELECT * FROM mini_table WHERE= name='{$name}' and password='{$password}'";
 

 $query=mysqli_query($connection,$sql);

 $user=mysqli_fetch_array($query);

 if($username =="" || $password = "")
 {
        
    header("Location:login.php");
  


 }

else if($user !=null) 
{
       $_SESSION['valid']=true;
       $_SESSION['name']=$name;
         header("Location:home.php");

}
else 


{
    echo "invalid username";
}






?>