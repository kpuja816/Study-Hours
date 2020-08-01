<?php
//DB details
 error_reporting(E_ALL);

include('../db_configure.php');

if ($con->connect_error) {
    die("Unable to connect database: " . $con->connect_error);
}


if(isset($_POST['importSubmit']))
{
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT id FROM book WHERE id = '".$line[0]."'";
                $prevResult = $con->query($prevQuery);
                if($prevResult->num_rows > 0)
				{                       
          $timestamp = strtotime($line[3]);
		  $upload_date = date("Y-m-d", $timestamp);
                    
          //update member data
          $con->query("UPDATE Book SET 
          book_id='".$line[1]."',
		  book_name = '".$line[2]."',
		  upload_date = '".$upload_date."',
		  link = '".$line[4]."',
		  image = '".$line[5]."',
		  BaseCategory = '".$line[6]."',
		  sub_category = '".$line[7]."',
		  currency = '".$line[8]."',
		  author = '".$line[9]."',
		  price = '".$line[10]."'
          where id= '".$line[0]."'");
          }
		  else
		  {
		  //insert member data into database
          $con->query("INSERT INTO Book(id,book_id,book_name,upload_date,link,image,BaseCategory,sub_category,currency,author,price)VALUES('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."','".$line[9]."','".$line[10]."')");  
    }
          }
            
       //close opened csv file
       mysqli_query($con->query);
  ?>
        <script>
        alert('successfully uploaded');
        window.location.href='addbook.php?success';
        </script>
  <?php
  }else
 {
  ?>
  <script>
        alert('error while uploading file');
        window.location.href='addbook.php?fail';
        </script>
  <?php
 }
    }
}

//redirect to the listing page
header("Location: addbook.php".$qstring);