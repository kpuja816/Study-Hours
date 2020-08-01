<?php

include('db_configure.php');

if(isset($_POST['adminsubmit']))
{
   
   if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
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
    if(empty(trim($_POST["cpassword"]))){
        $cpassword_err = "Please enter your cpassword.";
    } else{
        $cpassword = trim($_POST["cpassword"]);
    }

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
    alert('New Admin Added');
    window.location.href="admin_login.php";
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

<?php

if(isset($_POST['submit']))
{
   
$Email = $_POST['email'];
$Pass=$_POST['password'];
$sql = "select * from Admin  where email='$Email' and password='$Pass'";
 if(!mysqli_query($con,$sql))
{
    ?>
     <script>
    alert('Failed to connect');
    return false;
    </script>
    
    <?php
}
else{
     ?>
    <script>
    window.location.href="homepage1.html";
    </script>
       
    <?php
}
}

?>
