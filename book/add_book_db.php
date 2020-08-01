<?php

include('../db_configure.php');

if(isset($_POST['btn-upload']))
{
   
       $id = (isset($_POST['id'])) ? $_POST['id'] : "";
  $book_id = (isset($_POST['book_id'])) ? $_POST['book_id'] : "";
 $book_name = (isset($_POST['book_name'])) ? $_POST['book_name'] : "";
 
   $upload_date =(isset($_POST['upload_date']))?  $_POST['upload_date'] : "";
   
    $timestamp = strtotime($upload_date);
 
    $upload_date = date("Y-m-d", $timestamp);
    
                  		
   $link = (isset($_POST['link'])) ? $_POST['link'] : "";
   $image = (isset($_FILES['image'])) ? $_FILES['image']['name'] : "";
    $image_tmp = (isset($_FILES['image'])) ? $_FILES['image']['tmp_name'] : "";
             if($image != '')
             {
             $file_ext=strtolower(end(explode('.',$image)));
             $image_NameNew = uniqid('',true).".".$file_ext;
             move_uploaded_file($image_tmp,"../images/".$image_NameNew);
             }
              else{
        $image_NameNew = (isset($_POST['image_hidden'])) ? $_POST['image_hidden'] : "";
    }
    
    $BaseCategory = (isset($_POST['BaseCategory'])) ? $_POST['BaseCategory'] : "";
    $sub_category = (isset($_POST['sub_category'])) ? $_POST['sub_category'] : "";
    $currency = (isset($_POST['currency'])) ? $_POST['currency'] : "";
    $author = (isset($_POST['author'])) ? $_POST['author'] : "";
    $price = (isset($_POST['price'])) ? $_POST['price'] : "";
   
 

$query = "INSERT INTO Book(book_id,book_name,upload_date,link,image,BaseCategory,sub_category,currency,author,price) VALUES ('$book_id','$book_name','$upload_date','$link','$image_NameNew','$BaseCategory','$sub_category','$currency','$author','$price')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
    window.location.href="addbook.php";
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



