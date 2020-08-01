<?php 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Question.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('id','question','option1','option2','option3','option4','option5','correct_answer','category'));

 error_reporting(E_ALL);

include('../db_configure.php');
//$con = new MySQLi("mysql.hostinger.in","u959497049_yened","yened321@","u959497049_yened");



$rows = mysqli_query($con,'SELECT id, question,option1,option2,option3,option4,option5,correct_answer,category FROM ques_answer');

// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);
?>
