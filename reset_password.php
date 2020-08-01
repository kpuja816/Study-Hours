<?php

include('db_configure.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,"SELECT * FROM password_reset_temp WHERE keyValue='$key' and email='$email';");
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="forgot.php"> Click here</a> to reset password.</p>';
	}else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
     
      $table = '';

  ?>
  
  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

------


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
<title>Kramah Software India Private Limited</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <style type ="text/css">
  * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
    background-image:url(images/download.jpg);
    background-size:   cover;                    
    background-repeat:   no-repeat;
    background-position: center center;
  height: 100vh;
  
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-family: Arial;
  overflow: hidden;
}

.form-container {
  -webkit-transform: translate3d(0, 0, 0);
  position: absolute;
  top:100px;
  height:390px;
  right:25px;
  width: 100%;
background: rgba(0,0,0,.5);
  max-width: 380px;

  -webkit-box-shadow: 0 30px 35px -15px rgba(0, 0, 0, 0.3), 0 5px 15px -5px rgba(0, 0, 0, 0.4);
          box-shadow: 0 30px 35px -15px rgba(0, 0, 0, 0.3), 0 5px 15px -5px rgba(0, 0, 0, 0.4);
}

.form-container input[type="text"],
.form-container input[type="password"]
{
border: none;
border-bottom: 1px solid white;
background: transparent;
outline: none;
height:30px;
width:240px;
color: white;
 cursor: pointer;
  font-weight: bold;
font-size: 16px;
 margin-left: 10px;
}
.logo{ 
              margin-bottom:122cm;;
              margin-left:8cm;
               padding-top:10px;
               
            }
            .button
{
    width: 350px;
  padding: 15px;
  text-align: center;
  border-radius: 100px;
  border: 0;
  font-weight: bold;
  background: green;
  color: white;
  margin-bottom: 20px;
  margin-left: 20px;
  -webkit-transition: background 0.3s;
  transition: background 0.3s;
  cursor: pointer;
}
.button:hover
{
background:red;
color:#FFFFFF;
}

.form-1 {
  z-index: 2;
}
.form-1.submitted {
  -webkit-animation: switchback 1.2s forwards;
          animation: switchback 1.2s forwards;
}
.form-1.goback {
  -webkit-animation: switchfront 1.2s forwards;
          animation: switchfront 1.2s forwards;
}

