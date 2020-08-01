<?php

include("db_configure.php");
$system_email='';
  $system_email_query = mysqli_query($con,"SELECT * FROM Admin");
            $result_system_email_query = mysqli_fetch_assoc($system_email_query);
            $system_email = $result_system_email_query['email']; 
            
if(isset($_POST["email"]) && (!empty($_POST["email"])))

{
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
    
    ?><script>
        alert('Invalid email address please type a valid email address!');
    </script>
 <?php
   }
   
   else{
   $sel_query = "SELECT * FROM Admin WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
  
       
   }
   if ($row == ""){
       
       ?><script>
        alert('No user is registered with this email address!');
    </script>
 <?php
  
   }
  
   else
   {
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+2, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
     mysqli_query($con,"INSERT INTO password_reset_temp(email,keyValue,expDate) VALUES ('$email', '$key', '$expDate')");
     

                $subject = "Reset Password";
                
$message = "
Dear User, <br><br>


We have received a request to reset your password. To reset your password
please click on the following link in the browser- <br><br>

http://aa-kramah.com//hse/reset_password.php?key=$key&email=$email&action=reset <br><br>


If you haven't made this request, you don't need to do anything. You can
continue to use your password. This request will automatically expire in 2
days. <br>

Thank you, <br>
Health and Safety System.

";



                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                $headers .= 'From: '.$system_email.'' . "\r\n";
                
                mail($email,$subject,$message,$headers);
                
                ?><script>
        alert('Reset password link has been sent your email!');
    </script>
 <?php
}
}

?>


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
width:300px;
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




        
           

<body>
 

   

    <form class="form-container" action="forgot.php" method="post">
    <center><img src ="images/logo1.png"  style="height:50px; alt ="  " /></center>

<br/>
 <h1 align="center">Find Password</h1>
 <br/>
      <div class="form-group">
      
          <input required id="name" name="email" type="text" />
        <label for="name">Email ID</label>
      </div>


     <input type="submit"  value="Reset" name="submit" /> 
       <input type="button" class="button" onclick ="myFunction()" value="Go to login page"/> 
    

</form> <br> <br>  

    </form>

<script>
function myFunction() {
  location.replace("http://aa-kramah.com/hse/adminlogin.php")
}

</script>
</body>
</html>