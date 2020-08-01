<?php

include('db_configure.php');

if(isset($_POST['videosubmit']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $video_id = (isset($_POST['video_id'])) ? $_POST['video_id'] : "";
 $video_name = (isset($_POST['video_name'])) ? $_POST['video_name'] : "";
 
   $upload_date =(isset($_POST['upload_date']))?  $_POST['upload_date'] : "";
   $link = (isset($_POST['link'])) ? $_POST['link'] : "";
 

$query = "INSERT INTO Video(video_id,video_name,upload_date,link) VALUES ('$video_id','$video_name','$upload_date','$link')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
    alert('New Video Added');
    window.location.href="add_video.php";
    </script>
    
    <?php
}
else{
     ?>
    
    <script>
    alert('Failed to connect');
    return false;
    </script>
    
    <?php
}
}


?>



