<?php 
session_start(); 
include('../db_configure.php');

if(isset($_POST['delete']))
{
 
 $cnt=array();
 $cnt=$_POST['selection'];
 $cont=0;
 
 foreach($cnt as $delid)
  {
     
    $cont++;
     
     $query= mysqli_query($con,"DELETE FROM ques_answer WHERE id='$delid'");
         
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

<script language="javascript" type="text/javascript">


function do_this()
{

        var checkboxes = document.getElementsByName('selection[]');
       
          var checkbox = document.getElementById('toggle');

        if(checkbox.value == 'select'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            checkbox.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            checkbox.value = 'select';
        }
           
       
           
    }  

</script>








	<style>
	








	

	

	.tooltip {
    position: relative;
    display: inline-block;
    
}
table{
text align:center;
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
session_start();
$ss=$_SESSION['sess_user'];
 error_reporting(E_ALL);
$rolen='';
include('../db_configure.php');
$query1=mysqli_query($con,"SELECT role FROM Admin where id=$ss");

while($row1 = mysqli_fetch_assoc($query1))
{
 $rolen= $row1['role'];

}	
// print $rolen;
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
 <li ><a href="../homepage1.php">HOME</a></li>
	<li><a href="../mainpage.html">LOGOUT</a></li>
	
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

<?php
//if($rolen!='user')
{
?>
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="http://localhost/hse/admin_ds.html" class="btn btn-primary btn-lg" > Back  </a></span>

</h2>

<?php
}
?>

<h2> <i class="fa fa-circle-o-notch"></i> 
1.1.1 Details of Question And Answer <i class="fa fa-circle-o-notch"></i>


		


		      <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
			     <!-- REPLACE YOUR SEARCH.PHP PAGE LINK>-->
                     <span class="sendright">  <form class="search" action="search_1_1_1.php" method="GET">
							<input type="text" name="query" placeholder="Search..."   required>
							<button  class ="btn btn-danger btn-lg">GO</button>
								</form>
                      </span>
		
		
		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div>
    <!--END OF THE ROW--> 
 

<form action="addquestion.php" method="post" class="form"  name="frm">


<center>
<table cellspacing=0 border=3 width="1200" height="260" text-align="center">

<th> <input type="checkbox" id="toggle" value="select" onClick="do_this()">Select All</th>

<th><center>CATEGORY</center></th>
<th><center>QUESTION</center></th>
<th><center>OPTION 1</center></th>
<th><center>OPTION 2 </center></th>
<th><center>OPTION 3</center></th>
<th><center>OPTION 4</center></th>
<th><center>OPTION 5 </center></th>
<th><center>ANSWER</center></th>


<th> <center>Edit</center></th>
<th> <center>Delete</center></th>

<?php
include('../db_configure.php');
//session_start();

$query=mysqli_query($con,"SELECT * from ques_answer");


$k=0;
   
	while($k <mysqli_num_rows($query) )
		{ 
		    $result=mysqli_fetch_assoc($query);
		$id=$result['id'];
		
           $question = $result['question'];
		$option1 = $result['option1'];
			$option2 = $result['option2'];
		  $option3 = $result['option3'];
			$option4 = $result['option4'];
			$option5 = $result['option5'];
				$correct_answer = $result['correct_answer'];
					$category = $result['category']; 
			echo '<tr>' . '<td>'.'<center>';
        echo "<input type=\"checkbox\" name=\"selection[]\" value =".$id.">". '<br/>' . '<td>'.'<center>';
			
		
            	echo $category. '<br/>' . '<td>'.'<center>';
		        echo $question. '<br/>' . '<td>'.'<center>';
		
			echo $option1. '<br/>' . '<td>'.'<center>';
			echo $option2. '<br/>' . '<td>'.'<center>';
	          	echo $option3. '<br/>' . '<td>'.'<center>';
		        echo $option4. '<br/>' . '<td>'.'<center>';
			echo $option5. '<br/>' . '<td>'.'<center>'; 
			echo $correct_answer. '<br/>' . '<td>'.'<center>'; 
			
			echo"<a href=\"edit_1_1_1.php?id=$result[id]\"><img src=\"../images/edit.png\" height=\"25\"></a>
			<td><a href=\"delete_1_1_1.php?id=$result[id]\"><img src=\"../images/delete.png\" height=\"25\" onClick=\"return confirm('Are you sure you want to delete?')\"></a></td>";
			
            $k++;           
		}
	
?>
 </table>  </center>


<input style="margin-left:30px;"  input type="submit"   name="delete" value="DeleteAll"   class ="btn btn-primary btn-lg"><br/><br/><br/>

</form>


<!--REPLACE YOUR INSERT.PHP HERE--> 
<button style="margin-left:30px;"  type="submit" onclick = "location.href = 'insert_1_1_1.php'" class ="btn btn-primary btn-lg" >Create Record </button><br/>

<!--replace your  download link here--> 
        <form action="download_1_1_1.php" method="post" class="form">
	  
	 <br/><input style="margin-left:30px;" input  type="submit" name="exp" value="Download"  class ="btn btn-primary btn-lg"> 
  <div class="tooltip">
<img src="ii.png" width="13" height="13" alt="symbol"> 
 <span class="tooltiptext">Download The Details.</span>
</div>
</form>

         <!--replace your  homeupload here--> 
	<form action="upload_1_1_1.php" method="post" enctype="multipart/form-data" id="importFrm" class="form"> 

 
	<input style="margin-left:30px;"  type="file" name="file"  >
    			
           	  
		     
<input style="margin-left:30px;" type="submit"   name ="importSubmit" value="Upload"   class ="btn btn-primary btn-lg">	<a class="hideDisplay">
 <div class="tooltip">
<img src="ii.png" width="13" height="13" alt="symbol">
<span class="tooltiptext">Upload The Documents.</span>
</div>
<br/><br/>
			   
</form>
		<br/><br/>
      
		
             
      
	
       <!--HOME SECTION END--> 
	       
   
    <div id="footer">
      copy&copyright | Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2012 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : padmanabha s</a>-->
    </div>
    
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
	