<?php
//include('header.php');
session_start();
include('../../db_configure.php');
$_SESSION['timer_ends']='0';

?>

<html>

<?php

if(isset($_POST['btn1']))
{
   $_SESSION['timer']='10:00'; 
   $_SESSION['cate']='Participation on Health and Safety Hazards';
   header("Location: http://localhost/hse/User/viewVideo/Exam_Review.php");

} 
if(isset($_POST['btn2']))
{
   $_SESSION['timer']='25:00';  
   $_SESSION['cate']='Health Hazards'; 
   header("Location: http://localhost/hse/User/viewVideo/Exam_Review.php");
} 
if(isset($_POST['btn3']))
{
   $_SESSION['timer']='15:00'; 
   $_SESSION['cate']='Safety Hazards';
   header("Location: http://localhost/hse/User/viewVideo/Exam_Review.php");

} 
if(isset($_POST['btn4']))
{
    $_SESSION['timer']='10:00'; 
    $_SESSION['cate']='Behavioral Approach';
   header("Location: http://localhost/hse/User/viewVideo/Exam_Review.php");

} 

?>




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
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="../ds.html" class="btn btn-primary btn-lg" > Back  </a></span>
    		
		
	
                   
               </div>
             </div>
        
    </div>
                                  
 </label>


		 
</table>

<style>


.container {
  position: relative;
  width: 100%;
height:25%;
background-image:url(images/images.jpeg);


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

.div1
		{
	      
			height:-2px;
			width:100%;
			background-color:blue;
			
		}
		
		  .second-div {
       margin-top:0px !important;
         width:100%;
         font-family:Arial !important;
     }
     
    .div-left img {
         width : 180px !important;
         height : 180px !important;
        text-align : center !important;
      
        margin-right : 50% !important;
        
                padding : 0px !important;
       } 
         
      .div-right p  {
            width : 200px !important;
        text-align : justify !important;

       height : 200px !important;
        padding : 5px !important;

       }
        .div-right h1 {
         font-family:Arial;
        font-size:18px !important;
        color :white !important;
        text-align : center !important;
        padding : 10px !important;
        font-weight : bold;
        }
		
</style>
</head>
<form action='all_exam_category.php' method='post'>

</div>

  
  
   <br>

 
</div>

<div style="height:60%;width:100%;">
<br>
<center>
<table style="font-size:16px;font-weight:bold;width:600px">
    <tr><td style="float:left"><a></a></td>
    <td style="width:45%"><a></a></td>
    </tr>
    <tr><td></td></tr><tr><td></td></tr>
    </table>


  <h3>All Exam Category</h3>
  

<table style="font-size:14px;;width:600px;border:1px solid black">
    <tr ><td style="float:left"><a>Approach to Health and Safety Hazards 
</a></td>
    <td>price</td>
    <td>Time/Min</td>
    <td>Action</td>
    </tr>
    
    <tr>
        <td style="float:left"><a>Participation on Health and Safety 
         <td></td>
         <td>10 Min</td>
       <td> <button class="btn btn-success"  style="width:120px" name='btn1'>Start Exam</button></td>
</a></td>
    </tr>
    
    <tr>
        <td style="float:left"><a>Health Hazards 
</a></td>
     <td></td>
    <td>25 Min</td>
   <td> <button class="btn btn-success" style="width:120px" name='btn2'>Start Exam</button></td>
    </tr>
     <tr>
        <td style="float:left"><a>safety hazards  
</a></td>
     <td></td>
    <td>15 Min</td>
   <td> <button class="btn btn-success" style="width:120px" name='btn3'>Start Exam</button></td>
    </tr>
     <tr>
        <td style="float:left"><a>Behavioral Approach  
</a></td>
     <td></td>
    <td>10 Min</td>
    <td> <button class="btn btn-success" style="width:120px" name='btn4'>Start Exam</button></td>
    </tr>

    </table>

<center>
</div>
</form>
</body>
   
    <div id="footer">
	Copyright &copy 2018| Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP--></a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="../Testing1/assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="../Testing1/assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="../Testing1/assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="../Testing1/assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="../Testing1/assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="../Testing1/assets/js/custom.js"></script>

</html>




