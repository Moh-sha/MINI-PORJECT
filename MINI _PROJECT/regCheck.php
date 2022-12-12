<?php 

 session_start();

 $name=$_POST["name"];
 $password=$_POST["password"];
 $email=$_POST["email"];
 $id=$_POST["id"];


 if($name==""||$password==""||$email==""||$id=="")
 {
            header("Location:register.php");


 }
 else 
 {
          $connect=mysqli_connect('localhost','root','','mini');
           $sql= "INSERT INTO mini_table values('','{$name}','{$password}','{$email}')";
           
           $status=mysqli_query($connect,$sql);

          if($status)
          {
             header('location:login.php');       

          }
        else 
        {
             
            echo "error";

        }

              
 }

  //session_abort();

 ?>