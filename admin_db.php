<?php
include('db_configure.php');

if(isset($_POST['adminsubmit']))
{
   
  $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $username = (isset($_POST['username'])) ? $_POST['username'] : "";
  $email = (isset($_POST['email'])) ? $_POST['email'] : "";
  $password =(isset($_POST['password']))?  $_POST['password'] : "";
  $cpassword = (isset($_POST['cpassword'])) ? $_POST['cpassword'] : "";
 

$query = "INSERT INTO Admin(Admin_name,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
    window.location.href="homepage1.html";
    </script>
    
    <?php
 }
else
{
     ?>
    
    <script>
    alert('Failed to connect');
    return false;
    </script>
    
    <?php
}
}


?>




