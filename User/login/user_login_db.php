<?php
include('../../db_configure.php');
if(isset($_POST['usersubmit']))
{
   
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$username = (isset($_POST['username'])) ? $_POST['username'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : ""; 
$password =(isset($_POST['password']))?  $_POST['password'] : "";
$cpassword = (isset($_POST['cpassword'])) ? $_POST['cpassword'] : "";
 
$query = "INSERT INTO user_details(username,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";

if($result = mysqli_query($con,$query))
{

?>
    
    <script>
    alert('New User Added');
    window.location.href="../eud.php";
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

<?php

//session_start();
if(isset($_POST['submit']))
{
   
$Email = $_POST['email'];
$Pass=$_POST['password'];
$sql = mysqli_query($con,"select * from user_details  where email='$Email' and password='$Pass'");
 //$_SESSION['ClientID']=$Email;
if(mysqli_num_rows($sql) > 0)
{
    $result=mysqli_fetch_assoc($sql);
    $_SESSION['ClientID']=$result['id'];
     ?>
    <script>
    window.location.href="../eud.php";
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
