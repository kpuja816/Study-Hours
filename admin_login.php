<?php 
//include('header.php');
session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM Admin WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id_update = $result['id'];
     
 
 // $username =$result['username'];
 $email = $result['email'] ;
  $password = $result['password'];
   //$cpassword =$result['cpassword'];
  


}
}}
//-------------------------------

include('admin_login_db.php');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
$link .= "://"; 
  
$link .= $_SERVER['HTTP_HOST']; 
  
$link .= $_SERVER['REQUEST_URI']; 
      
$_SESSION['back'] = $link;

?>



    <!DOCTYPE html>
    <html lang="en" >
        

    <head>
      <meta charset="UTF-8">
      <meta name="google-signin-scope" content="profile email">
      <script src="https://apis.google.com/js/client:platform.js?onload=startApp"></script>
      <meta name="google-signin-client_id" content="212335358013-thggb2tgr7462dmoc0253v80vabdeg1k.apps.googleusercontent.com">
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

     .loginBox2 {
      -webkit-transform: translate3d(0, 0, 0);
      position: absolute;
      top:110px;
      height:400px;
      right:25px;
      width: 100%;
      background: rgba(0,0,0,.5);
      max-width: 380px;

      -webkit-box-shadow: 0 30px 35px -15px rgba(0, 0, 0, 0.3), 0 5px 15px -5px rgba(0, 0, 0, 0.4);
      box-shadow: 0 30px 35px -15px rgba(0, 0, 0, 0.3), 0 5px 15px -5px rgba(0, 0, 0, 0.4);
    }
    .loginBox2  input[type="text"],
    .loginBox2 input[type="password"]
    {


     border: none;
     border-bottom: 1px solid #fff;
     background: transparent;
     outline: none;
     height:40px;
     width:300px;
     color: #fff;
     cursor: pointer;
     font-weight: bold;
     font-size: 14px;
     padding: 10px 10px;
   }
   .logo{ 
     margin-bottom:122cm;;
     margin-left:8cm;
     padding-top:10px;
     
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
   
   color:white;
   
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
 }

 .form-group {
   width: 100%;
   position: relative;
   margin-bottom: 30px;
   margin-left:20px;
 }
 .form-group input {
   border: 0;
   border-bottom: 1px solid white;
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
 h3
 {
   
   color:#FFFFFF;
   
   
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
 .btn{
   border-radius:5px;
   color:white;
   background-color:#e60000;
   width: 20px;
   height: 28px;
   position:absolute;
   transition:.5s ease;
   left:40px;
   top:300px;
 }
 input[type="submit"] {
   width: 300px;
   height: 40px;
   text-align: center;
   border-radius: 100px;
   border: 0;
   font-weight: bold;
   background:#ef4079 ;
   color: white;
   margin-bottom: 30px;
   margin-left: 1px;
   
   -webkit-transition: background 0.3s;
   transition: background 0.3s;
   cursor: pointer;
 }
 input[type="submit"]:hover {
   background: #f17e32;
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
 


 

	
 
  <form action="admin_login.php" method="POST"> 
   <div class="loginBox2"> <center><img src ="images/logo1.png" height="50" style="margin-left:10px;" alt =" " /></a></center>
     <h3 align="center"> Login</h3>
     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th><font color="White">Username: </font></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" placeholder="Username"><br> <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="White">Password:</font>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </br>
     &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password" placeholder="Password"> <br> <br> 

     <center> <input type="submit" value="Login" name="submit" class ="btn btn-primary btn-login" /> </center> 
     <br> <br> <br> <br><br> 
     <center><a href="forgot.php">Forgot your password ?</a><br></center>
   </form> <br> <br> 


   <br /><br />



 </body>
 </html>