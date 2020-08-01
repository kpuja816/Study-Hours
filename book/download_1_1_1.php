<?php 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Book.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('id','book_id','book_name','upload_date','link','image','BaseCategory','sub_category','currency','author','price'));

 error_reporting(E_ALL);

include('../db_configure.php');


$rows = mysqli_query($con,'SELECT id, book_id,book_name,upload_date,link,image,BaseCategory,sub_category,currency,author,price FROM Book');

// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);
?>
