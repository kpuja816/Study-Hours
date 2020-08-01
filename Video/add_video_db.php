<?php

include('../db_configure.php');

if(isset($_POST['btn-upload']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $video_id = (isset($_POST['video_id'])) ? $_POST['video_id'] : "";
 $video_name = (isset($_POST['video_name'])) ? $_POST['video_name'] : "";
  $BaseCategory = (isset($_POST['BaseCategory'])) ? $_POST['BaseCategory'] : "";
   $sub_category = (isset($_POST['sub_category'])) ? $_POST['sub_category'] : "";
   $upload_date =(isset($_POST['upload_date']))?  $_POST['upload_date'] : "";
    $timestamp = strtotime($upload_date);
 
    $upload_date = date("Y-m-d", $timestamp);
    echo $upload_date; 
                  		
   $link = (isset($_POST['link'])) ? $_POST['link'] : "";
 
 $image = (isset($_FILES['image'])) ? $_FILES['image']['name'] : "";
    
    $image_tmp = (isset($_FILES['image'])) ? $_FILES['image']['tmp_name'] : "";

             if($image != '')
             {
             $file_ext=strtolower(end(explode('.',$image)));
             $fileNameNew = uniqid('',true).".".$file_ext;
             move_uploaded_file($image_tmp,"../images/".$fileNameNew);
             }
$query = "INSERT INTO Video(video_id,video_name,upload_date,link,image,BaseCategory,sub_category) VALUES ('$video_id','$video_name','$upload_date','$link','$fileNameNew','$BaseCategory','$sub_category')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
    window.location.href="addvideo.php";
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



