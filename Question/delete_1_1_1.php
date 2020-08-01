<?php
session_start(); 
include('../db_configure.php');

$id = $_GET['id'];



 error_reporting(E_ALL);

 
//getting id of the data from url
 
//deleting the row from table
$result = mysqli_query($con,"DELETE FROM ques_answer WHERE id='$id'");
 
//redirecting to the display page (index.php in our case)
header("Location:addquestion.php");
?>