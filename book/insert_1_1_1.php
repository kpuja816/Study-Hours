<?php 

//session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM Book WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id_update = $result['id'];
     
 
  $book_id =$result['book_id'];
 $book_name = $result['book_name'] ;
  $upload_date = $result['upload_date'];
   $link =$result['link'];
   $image =$result['image'];
   $BaseCategory =$result['BaseCategory'];
   $sub_category =$result['sub_category'];
  
   
   $currency =$result['currency'];
   $author =$result['author'];
   $price =$result['price'];
  $add_value =$result['add_value'];
 $value =$result['value'];

}
}}
//-------------------------------

include('add_book_db.php');

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
{
?>    
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="addbook.php" class="btn btn-primary btn-lg" > Back  </a></span>
        
        

</h2>

<?php
}
?>

<h2>

<i class="fa fa-circle-o-notch"></i> 1.1.1 Book Details 
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
  <th width="116">Book ID</th><th>
<input type="text" name="book_id" class="hiii" id="t0"    >
</th>   
  </tr> <br>
  
<tr>
 <th width="116">Book Name</th><th>
 <input  type="text" name="book_name"class="hiii" id="t0"  onkeyup="captitalize(this)"   >
   </th>
  </tr>
  
  <tr><th width="116">Upload Date</th><th>
<input type="Date" name="upload_date" class="hiii" id="t0"   >
</th>
</tr>

  	<tr><th>
	Link of the Book:</br>

	<th width="366">
	<input type="text" name="link" style="width:260px;"/>
	</th>
	</tr>
	<tr><th width="116">Upload Image</th><th>
<input type="file" name="image" class="hiii" id="t0"   >
</th>
</tr>
   
  
<tr>
 <th width="116">Base Category</th><th>
<select name="BaseCategory">
		                	<option value="">Choose</option>
				<?php
				
				    $sql = mysqli_query($con,"SELECT bvalue FROM edit_base_category where main_category='Book'");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option value="<?php echo $result['bvalue']; ?>"><?php echo $result['bvalue']; ?></option>
				        <?php
				    }
				?>
				
				</select> <a href="base_category.php" ><img src="../images/edit.png" width="25" height="25"/ alt="Edit"></a>
   </th>
  </tr>
    
<tr>
 <th width="116">Sub Category</th><th>
<select name="sub_category">
		                	<option value="">Choose</option>
				<?php
				
				    $sql = mysqli_query($con,"SELECT add_value FROM category where main_category='Book'");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option ><?php echo $result['add_value']; ?></option>
				        <?php
				    }?>
				   
				
				
				</select><a href="category.php" ><img src="../images/edit.png" width="25" height="25"/ alt="Edit"></a> 
   </th>  
  </tr>
    
<tr>
 <th width="116">Currency</th>
 <th>
<select name="currency">
		                	<option value="">Choose</option>
				<?php
				
				    $sql = mysqli_query($con,"SELECT * FROM edit_currency");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option ><?php echo $result['value']; ?></option>
				        <?php
				    }?>
				   
				
				
				</select><a href="currency.php" ><img src="../images/edit.png" width="25" height="25"/ alt="Edit"></a> 
   </th>  
  </tr>
    
<tr>
 <th width="116">Author Name</th><th>
 <input  type="text" name="author"class="hiii" id="t0"  onkeyup="captitalize(this)"   >
   </th>
  </tr>
  <tr>
 <th width="116">Price</th><th>
 <input  type="text" name="price"class="hiii" id="t0"  onkeyup="captitalize(this)"   >
   </th>
  </tr>
  

  <tr><th></th><th>
	
	<button type="upload" name="btn-upload" class ="btn btn-primary btn-lg">Upload</button>&nbsp;&nbsp;&nbsp;

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