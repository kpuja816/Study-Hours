<?php

include('../db_configure.php');

if(isset($_POST['btn-upload']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $audio_id = (isset($_POST['audio_id'])) ? $_POST['audio_id'] : "";
 $audio_name = (isset($_POST['audio_name'])) ? $_POST['audio_name'] : "";
 $BaseCategory = (isset($_POST['BaseCategory'])) ? $_POST['BaseCategory'] : "";
   $sub_category = (isset($_POST['sub_category'])) ? $_POST['sub_category'] : "";
   $upload_date =(isset($_POST['upload_date']))?  $_POST['upload_date'] : "";
    $timestamp = strtotime($upload_date);
 
    $upload_date = date("Y-m-d", $timestamp);
                		
   $link = (isset($_POST['link'])) ? $_POST['link'] : "";
   $image = (isset($_FILES['image'])) ? $_FILES['image']['name'] : "";
    
    $image_tmp = (isset($_FILES['image'])) ? $_FILES['image']['tmp_name'] : "";

             if($image != '')
             {
             $file_ext=strtolower(end(explode('.',$image)));
             $fileNameNew = uniqid('',true).".".$file_ext;
             move_uploaded_file($image_tmp,"../images/".$fileNameNew);
             }
 

$query = "INSERT INTO Audio(audio_id,audio_name,upload_date,link,image,BaseCategory,sub_category) VALUES ('$audio_id','$audio_name','$upload_date','$link','$fileNameNew','$BaseCategory','$sub_category')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
    window.location.href="addaudio.php";
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



