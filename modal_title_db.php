<?php

include('db_configure.php');

if(isset($_POST['submit']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $sub_category = (isset($_POST['sub_category'])) ? $_POST['sub_category'] : "";
 $base_category = (isset($_POST['base_category'])) ? $_POST['base_category'] : "";
 
   $currency =(isset($_POST['currency']))?  $_POST['currency'] : "";
   $price = (isset($_POST['price'])) ? $_POST['price'] : "";
 $modal_time =(isset($_POST['modal_time'])) ? $_POST['modal_time'] : "";
   $decription =(isset($_POST['decription'])) ? $_POST['decription'] : "";
     $feature_image = (isset($_FILES['feature_image'])) ? $_FILES['feature_image']['name'] : "";
    
    $image_tmp = (isset($_FILES['feature_image'])) ? $_FILES['feature_image']['tmp_name'] : "";

             if($feature_image != '')
             {
             $file_ext=strtolower(end(explode('.',$feature_image)));
             $fileNameNew = uniqid('',true).".".$file_ext;
             move_uploaded_file($image_tmp,"../images/".$fileNameNew);
             }
   


$query = "INSERT INTO modal_title(sub_category,base_category,feature_image,currency,price,modal_time,decription) VALUES ('$sub_category','$base_category','$fileNameNew','$currency','$price','$modal_time','$decription')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
    alert('New model added');
    window.location.href="modal_title.php";
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
