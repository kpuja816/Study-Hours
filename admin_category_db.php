<?php

include('db_configure.php');
if(isset($_POST['submit']))
{
    $sub_category = $_POST['sub_category'];
    $main_category = $_POST['main_category'];
    
    if($sub_category != "")
    {
       
    mysqli_query($con,"INSERT INTO category(main_category,add_value)VALUES('$main_category','$sub_category')");
    }
     $base_category = $_POST['base_category'];
    
    if($base_category != "")
    {
    mysqli_query($con,"INSERT INTO edit_base_category(main_category,bvalue)VALUES('$main_category','$base_category')");
    }
     $currency = $_POST['currency'];
    
    if($currency != "")
    {
    mysqli_query($con,"INSERT INTO edit_currency(value)VALUES('$currency')");
    }

$modal_time = $_POST['modal_time'];
    
    if($modal_time != "")
    {
        
    mysqli_query($con,"INSERT INTO edit_time(value)VALUES('$modal_time')");
    }

    
 if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
   
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