<?php

include('../db_configure.php');
if(isset($_POST['add']))
{
    $add_value = $_POST['bvalue'];
     $main_category = $_POST['main_category'];
    if($add_value != "")
    {
    mysqli_query($con,"INSERT INTO edit_base_category(main_category,bvalue)VALUES('$main_category','$add_value')");
    }
}

if(isset($_POST['remove']))
{
    $id = $_POST['cate'];
    
    if($id!='')
    {
       
    
    mysqli_query($con,"DELETE FROM edit_base_category WHERE id='$id'");
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
 

	<li><a href="../home.php">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
 
<?php
//}else
//{
?>
<!--
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../homepage1.html">HOME</a></li>
	<li><a href="../home.php">LOGOUT</a></li>
	-->
    <!--    <li><a  href="addbook.php"> Back  </a>

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
//{
?>    
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="insert_1_1_1.php" class="btn btn-primary btn-lg" > Back  </a></span>

</h2>

<?php
//}
?>

<h2>

<i class="fa fa-circle-o-notch"></i> BASE CATEGORY
 <i class="fa fa-circle-o-notch"></i> 
		


		


		      <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   
		
		
		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div>
		
		
	
    <!--END OF THE ROW--> 
 
   
<center><br/>
<form action="base_category.php" method="post" enctype="multipart/form-data">
<div class="table-sec">
 <table border="2"  width="400" height="260" >

<input type="hidden" name="file-hidden" class="hiii" id="t0" value="NONE" required>
<tr>
    <th>

 <select name ="main_category" style="width:250px">
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

		      
		       
		            <th width="116" ><center><input type="text" name="bvalue" size="24" placeholder="Add New Base Category"></center></th>
		       
		      
		           
		            <th width="116"><center><button type="submit" name="add" class="signupbtn">Add</center></button>
</th>
		        </tr>
		        <tr>
		            <th><center><select name="cate">
		                	<option value="">Choose</option>
				<?php
				
				    $sql = mysqli_query($con,"SELECT * FROM edit_base_category where main_category='Book'");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option value="<?php echo $result['id']; ?> "><?php echo $result['bvalue']; ?></option>
				        <?php
				    }
				?>
				</center>
				</select> 
		            </th>
		            <th><center><button name="remove" type="submit" class="cancelbtn">Remove</button></center></th>
		        </tr>
		    </thead>
		    
		</table>
			</form>
			<br><br>
		
  </div>
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
         
