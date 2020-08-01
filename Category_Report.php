<?php
include('db_configure.php');
session_start();
if($_GET['type']!='')
{
   $category=$_GET['type'];
   $_SESSION['category']=$category;
 
} 
if(isset($_POST['btn-subType']))
{
    $category=$_SESSION['category'];
     $subType=$_POST['subType'];
    header("Location: http://localhost/hse/Category_Report.php?subType=$subType");
} 
if($_GET['subType']!='')
{
   $subType=$_GET['subType'];
   $_SESSION['subType']=$subType;
 
} 
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.container {
    height:150px;
    width:270px;
    padding-right:20px;
    float:left;
    color:white;
    text-align:right;
  position: relative;


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
   padding-right:20px;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  top: 0px;  left: 0px;
  right:0px;
}
td{text-align:center;}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
        table,tr,td{ border: 0.5px solid #EAEBF1;border-spacing: 0;border-style: groove;color:#434348}



/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 60px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size:14px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


/* Main content */
.main {
  margin-left: 100px; /* Same as the width of the sidenav */
  font-size: 12px; /* Increased text to enable scrolling */
  padding: 10px 10px;
  padding-top:10px;
  color:#808080;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #808080;
  color:black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
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
 



</head>
<?php

if(isset($_POST['btn2']))
{
     $category=$_GET['type'];
   header("Location: http://localhost/hse/Category_Report.php?type=Book");
} 
if(isset($_POST['btn3']))
{
     $category=$_GET['type'];
   header("../Category_Report.php?type=Audio");

} 
if(isset($_POST['btn4']))
{
     $category=$_GET['type'];
   header("Location: http://localhost/hse/Category_Report.php?type=Video");

} 
?>
<body style="overflow: hidden;">
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu" style="height:80px;">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand"  style="margin-left:100px" href="#"><img class="logo-custom" src="images/logo1.png" alt="logo here"  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                     <li ><a href="homepage1.html">HOME</a></li>
                     <li><a href="admin_ds.html">DASHBOARD</a></li>
	                <li><a href="mainpage.html">LOGOUT</a></li>
	
                </ul>
            </div>
         </div>
    </div>
  <br> <br>
<div style="background-color:E9E9E9;height:100px">
    <br>
     <h2 data-scroll-reveal="enter from the bottom after 0.1s" style="margin-left:100px" ><span class="bckleft">
           <a class="btn btn-primary btn-lg"   style="margin-left:100px;margin-top:10px" href="http://localhost/hse/admin_ds.html"> Back </a></span>
           <br>
</h2>  
</div>
<div class="main">
  <h3> Dashboard</h3>
  <hr>
<?php

 // session_start();
  $total_video_exam=$total_book_exam=$total_audio_exam=0;
    $cid=$_SESSION['ClientID'];
   //echo "hiii".$cid;
   $k=0;
    if (($h = fopen("assets/Log/ClientLog.csv", "r")) !== FALSE) 
    {
       
         while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
         {
            $i=0;  


                $category=$data[2];
				//echo  $category ;
        	    if($category=='Video') 
        	    { 
        	        $total_video_exam++;
        	    }
        	    if($category=='Book') 
        	    { 
        	        $total_book_exam++;
        	    }
        	    if($category=='Audio') 
        	    { 
        	       $total_audio_exam++;
        	    }


			/*
           while($i<count($data))
           {
                //  $data[$i++];
				//$data[$i++];
				
                
        	    $i++;
        	   
        	}
			*/
          $k++;
           ?>
            <?php
          
         }
        fclose($h);
}
?>
 <form class="search" action="Category_Report.php" method="POST">
 <button name="btn1" type="submit" style="background-image:url(images/oaaa7.jpg);width:280px;margin-left:5px;border-style: hidden;" class="container">
    <i class="fa fa-comments" style="font-size:150px; float:left">
    <div class="content" style="background:rgb(50,205,50); 
   background: rgb(50,205,50, 0.8);"><h2><?php echo $total_book_exam+$total_video_exam+$total_audio_exam; ?></h2><h4>Total Exam</h4>
    </div>
    </i>
</button>    
<div style="height:150px;width:15px;float:left;border-style: hidden;"></div>
   
<button name="btn2" type="submit" style="background-image:url(images/oaaa7.jpg);width:280px;margin-left:5px;border-style: hidden;" class="container">
    <i class="fa fa-comments" style="font-size:150px; float:left; ">
    <div class="content" style="background:rgb(0, 0, 255); 
   background: rgb(0, 0, 255, 0.8);"><h2><?php echo $total_book_exam; ?></h2><h4>Book</h4>
    </div>
    </i>
</button>    
<div style="height:150px;width:15px;float:left;border-style: hidden;"></div>

<button name="btn3" type="submit" style="background-image:url(images/oaaa7.jpg);width:280px;border-style: hidden;" class="container">
        <i class="fa fa-bar-chart-o" style="font-size:150px; float:left; ">

    <div class="content" style="background:rgb(255, 0, 0); 
   background: rgb(255, 0, 0, 0.8);">
    <h2><?php echo $total_audio_exam; ?></h2><h4>Audio</h4></div></i>
    </button>
<div style="height:150px;width:15px;float:left;border-style: hidden;"></div>

<button name="btn4" type="submit" style="background-image:url(images/oaaa7.jpg);width:280px;border-style: hidden;" class="container">
       <i class="fas fa-comment-alt" style="font-size:130px; float:left; ">
    <div class="content" style="background:rgb(0, 184, 230); 
   background: rgb(0, 184, 230, 0.8);">
    <h2><?php echo $total_video_exam; ?></h2><h4>Video</h4></div>
    </i></button>
<div style="height:150px;width:15px;float:left;border-style: hidden;"></div>


</div>
</center>
</form>
   <br><br>
<div style="background:green;margin-top:100px;margin-top:120px">
<p>

</p> 

</div>
<h3 style="margin-left:100px"> 
<?php
if($_SESSION['category']!='')
{
   echo $_SESSION['category'];
 

?></h3>
<hr style="margin-left:100px">

<form action="Category_Report.php" method="post" class="form"  >

        <select class="btn-lg" name="subType" style="margin-left:100px;margin-top:20px;height:50px;;width:400px">
         <option value="All">Sub Category </option>
         <option value="Participation on Health and Safety Hazards">Participation on Health and Safety Hazards</option>
         <option value="Behavioral Approach">Behavioral Approach</option>
         <option value="Safety Hazards">Safety Hazards</option>
        <option value="Health Hazards">Health Hazards</option>
		</select> 
		<button  class ="btn btn-danger btn-lg" name="btn-subType" style="width:150px;height:50px">Show</button>
	
	</form>
	<?php if($_GET['subType']!='')
	{?>
<table cellspacing=0 border=3 width="1200" height="260" text-align="center" style="margin-left:80px;margin-right:10px;margin-top:50px;">
<th><center>Client ID</center></th>
<th><center>Time</center></th>
<th><center>Category</center></th>
<th><center>Sub Category</center></th>
<th><center>Total Marks</center></th>
<th><center>Answered</center></th>
<th><center>Not Answered</center></th>
<th><center>Correct</center></th>
<th><center>Wrong</center></th>
<th><center>Score</center></th>

<?php

if($subType!='')
{
    $k=0;   
   if (($h = fopen("assets/Log/ClientLog.csv", "r")) !== FALSE) 
    {
       
         while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
         {
            $i=0;     
           while($i<count($data))
           {
        	
        	    if($subType=='All' && $data[2]==$_SESSION['category'])
        	    {
        	        $k++;
        	        echo '<tr>' . '<td>'.'<center>';
        	        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++] . '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			         echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	    
        	    }
        	    else if($data[3]==$subType && $data[2]==$_SESSION['category'])
        	    {
        	        $k++;
        	 	    echo '<tr>' . '<td>'.'<center>';
        	        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++] . '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		             echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	    }
        	    
        	    $i++;
           }
           ?>
            <?php
          
         }
        fclose($h);
    }
    $_SESSION['k']=$k;


?>

 </table>
 </center>
<br/>

		
<?php 
if($k==0)
    {?>
    
        <p style="margin-left:100px;font-size:34px;margin-top:20px"> No Record Found </p> 
        <hr>
    <?}
else
    {?>
<a href="Category_Report_Print.php" target="_blank" style="margin-left:90px;font-size:20px;width:150px;background-color: #428bca;height:50px;border-color: #357ebd;" name="btn_print" class ="btn btn-primary btn-lg" >Print</a><br><br><br>
<?php }
}
}//subcategory close
}//category close?>
<div id="footer" style="margin-left:-200px">
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