.form-2 {
  z-index: 1;
}
.form-2.pull {
  -webkit-animation: switchfront 1.2s forwards;
          animation: switchfront 1.2s forwards;
}
.form-2.push {
  -webkit-animation: switchback 1.2s forwards;
          animation: switchback 1.2s forwards;
}
.form-2 .form-image {
  background-image: url(https://res.cloudinary.com/dqj168cdc/image/upload/v1491578856/daily-ui-1_2_irnqx9.jpg);
}

.form-3 {
  z-index: 3;
  -webkit-transform: translateY(200%);
          transform: translateY(200%);
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
}
.form-3.active {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.form-3 .form-image {
  background: url(https://res.cloudinary.com/dqj168cdc/image/upload/v1491834414/daily-ui-1_3_ujd5km.jpg) no-repeat bottom center;
  background-size: cover;
}

.padding-wrap {
  padding: 20px 50px 40px;
}
a {
                   
                   color:black;
                   
                }    

.form-image {
  width: 100%;
  height: 220px;
  background: url(https://res.cloudinary.com/dqj168cdc/image/upload/v1491491489/daily-ui-1_hqgvnv.jpg) no-repeat top center;
  background-size: cover;
  position: relative;
}
.form-image svg {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
}

h1 {
  margin: 0;
  margin-bottom: 30px;
  color: white;
  font-size:24px;
}

.form-group {
  width: 100%;
  position: relative;
  margin-bottom: 30px;
  margin-left:20px;
}
.form-group input {
  border: 0;
  border-bottom: 1px solid black;
  width: 100%;
  padding: 8px;
  -webkit-transition: border-color 0.3s;
  transition: border-color 0.3s;
}
.form-group input:focus {
  outline: none;
  border-color: #f3904f;
}
.form-group input:focus + label {
  -webkit-transform: scale(0.8) translateY(-140%);
          transform: scale(0.8) translateY(-140%);
  color: #f3904f;
}
.form-group input:valid + label {
  -webkit-transform: scale(0.8) translateY(-140%);
          transform: scale(0.8) translateY(-140%);
  color: #f3904f;
}
.form-group label {
  position: absolute;
  top: 8px;
  left: 0;
  cursor: text;
  -webkit-transition: color 0.3s, -webkit-transform 0.3s;
  transition: color 0.3s, -webkit-transform 0.3s;
  transition: transform 0.3s, color 0.3s;
  transition: transform 0.3s, color 0.3s, -webkit-transform 0.3s;
}

input[type="submit"] {
  width: 350px;
  padding: 15px;
  text-align: center;
  border-radius: 100px;
  border: 0;
  font-weight: bold;
  background: #f17;
  color: white;
  margin-bottom: 20px;
  margin-left: 20px;
  -webkit-transition: background 0.3s;
  transition: background 0.3s;
  cursor: pointer;
}
input[type="submit"]:hover {
  background: red;
}
input[type="submit"]:focus {
  outline: none;
}

.login {
  display: block;
  text-align: center;
  font-size: 13px;
}
.login a {
  color: #3b4371;
  cursor: pointer;
  font-weight: bold;
}
.login a:hover {
  color: #2a2f4f;
}

@-webkit-keyframes switchback {
  0% {
    -webkit-transform: translateX(0) scale(1);
            transform: translateX(0) scale(1);
    z-index: 2;
  }
  25% {
    -webkit-transform: translateX(0) scale(1.1);
            transform: translateX(0) scale(1.1);
    z-index: 2;
  }
  50% {
    -webkit-transform: translateX(-50%) scale(1.1);
            transform: translateX(-50%) scale(1.1);
    z-index: 2;
  }
  75% {
    -webkit-transform: translateX(-50%) scale(0.9);
            transform: translateX(-50%) scale(0.9);
    z-index: 2;
  }
  80% {
    z-index: 1;
  }
  100% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
}

@keyframes switchback {
  0% {
    -webkit-transform: translateX(0) scale(1);
            transform: translateX(0) scale(1);
    z-index: 2;
  }
  25% {
    -webkit-transform: translateX(0) scale(1.1);
            transform: translateX(0) scale(1.1);
    z-index: 2;
  }
  50% {
    -webkit-transform: translateX(-50%) scale(1.1);
            transform: translateX(-50%) scale(1.1);
    z-index: 2;
  }
  75% {
    -webkit-transform: translateX(-50%) scale(0.9);
            transform: translateX(-50%) scale(0.9);
    z-index: 2;
  }
  80% {
    z-index: 1;
  }
  100% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
}
@-webkit-keyframes switchfront {
  0% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
  25% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
  50% {
    -webkit-transform: translateX(50%) scale(0.9);
            transform: translateX(50%) scale(0.9);
    z-index: 1;
  }
  75% {
    -webkit-transform: translateX(50%) scale(1);
            transform: translateX(50%) scale(1);
    z-index: 1;
  }
  80% {
    z-index: 2;
  }
  100% {
    -webkit-transform: translateX(0) scale(1);
            transform: translateX(0) scale(1);
    z-index: 2;
  }
}
@keyframes switchfront {
  0% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
  25% {
    -webkit-transform: translateX(0) scale(0.9);
            transform: translateX(0) scale(0.9);
    z-index: 1;
  }
  50% {
    -webkit-transform: translateX(50%) scale(0.9);
            transform: translateX(50%) scale(0.9);
    z-index: 1;
  }
  75% {
    -webkit-transform: translateX(50%) scale(1);
            transform: translateX(50%) scale(1);
    z-index: 1;
  }
  80% {
    z-index: 2;
  }
  100% {
    -webkit-transform: translateX(0) scale(1);
            transform: translateX(0) scale(1);
    z-index: 2;
  }


  </style>
</head>



------

<body>
 

   

    <form class="form-container" action="reset_password.php" method="post">
    <center><img src ="images/logo1.png"  style="height:50px; alt ="  " /></center>
 <table border="0" width="0px">
          <tr>
              <th colspan="2" style="color:green"> Reset Password</th>
          </tr>
          <tr>
              <td><input type="hidden" name="action" value="update" />
              <div class="">
              <label style="color:pink">Enter New Password:</label></td>
              <td> <input type="password" name="pass1" required id="myInput" /> <br> <br> 
              
              <input type="checkbox"  onclick="myFunction()" ></input>
              <label style="color:pink">Show Password</label>

              </td>
          </tr>
          <tr>
              <td><label style="color:pink">Re-Enter New Password:</label></td>
              <td>  <input type="password" name="pass2"  required/></td>
          </tr>
          <tr>
              <td colspan="2"><input type="hidden" name="email" value="<?php echo $email;?>"/><br><br>
  <button type="submit" name="update" class="signupbtn" style="background-color:green; margin-left:140px;height:50px; width: 150px !important;" >Reset Password</button></td>
          </tr>
      </table>
</form>  
</body>


--------




 
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 2 days.<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
?> <script>
   alert('Password do not match, both password should be same');
     window.history.back();
   </script>
   
   <?php
  }
  else{
$pass1 = $pass1;
mysqli_query($con,"UPDATE Admin SET password='$pass1',cpassword='$pass1' WHERE email='$email'");




mysqli_query($con,"DELETE FROM password_reset_temp WHERE email='$email';");
	
?> <script>
    alert('Congratulations! Your password has been updated successfully.');
    window.location.href="adminlogin.php"
</script><?php

	  }		
}
?>