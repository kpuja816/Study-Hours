<?php

include('db_configure.php');

if(isset($_POST['save']))
{
   
      
   
   
   $category = (isset($_POST['category'])) ? $_POST['category'] : "";   
   $question = (isset($_POST['question'])) ? $_POST['question'] : "";
   $option1 = (isset($_POST['option1'])) ? $_POST['option1'] : "";
   $option2 =(isset($_POST['option2']))?  $_POST['option2'] : "";
   $option3 = (isset($_POST['option3'])) ? $_POST['option3'] : "";
   $option4 =(isset($_POST['option4'])) ? $_POST['option4'] : "";
   $option5 =(isset($_POST['option5'])) ? $_POST['option5'] : "";
    $gender =(isset($_POST['gender'])) ? $_POST['gender'] : "";
 

$query = "INSERT INTO ques_answer(question,option1,option2,option3,option4,option5,correct_answer,category) VALUES ('$question','$option1','$option2','$option3','$option4','$option5','$gender','$category')";

if($result = mysqli_query($con,$query))
{
    ?>
    
    <script>
    alert('successfully added');
    window.location.href="create_new_ques.php";
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
