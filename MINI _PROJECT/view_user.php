<?php 

            session_start();
           
 
          $connect=mysqli_connect("localhost","root","","shafin");

          if(isset($_POST['submit'])){

                 $name=$_POST['name'];    
                 $password=$_POST['password'];
                 $email=$_POST['email'];   
                     
             ;
                 
                 $query="INSERT INTO mini(name,password,email) VALUES('$name','$email','$password')";   

               mysqli_query($connect,$query);




              }

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>

     button{


                background-color: lightblue;
                width:90%;
                padding:10px 20px ;
                colour :white;
                font-size: 1.2rem;

     }
  
 input{
      border : 2px solid green;
      width :90%;
      padding:8px ;


 }
 select{

    border : 2px solid green;
      width :90%;
      padding:8px ;
 }
 h1{
        background-color: lightblue;
        padding:10px;
        color:white;
        text-align:center;

 }

 .container{
       
    width: 500px;
    height: 400px;
    text-align:center;
    margin: 0 auto;

 }
 
table,th,td{

 border: 1px solid green;
 border-collapse: collapse;


}


</style>


</head>
<body> 
            <h1> data table </h1>
  <div class="container">
      

            

 <table>

        <th>ID</th>
        <th>name</th>
         <th>phone</th>
          <th>email</th>
         <th>dept</th>
        
     <?php 



 $read="SELECT *FROM mini_table";
 $query=mysqli_query($connect,$read);

 while($row=mysqli_fetch_array($query)){
                        ?>
  
  
 
          <tr>
      <td> <?php echo $row["id"];?></td>
     <td><?php    echo $row["name"];?></td>
      <td><?php    echo $row["password"];?></td>
     <td> <?php    echo $row["email"];?></td>
      
    </tr> 

  
<?php 
   }  
 ?>




</table>
  </div>
     



</body>
</html>