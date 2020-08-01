<?php 

session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM ques_answer WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id = $result['id'];
     
 

 $category =$result['category'];
   $question =$result['question'];
   $option1 = $result['option1'] ;
   $option2 = $result['option2'];
   $option3 =$result['option3'];
   $option4 = $result['option4'];
   $option5 =$result['option5'];
   $gender =$result['gender'];
 
    


}
}}
//-------------------------------

include('create_new_ques_db.php');

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
	<!--script for onfunction-->

	


	<style>
	
	

	

	.tooltip {
    position: relative;
    display: inline-block;
    
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
    </style>
	
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
	<span class="icon-bar"></span> </button>
 <a class="navbar-brand" href="#"><img class="logo-custom" src="../images/logo1.png" alt="" /></a></div>

 <?php
/*
//session_start();
$ss=$_SESSION['sess_user'];



 error_reporting(E_ALL);
$rolen='';
include('../dbconfigure.php');
$query1=mysqli_query($con,"SELECT role FROM Admin where id=$ss");

while($row1 = mysqli_fetch_assoc($query1))
{
 $rolen= $row1['role'];

}	
 //print $rolen;
//print $ss;
 
if($rolen!='user')
{
*/
?>
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../homepage1.html">HOME</a></li>
 <li><a href="../admin_ds.html">DASHBOARD</a></li>

 

	<li><a href="../mainpage.html">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
 
<?php
/*
}else
{
*/
?>
<!--
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../homepage1.html">HOME</a></li>
	<li><a href="../mainpage.html">LOGOUT</a></li>
	-->
    <!--    <li><a  href="http://yenepoyaden.kramah.in/yenepoya_naac/naacuser2/userhome2.0.php"> Back  </a>

</li>-->

 </ul>
 </ul>
 </div>
<?php
//}
?>
 </div>
 </div>

     <!--NAVBAR SECTION END--><br/><br/>
        <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">


           <?php
//if($rolen!='user')
{
?>    
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="addquestion.php" class="btn btn-primary btn-lg" > Back  </a></span>

</h2>

<?php
}
?>

<h2>

<i class="fa fa-circle-o-notch"></i> 1.1.1 ADD QUESTION AND ANSWER 
 <i class="fa fa-circle-o-notch"></i> 
		


		


		      <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   
		
		
		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div>
		
		
	
    <!--END OF THE ROW--> 
 
   
<center><br/>
<form action="insert_1_1_1.php" method="post" enctype="multipart/form-data">
<div class="table-sec">
 <table cellspacing=0  width="648" height="260" >

<input type="hidden" name="file-hidden" class="hiii" id="t0" value="NONE" required>


<tr> 
<td> 
 <label for="" >Exam Category: </label><td> </tr>
<tr>
<td>
   
       <select name ="category" id="category" style="width:650px;Height:30px;">
             <option value=""></option>
       
        <?php
        
    
    $program = array("Participatio on Health and Safety Hazards","Health Hazards","Safety Hazards","Behavioral Approach");        
         for($i=0;$i<count($program);$i++)
               { ?>
            <option value="<?php echo $program[$i]; ?>"
            
            <?php    if(isset($category)) {
                 if($category == $program[$i] )
                 {
                     echo "selected";
                 }
             }
             ?>
            
            >  <?php echo $program[$i]; ?> </option> <?php }
            
            ?>
               
         
          </select></td> </tr>
    
 
 <tr>
<td><label for="" >Questions: </label></td></tr>
   <tr>
<td >
   
        <input type="text" name="question" id="question" placeholder="What is Safety"  style="width:650px;Height:30px;"  value="" class="form-control" ></td> </tr>
    
 
<tr>
<td><label for="" >First Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option1" id="option1" placeholder="to be safe"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td>
    <input type="radio" id="Answer1" name="gender" <?php if (isset($gender) && $gender==$result['option1']) echo "checked";?> value="Answer1" style="margin-left:-50px">
</td>
</tr>
<tr><td><label for="" >Second Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option2" id="option2" placeholder="Safe no1"  style="width:550px;Height:30px;"  value="" class="form-control"></td>
<td><input type="radio" id="Answer2" name="gender" <?php if (isset($gender) && $gender==$result['option2']) echo "checked";?> value="Answer2" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Third Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option3" id="option3" placeholder="Safe no2"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td><input type="radio" id="Answer3" name="gender" <?php if (isset($gender) && $gender==$result['option3']) echo "checked";?> value="Answer3" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fourth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option4" id="option4" placeholder="Safe no3"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td><input type="radio" id="Answer4" name="gender"<?php if (isset($gender) && $gender==$result['option4']) echo "checked";?> value="Answer4" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fifth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option5" id="option5" placeholder="Safe no4"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td> <input type="radio" id="Answer5" name="gender" <?php if (isset($gender) && $gender==$result['option5']) echo "checked";?> value="Answer5" style="margin-left:-50px"></td>
</tr>

  <tr><th></th><th>
	<br>
	<button type="upload" name="btn-upload" class ="btn btn-primary btn-lg" style="margin-left:-450px;">Upload</button>&nbsp;&nbsp;&nbsp;

	</th></tr>
	
	
	</table>
   </div>
  </form>
      </center>
	  <br/>
	
       <!--HOME SECTION END--> 
	       
   
    <div id="footer">
      copy&copyright | Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2012 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : padmanabha s</a>-->
    </div>
     <!-- FOOTER SECTION END-->
   
      <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>