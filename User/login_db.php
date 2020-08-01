<?php

include('../db_configure.php');

if(isset($_POST['usersubmit']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $username = (isset($_POST['username'])) ? $_POST['username'] : "";
 $email = (isset($_POST['email'])) ? $_POST['email'] : "";
 
   $password =(isset($_POST['password']))?  $_POST['password'] : "";
   $cpassword = (isset($_POST['cpassword'])) ? $_POST['cpassword'] : "";
  $organization = (isset($_POST['organization'])) ? $_POST['organization'] : "";
 

$query = "INSERT INTO user_details(username,email,password,cpassword,organization) VALUES ('$username','$email','$password','$cpassword','$organization')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
    window.location.href="login/user_login.php";
    </script>
    
    <?php
}
else{
     ?>
    
    <script>
    alert('Failed to connect');
    return false;
    </script>
    
    <?php
}
}


?>




