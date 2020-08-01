
<?php 

include('header.php');
//session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM Video WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id_update = $result['id'];
     
 
  $video_id =$result['video_id'];
 $video_name = $result['video_name'] ;
  $upload_date = $result['upload_date'];
   $link =$result['link'];
  


}
}}
//-------------------------------

include('add_video_db.php');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
$link .= "://"; 
  
$link .= $_SERVER['HTTP_HOST']; 
  
$link .= $_SERVER['REQUEST_URI']; 
      
$_SESSION['back'] = $link;

?>


<html>

<style>


.container {
  position: relative;
  width: 100%;
height:65%;
//background-image:url(images/images.jpeg);


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  top: 50px;  left: 0px;
  right:0px;
}

.div1
		{
		
			height:70px;
			width:100%;
			background-color:#;
			
		}
		
		  .second-div {
       margin-top:0px !important;
         width:100%;
         font-family:Arial !important;
     }
     
    .div-left img {
         width : 180px !important;
         height : 180px !important;
        text-align : center !important;
      
        margin-right : 50% !important;
        
                padding : 0px !important;
       } 
         
      .div-right p  {
            width : 200px !important;
        text-align : justify !important;

       height : 300px !important;
        padding : 5px !important;

       }
        .div-right h1 {
         font-family:Arial;
        font-size:18px !important;
        color :white !important;
        text-align : center !important;
        padding : 10px !important;
        font-weight : bold;
        }
body {
  font-family: Arial;
  color: white;
}

.split {
    margin-top:15%;
  height: 40%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 0px;
}

.left {
  left: 0;
  background-color: white;
}

.right {
  right: 0;
  background-color: white;
}

.centered {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color:black;
  margin-bottom:10px;
}



</style>
</head>
 

             
 <form name=""  action="" method="POST" enctype="multipart/form-data">
       
<div class="div1">
 <img src="images/images.jpeg" margin-top=-"10px"  width="100%" height="200px">

</div>
</div>
<div class="container">
 
  <div class="content">
   <br>
	<center>

	
	</center>
  </div>
</div>



<div class=".second-div" >
  <div class="centered" >
    
       
      
       
      <label class="control-label"  for="video_id">Video_ID</label>
      &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text" id="video_id" name="video_id" placeholder="" class="input-xlarge"><br><br>
       
      <label class="control-label" for="video_name">Video_Name </label>
        &nbsp  &nbsp &nbsp &nbsp &nbsp 
        <input type="text" id="video_name" name="video_name" placeholder="" class="input-xlarge"><br><br>
       
      <label class="control-label" for="upload_date">Upload_Date</label>
      &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
        <input type="date" id="upload_date" name="upload_date" placeholder="" class="input-xlarge"><br><br>
      
      <label class="control-label"  for="link">Link</label>
      &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text" id="link" name="link" placeholder="" class="input-xlarge"><br><br>
       
     
     
        <button class="btn btn-success"  name="videosubmit" id="videosubmit" style="width:320px" >Add Video</button>
       
               

  </div>
</div>
  </form> 
     
</html>


