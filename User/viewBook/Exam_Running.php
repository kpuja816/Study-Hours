<?php
//include('header.php');
include('../../db_configure.php');
session_start();
$answer=array();
function get_value()
{
   $answer=array();
    $count=$_SESSION['total_ques'];
    for($j=0;$j<$count;$j++)
    {
        $in="radio_btn".$j;
        $radio1= $_POST[$in];
        array_push($answer,$radio1);
        $_SESSION['ans']=$answer;
    }
   header("Location: http://localhost/hse/User/viewBook/Exam_Finish.php");


}
if(isset($_POST['btn_finish']) || $_SESSION['timer_ends']=='1')
{
   get_value();
}
?>

<html>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Custom styles for this template -->
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" href="css/index.css">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    
    
<script>
    function callFunction() {
    location.replace("http://localhost/hse/User/viewBook/Exam_Finish.php")
    }
</script>
<style>

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
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
        table,tr,td{ color:#434348;}
.sp
{padding-left:80px;}

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
  
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
       
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
      <!--NAVBAR SECTION END-->
</br></br>
         <div  class="tag-line" >
         
           <div class="row text-center" style="width:100%">
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="../ds.html" class="btn btn-primary btn-lg" > Back  </a></span>
    		
		
	
                   
               </div>
             </div>
        
    </div>
                                  
 </label>


		 
</table>



<body onload="startTimer()" >
 <form action="Exam_Running.php" method="post" id="form">  				


 
<br><br>
<?php $category= $_SESSION['cate']; ?>
<center>
<h3 style="margin-left:20px;">Exam :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $category; ?></h3>
<br>
	 <div class="time" id="navbar">Time left :<span id="timer"></span></div>

<H5 style="color:red">YOU HAVE TO FINISH AND SUBMIT WITHIN THIS TIME OTHERWISE YOUR EXAM WILL NO BE EVALUATED</H5>
<table style="height:300px;width:700px;">
<center>
     
 <?php  
    
        $i=0;
        $sql = mysqli_query($con,"SELECT * FROM ques_answer where category='$category'");
        while($result = mysqli_fetch_array($sql)) 
         {   
         
         ?> 
<tr><td colspan="2" ><p>Question <?php echo $i+1; ?>: <?php echo $result['question']; ?></p></td></tr>
<tr><td class="sp" style="width:90%;">(a)<?php echo $result['option1']; ?></td><td class="sp" style="width:20%">  <input type="radio" id="radio_btn<?php echo $i;?>" name="radio_btn<?php echo $i;?>" value="Answer1" style="width:25px;height:30px"></td></tr>
<tr><td class="sp">(b)<?php echo $result['option2']; ?></td><td class="sp">  <input type="radio" id="radio_btn<?php echo $i;?>" name="radio_btn<?php echo $i;?>" value="Answer2" style="width:25px;height:30px"></td></tr>
<tr><td class="sp">(c)<?php echo $result['option3']; ?></td><td class="sp"> <input type="radio" id="radio_btn<?php echo $i;?>" name="radio_btn<?php echo $i;?>" value="Answer3" style="width:25px;height:30px"></td></tr>
<tr><td class="sp">(d)<?php echo $result['option4']; ?></td><td class="sp">  <input type="radio" id="radio_btn<?php echo $i;?>" name="radio_btn<?php echo $i;?>" value="Answer4" style="width:25px;height:30px"></td></tr>
<tr><td class="sp">(e)<?php echo $result['option5']; ?></td><td class="sp"> <input type="radio" id="radio_btn<?php echo $i;?>" name="radio_btn<?php echo $i;?>" value="Answer5" style="width:25px;height:30px"></td></tr>
<tr><td>&nbsp;</td> <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   </tr>
    <?php 
         $i++;
    } 
   
   ?>
<center>

    <tr>
        
        <td> <button class="btn btn-success" name="btn_finish" href="http://aa-kramah.com/hse/User/viewBook/Exam_Finish.php" style="width:120px" >Done</button></td>
    </tr>

</table>
<br>

</div>
<center>
    <?php 
    
    $_SESSION['total_ques']=$i;
    //$settime='00:05'; 
     $settime=$_SESSION['timer']; 
    ?>
				
 <script type="text/javascript">

document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){
      <?php $_SESSION['timer_ends']='1'?>
document.getElementById("form").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>

<script>
window.onscroll = function() {myFun()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop -50;

function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</form>
</body>
    
</html>


