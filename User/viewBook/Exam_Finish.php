<?php
//include('header.php');
include('../../db_configure.php');
session_start();
?>
<html>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  max-height:500px;
    overflow-y:scroll;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>    
    
<script>
    function myFunction1() {
   location.replace("../homepage.html")
    }
    function myFunction2() {
    location.replace("all_exam_category.php")
    }
    
</script>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
      <title>Kramah Software India Private Limited</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<?php
//echo "hyyyyyyy".$_SESSION['total_ques'];
//echo "----------".$_SESSION['q'];
//$a=$_SESSION['ans'];
//print_r($a);
//echo "iiiiii".count($_SESSION['ans']);

$qid=array();
$category= $_SESSION['cate']; 
$n=$correct=$wrong=$answered=0;
$sql = mysqli_query($con,"SELECT * FROM ques_answer WHERE category='$category'");
while($row=mysqli_fetch_array($sql))
{
    if($_SESSION['ans'][$n]!='')
    {
        if($_SESSION['ans'][$n]==$row['correct_answer'])
        {
            $correct++;
        }
        else
        {
            $wrong++;
        }
        $answered++;
    }   
    else
    {
        array_push($qid,$row['id']);
    }
   $n++;

}
//print_r($qid);
$total_ques=$_SESSION['total_ques']; 
$score=($correct*100)/$total_ques;
?>
<center>
<h3>You Have Successffully finish the Exam</h3> 

<table border="1" style="height:300px;width:600px;">
<tr style="font-weight:bold"><td >Exam Name</td><td><?php echo $category= $_SESSION['cate']; ?></td></tr>

<tr><td>Total Question</td><td> <?php  echo $total_ques; ?>
</td></tr>
<tr><td>Qusetion Answered</td><td><?php  echo $answered; ?></td></tr>
<tr><td>Qusetion Not Answered</td><td><?php  echo $total_ques-$answered; ?><a id="myBtn"><i style="font-size:28px;float:right;padding-right:10px" class="fa">&#xf05a;</i></a>
<!-- The Modal -->
<div id="myModal" class="modal">

  <div class="modal-content" style="overflow:scroll;">
    <span class="close">&times;</span>
   <?php if(count($qid)==0) { ?>
        <h3 style="font-size:32px;margin-top:10px;font-weight:bold">&nbsp;All Question Answered</h3>
 <?php }
 else{ ?>
        <h3 style="font-size:32px;margin-top:10px;font-weight:bold">&nbsp;Question Not Answered</h3>
 
    <br><br>
<?php $category= $_SESSION['cate']; ?>
<center>
<h3 style="margin-left:20px;">Exam :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $category; ?></h3>
<br>
<table style="height:300px;width:700px;">
<center>
    <?php  
     $i=0;$j=1;
    while($j<=count($qid))
    {
        $sql = mysqli_query($con,"SELECT * FROM ques_answer where id='$qid[$i]'");
        while($result = mysqli_fetch_array($sql)) 
         {   
         
         ?> 
<tr><td colspan="2" ><p>Question <?php echo $j; ?> : <?php echo $result['question']; ?></p></td></tr>
<tr><td class="sp" style="width:90%;">(a)<?php echo $result['option1']; ?></td></tr>
<tr><td class="sp">(b)<?php echo $result['option2']; ?></td></tr>
<tr><td class="sp">(c)<?php echo $result['option3']; ?></td></tr>
<tr><td class="sp">(d)<?php echo $result['option4']; ?></td></tr>
<tr><td class="sp">(e)<?php echo $result['option5']; ?></td></tr>
<tr><td>&nbsp;</td> <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   </tr>
    <?php 
         $i++; $j++;
    } }}
   
   ?>
<center>
</table>
  </div>

</div></td></tr>
<tr><td>Right Answer</td><td><?php  echo $correct; ?></td></tr>
<tr><td>Wrong Answer</td><td><?php  echo $wrong; ?></td></tr>
<tr><td>Score</td><td style="color:red"><?php  echo $score; ?>%</td></tr>
</table>
<?php

//echo $_SESSION['ClientID'],date("d-M-Y H:i:s A"),"Book",$category,$answered,$total_ques-$answered,$score;
    date_default_timezone_set('Asia/Kolkata');
    $list = array (array($_SESSION['ClientID'],date("d-M-Y H:i:s A"),"Book",$category,$total_ques,$answered,$total_ques-$answered,$correct,$wrong,$score));
    $file = fopen('../../assets/Log/ClientLog.csv',"a");
	foreach ($list as $line) {fputcsv($file, $line);}
	fclose($file);
?>
<br>
<button class="button" style="height:30px;width:200px;background-color:#506ACB" onclick="myFunction1()">Go Home</button>
<button class="button" style="height:30px;width:200px;background-color:#506ACB " onclick="myFunction2()">Another Exam</button>
</div>
<center>
    
    
    

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>    
    
</html>


