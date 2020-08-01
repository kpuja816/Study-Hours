<?php
//include('header.php');
include('../../db_configure.php');
session_start();

  
//echo $_SESSION['cate'];
$category= $_SESSION['cate']; 
$n=0;
$sql = mysqli_query($con,"SELECT * FROM ques_answer WHERE category='$category'");
while($row=mysqli_fetch_array($sql))
{
    $n++;
}
?>  
<html>

<style>


.container {
  position: relative;
  width: 100%;
height:25%;
//background-image:url(images/oaaa7.jpg);


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  top: 0px;  left: 0px;
  right:0px;
}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 0px 0px;
  cursor: pointer;
  border-radius: 4px;
}
</style>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
      <title>Kramah Software India Private Limited</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
       <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  	<!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
 
 <style type ="text/css">

			input[type=text] {
				
				          width: 70px;
                                      height: 40px;
                         box-sizing: border-box;
                         border: 2px solid #ccc;
                         border-radius: 4px;
                         font-size: 14px;
						// margin-top: -30px;
                         //background-color: white;
                         background-image: url('/Images/searchicon.png');
                        background-position: 10px 10px; 
                         background-repeat: no-repeat;
                         padding: 10px 10px 10px 20px;
                        
}
table,tr,td{
				                //padding-left:5px;
				                background-color:Transparent;
				                vertical-align:middle;
				               // text-align:left;
                                              //  height: 50px;
                                                white-space: nowrap; 
                                                  padding-left:5px;
                                               // border-bottom: 0.5px solid #999; 
				            //    border-collapse:collapse;
			                   }
				
				th{
					 padding-left:5px;
				
				 vertical-align:middle;
				 text-align:left;
                                 height:10px;
                                 white-space: nowrap; 
				 border-collapse:collapse;
					text-decoration: underline;
					background: Transparent;
				
				}
</style>

<script>
function myFunction() {
var one1 = document.getElementById("one").value;
var two2 = document.getElementById("two").value;
var three3 = document.getElementById("three").value;


		if (one1 > 20) {
        alert("The maximum is 20");
document.importFrm.upload_one_one_one1.focus();
         return false;
        
    } 
if (two2 > 20) {
        alert("The maximum is 20");
document.importFrm.num_one_one_two1.focus();
         return false;
        
    } 
if (three3 > 10) {
        alert("The maximum is 10");
document.importFrm.num_one_one_three1.focus();
         return false;
        
    } 
return true;

}
</script>
		
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="../../images/logo1.png" alt="logo here"  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="../homepage.html">HOME</a></li>
                     <li><a href="../ds.html">DASHBOARD</a></li>
                   
                    
					        <li><a href="../../mainpage.html">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
</br></br>
         <div  class="tag-line" >
         
           <div class="row  text-center" style="width:100%">
           
             </div>
        
    </div>
                                  
 </label>


		 

<script>
function myFunction() {
  location.replace("http://localhost/hse/User/viewAudio/Exam_Running.php")
}
</script>
<div style="height:50%;width:100%;">
<br>
<center>
 
<table style="font-size:16px;font-weight:bold;width:600px">
    <tr><td style="float:left"><a>Number of Question :  <?php echo $n; ?> &nbsp &nbsp &nbsp &nbsp </a></td>
    <td style="width:45%"><a> <?php echo $category; ?> &nbsp &nbsp &nbsp &nbsp </a></td>
    <td style="float:left"><a>Time:   <?php echo $_SESSION['timer']; ?> MIN</a></td>
    </tr>
    <tr><td></td></tr><tr><td></td></tr>
    </table>

<div style="height:300px;width:200px;border: 0.6px solid #EAEBF1;border-spacing: 0;border-style: groove;">
<div style="height:70%;width:100%;background-image:url(../../images/hse.jpg);"></div>
<center><h4 >Health and Safety :</h4></center>
<button class="button" style="margin-top:-10px;height:13%;width:100%;background-color:#4CAF50;" onclick="myFunction()">Start Exam</button>
</div>
<center>
</div>

 

</html>


