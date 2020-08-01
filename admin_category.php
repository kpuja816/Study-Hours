<?php 

session_start();
if(isset($_GET['id']))
{
$_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM modal_title WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
   $_SESSION['edit_state']="true";
   $result=mysqli_fetch_assoc($sql);
   $id_update = $result['id'];
   $sub_category =$result['sub_category'];
   $base_category = $result['base_category'] ;
   $currency =$result['currency'];
   $modal_time =$result['modal_time'];
}
}}

include('admin_category_db.php');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
$link .= "://"; 
  
$link .= $_SERVER['HTTP_HOST']; 
  
$link .= $_SERVER['REQUEST_URI']; 
      
$_SESSION['back'] = $link;

?>


<style>

.h4
{
font: normal 24px/normal "Times New Roman", Times, serif;
}

.third
{
display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;
z-index: auto;
width: 96px;
height: 36px;
padding: 10px 20px;
position: static;
cursor: pointer;
opacity: 1;
margin-left: 127px;

overflow: visible;
border: 1px solid #018dc4;
-webkit-border-radius: 3px;
border-radius: 3px;
font: normal 14px/normal "Times New Roman", Times, serif;
color: rgba(255,255,255,0.9);
-o-text-overflow: clip;
text-overflow: clip;
background: #0199d9;
-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}

.div{
display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;
z-index: auto;
width: 664px;
height: 330px;
position: static;
cursor: default;
opacity: 1;
margin: 28px;
padding: 10px 20px;
overflow: visible;
border: 21px double rgba(16,150,239,0.65);
-webkit-border-radius: 3px;
border-radius: 3px;
font: normal 18px/normal "Times New Roman", Times, serif;
color: black;
-o-text-overflow: clip;
text-overflow: clip;
background: rgba(252,252,252,1);
-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}
.body
{
    background: white
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
		
<header>

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>  
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<header/> 
<style>
.hs{
	width:90%;
	margin-left:50px;
	margin-right:50px;
	
}

.hs ul{
	list-style:none;
	margin:0;
	padding:0;
	
	
}

.hs ul li{
	width:220px;
	float:left;
	margin-right:30px;
	height:350px;
		
}

.showcase {
  / Set it so we could calculate the offsetLeft /
  position: relative;
 
  width: 500px;
  overflow: auto;
  float:left;
}

.left-arrow{
	width:22px;
	height:197px;
	display:block;
	margin-left:30px;
	margin-right:50px;
	float:left;
}

.right-arrow{
	width:22px;
	height:197px;
	display:block;
	margin-left:50px;
	float:left;	
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
   //find div
    var div = $('div.showcase');
    //find ul width
    var liNum = $(div).find('ul').children('li').length;
    var speed = 1000;
    var containerWidth = 848;
    var itemWidth = 500;
    //Remove scrollbars
    $(div).css({overflow: 'hidden'});
    $('div.right-arrow').click(function(e){	
          if(($(div).scrollLeft()+containerWidth)<(liNum*itemWidth)){
             $(div).animate({
                scrollLeft: '+='+containerWidth
              }, speed);
          }
    });	
    $('div.left-arrow').click(function(e){	
        if(($(div).scrollLeft()+containerWidth)>containerWidth){
                $(div).animate({
                scrollLeft: '-='+containerWidth
              }, speed);
        }
    });
});
</script>
</head>
<body style="overflow: hidden;">
   
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
                <a class="navbar-brand" href="#"><img class="logo-custom" src="images/logo1.png" alt="logo here"  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="homepage.html">HOME</a></li>
                     <li><a href="ds.html">DASHBOARD</a></li>
                   
                    
					        <li><a href="mainpage.html">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
</br></br>
         <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="http://localhost/hse/admin_ds.html" class="btn btn-primary btn-lg" > Back  </a></span>
    		
		 
		<body><div class="container" Style="margin-left: 1027px;">
 <img src="images/logo.png" height="60px">
</div>
<div class="div" Style="margin-top: -50px;">
<div class="h4">
<h4> Add Categories</h4></div> 
<form name="omani_app" action="admin_category.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>  
     <th >Main Category</th>
	 <th>
     <select name ="main_category"  style="margin-left:-55px;width:250px;Height:30px;">
       <option value=""></option>
     
        <?php
        $program = array("Book","Audio","Video");
        for($i=0;$i<count($program);$i++)
               { ?>
            <option value="<?php echo $program[$i]; ?>"
            
            <?php    if(isset($main_category)) {
                 if($main_category == $program[$i] )
                 {
                     echo "selected";
                 }
             } ?>
            
            >  <?php echo $program[$i]; ?> </option> <?php } ?>
      
          </select>
   </th> </tr>
  
   <tr><th >Sub Category name: </th> 
   <th><input type="text" name="sub_category"  placeholder="sub_category"  style="margin-left:-55px;width:250px;Height:30px;"  value=""></th></tr>
		
   <tr><th>Base Category: </th> 
   <th><input type="text" name="base_category"  placeholder="base_category" style="margin-left:-55px;width:250px;Height:30px;"   value="" ></th></tr>
    
<tr>
<th>Currency: </th>
<th> <input type="text" name="currency" placeholder="currency"  style="margin-left:-55px;width:250px;Height:30px;"  value=""></th></tr>

<!--
<tr>
<th><label for="modal_time"  style="margin-left:60px;">Time: </label></th>
<th> <input type="time" name="modal_time" placeholder="modal_time"  style="margin-left:-200px;width:250px;Height:30px;"  value=""></th>
</tr>
-->
<br><br><br>
<tr>
<th> 
<a type="submit" name="close" href="#" class="signupbtn" Style="width: 100px;
height: 36px;margin-left: 397px;margin-top:20px;background: white;font-color:black"></a></div></th>
<th>
   <button type="submit" name="submit" class="sign"  value="submit" Style="width: 106px;
height: 46px;margin-right: 50px;margin-top:20px;background:#0199d9;">Save Category</button></div></th>
</tr>
</table>

</div>
 
 
		
		</h2> <!-- <h3></h3>-->
                   </div>
               </div>
             </div>
        
    </div>

<br>

		 
</table>
          


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
</body>
</html>

