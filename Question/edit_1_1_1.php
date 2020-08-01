<?php


 error_reporting(E_ALL);

include('../db_configure.php');
 if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysqli_query($con,"SELECT * FROM ques_answer WHERE id=$id");
  $profile=mysqli_fetch_assoc($getselect);
  
	$id=$profile['id'];
  
			
	$question = $profile['question']; 
			$option1 = $profile['option1'];
				$option2 = $profile['option2'];
					$option3 = $profile['option3'];
						$option4 = $profile['option4'];
							$option5 = $profile['option5'];
				$correct_answer=$profile['correct_answer'];
	$category=$profile['category'];
   
  
  }
if(isset($_POST['btn-upload']))
{    
     $id2=$_POST['id']; 
	 

	$question = $_POST['question']; 
	$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
			$option3 = $_POST['option3'];
			$option4 = $_POST['option4'];
				$option5 = $_POST['option5'];

	$correct_answer=$_POST['gender'];
	 
	$category=$_POST['category'];

	
	if(true)
	{
    $sql="UPDATE ques_answer SET question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',option5='$option5',correct_answer='$correct_answer',category='$category' WHERE id='$id2'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
		?>
		<script>
		alert('successfully uploaded');
    window.location.href='addquestion.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='addquestion.php?fail';
        </script>
		<?php
	}
	
	}
	else
	{
	?>
		<script>
		alert('error  uploading file');
        window.location.href='addquestion.php?fail';
        </script>
		<?php
	}
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
	<!--script for onfunction-->
<script>
    function captitalize(obj)
    {
     obj.value=obj.value.charAt(0).toUpperCase()+obj.value.slice(1);
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
	<span class="icon-bar"></span> </button>
 <a class="navbar-brand" href="#"><img class="logo-custom" src="../images/logo1.png" alt="" /></a></div>


 <?php
/*
//session_start();
$ss=$_SESSION['sess_user'];
 error_reporting(E_ALL);

include('../db_configure.php');
$query1=mysqli_query($con,"SELECT role FROM userlogin where id=$ss");

while($row1 = mysqli_fetch_assoc($query1))
{
 $rolen= $row1['role'];

}	
// print $rolen;
//print $ss;
 
//if($rolen!='user')
{
*/
?>
<!--
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../homepage1.html">HOME</a></li>
 <li><a href="../admin_ds.html">DASHBOARD</a></li>


	<li><a href="../mainpage.php">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
 -->

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
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="addquestion.php" class="btn btn-primary btn-lg" > Back  </a></span><i class="fa fa-circle-o-notch"></i>1.1.1 Question and Answer Details <i class="fa fa-circle-o-notch"></i> 
		


		      <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   
		
		
		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div><br/>
    <!--END OF THE ROW--> 
 
<center>
 <form action="edit_1_1_1.php" method="post"  id="importFrm" enctype="multipart/form-data">
<div class="table-sec">
  <table cellspacing=0  width="648" height="260" >


<input type="hidden" name="id" class="hiii" id="t0" value="<?php echo $id; ?>" required>



<tr> 
<td> 
 <label for="" >Exam Category: </label><td> </tr>
<tr>
<td>
   
       <select name ="category" id="category" style="width:650px;Height:30px;">
             <option value="<?php echo $categoty; ?>"></option>
       
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
   
        <input type="text" name="question" id="question" placeholder="What is Safety"  style="width:650px;Height:30px;"  value="<?php echo $question; ?>" class="form-control" ></td> </tr>
    
 
<tr>
<td><label for="" >First Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option1" id="option1" placeholder="to be safe"  style="width:550px;Height:30px;"  value="<?php echo $option1; ?>" class="form-control" ></td>
<td>
    <input type="radio" id="Answer1" name="gender" value="Answer1" <?php if($correct_answer=="Answer1"){ echo "checked";}?> style="margin-left:-50px">
</td>
</tr>
<tr><td><label for="" >Second Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr><?php echo "hiiiiiiiiiiiiiii".$correct_answer; ?>
<tr><td> <input type="text" name="option2" id="option2" placeholder="Safe no1"  style="width:550px;Height:30px;"  value="<?php echo $option2; ?>" class="form-control"></td>
<td><input type="radio" id="Answer2" name="gender" value="Answer2" <?php if($correct_answer=="Answer2"){ echo "checked";}?> style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Third Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option3" id="option3" placeholder="Safe no2"  style="width:550px;Height:30px;"  value="<?php echo $option3; ?>" class="form-control" ></td>
<td><input type="radio" id="Answer3" name="gender"  value="Answer3" <?php if($correct_answer=="Answer3"){ echo "checked";}?> style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fourth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option4" id="option4" placeholder="Safe no3"  style="width:550px;Height:30px;"  value="<?php echo $option4; ?>" class="form-control" ></td>
<td><input type="radio" id="Answer4" name="gender" value="Answer4" <?php if($correct_answer=="Answer4"){ echo "checked";}?> style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fifth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option5" id="option5" placeholder="Safe no4"  style="width:550px;Height:30px;"  value="<?php echo $option5; ?>" class="form-control" ></td>
<td> <input type="radio" id="Answer5" name="gender" value="Answer5" <?php if($correct_answer=="Answer5"){ echo "checked";}?> style="margin-left:-50px"></td>
</tr>

  <tr><th></th><th>
	<br>
	<button type="upload" name="btn-upload" class ="btn btn-primary btn-lg" style="margin-left:-450px;">Upload</button>&nbsp;&nbsp;&nbsp;

	</th></tr>
	
	
  </table></center>

	 
 
  </form>
 		

		
		</div>
			 
			  
			
			 
			
		
		
		
         
		 </div>
		  
	   
	  
			<br/><br/><br/><br/><br/><br/>
	      

          </div>
			
    
          
 	  	
						 
</div>  
	
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
