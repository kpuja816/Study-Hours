<?php


 error_reporting(E_ALL);

include('../db_configure.php');
 if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysqli_query($con,"SELECT * FROM Video WHERE id=$id");
  $profile=mysqli_fetch_assoc($getselect);
  
	$id=$profile['id'];
  
	$BaseCategory=$profile['BaseCategory'];
     $sub_category=$profile['sub_category'];
 		
	$video_id = $profile['video_id']; 
			$video_name = $profile['video_name'];
			$upload_date=$profile['upload_date'];
	$link=$profile['link'];
   	$image=$profile['image'];
  
  }
if(isset($_POST['submit']))
{    
     $id2=$_POST['id']; 
	 $BaseCategory=$_POST['BaseCategory'];
     $sub_category=$_POST['sub_category'];
 

	$video_id = $_POST['video_id']; 
	$video_name = $_POST['video_name'];
	$upload_date=$_POST['upload_date'];
    $timestamp = strtotime($upload_date);
 
    $upload_date = date("Y-m-d", $timestamp);
   
	$link=$_POST['link'];
$image = (isset($_FILES['image'])) ? $_FILES['image']['name'] : "";
    
    $image_tmp = (isset($_FILES['image'])) ? $_FILES['image']['tmp_name'] : "";

             if($image != '')
             {
             $file_ext=strtolower(end(explode('.',$image)));
             $fileNameNew = uniqid('',true).".".$file_ext;
             move_uploaded_file($image_tmp,"../images/".$fileNameNew);
             }
             else
             {
                 $fileNameNew = $_POST['hidden-image'];
                 
             }
	 
	if(true)
	{
    $sql="UPDATE Video SET video_id='$video_id',video_name='$video_name',upload_date='$upload_date',link='$link',image='$fileNameNew',BaseCategory='$BaseCategory',sub_category='$sub_category' WHERE id='$id2'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
		?>
		<script>
		alert('successfully uploaded');
    window.location.href='addvideo.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='addvideo.php?fail';
        </script>
		<?php
	}
	
	}
	else
	{
	?>
		<script>
		alert('error  uploading file');
        window.location.href='addvideo.php?fail';
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
$query1=mysqli_query($con,"SELECT role FROM Admin where id=$ss");

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
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../homepage1.html">HOME</a></li>
 <li><a href="../admin_ds.html">DASHBOARD</a></li>


	<li><a href="../mainpage.php">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
 
<?php
//}
//else
//{
?>

<!--<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../naacuser2/userhome2.0.php">HOME</a></li>
	<li><a href="../login/logout.php">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>-->
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
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="addvideo.php" class="btn btn-primary btn-lg" > Back  </a></span><i class="fa fa-circle-o-notch"></i>1.1.1 Video Details <i class="fa fa-circle-o-notch"></i> 
		


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



<tr><th width="116">VIDEO ID</th><th>
<input type="text" name="video_id" class="hiii" id="t0"  value="<?php echo $video_id; ?>"  >

</th>
</tr>

<tr>
 <th width="116">VIDEO NAME</th><th>
 <input  type="name" name="video_name"class="hiii" id="t0"  onkeyup="captitalize(this)"  value="<?php echo $video_name; ?>"  >
   </th>
  </tr>
   <tr>
  <th width="116">BASE CATEGORY</th><th>
<select name="BaseCategory">
		                <option value="<?php echo $BaseCategory; ?>"><?php echo $BaseCategory; ?></option>

				<?php
				
				    $sql = mysqli_query($con,"SELECT bvalue FROM edit_base_category where main_category='Video'");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option value="<?php echo $result['bvalue']; ?>"><?php echo $result['bvalue']; ?></option>
				        <?php
				    }
				?>
				
				</select>
</th>   
  </tr> 
  <tr>
  <th width="116">SUB CATEGORY</th><th>
<select name="sub_category">
		                	<option value="<?php echo $sub_category; ?>"><?php echo $sub_category; ?></option>

				<?php
				
				    $sql = mysqli_query($con,"SELECT add_value FROM category where main_category='Video'");
				    
				    while($result = mysqli_fetch_assoc($sql))
				    {
				        ?>
				        <option value="<?php echo $result['add_value']; ?>"><?php echo $result['add_value']; ?></option>
				        <?php
				    }
				?>
				
				</select>
</th>   
  </tr> 
 
  <tr>
  <th width="116">UPLOAD DATE</th><th>
<input type="date" name="upload_date" class="hiii" id="t0"  value="<?php echo $upload_date; ?>"  >
</th>   
  </tr> 
   
<tr>
  <th width="116">LINK OF THE VIDEO</th><th>
<input type="name" name="link" class="hiii" id="t0" value="<?php echo $link; ?>">
</th>   
  </tr>
 <tr>
  <th width="116">UPLOAD IMAGE</th><th>
<input type="file" name="image" class="hiii" id="t0"  value="<?php echo $image; ?>"  >
<input type="hidden" name="hidden-image" class="hiii" id="t0"  value="<?php echo $image; ?>"  >

</th>   
  </tr> 
   



 
  <tr> <th>	</th>	<th>
                     &nbsp;<input type="submit"  name="submit" class="btn btn-primary btn-lg" ></a></th>			  
 
 
  </tr>
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
