<?php
//DB details
 error_reporting(E_ALL);

include('../db_configure.php');

if ($con->connect_error) {
    die("Unable to connect database: " . $con->connect_error);
}


if(isset($_POST['importSubmit'])){
    
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
                $prevQuery = "SELECT id FROM ques_answer WHERE id = '".$line[0]."'";
                $prevResult = $con->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $con->query("UPDATE ques_answer SET 
    question='".$line[1]."',
		option1 = '".$line[2]."',
		option2 = '".$line[3]."',
			option3 = '".$line[4]."',
		option4 = '".$line[5]."',
			option5 = '".$line[6]."',
	correct_answer = '".$line[7]."',
		category = '".$line[8]."'

		where id= '".$line[0]."'");
                }else{
                    //insert member data into database
                    $con->query("INSERT INTO ques_answer(id,question,option1,option2,option3,option4,option5,correct_answer,category)VALUES('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."')");
            
    }
            }
            
            //close opened csv file
           mysqli_query($con->query);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='addquestion.php?success';
        </script>
  <?php
        }else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='addquestion.php?fail';
        </script>
  <?php
 }
    }
}

//redirect to the listing page
//63+header("Location: addquestion.php".$qstring);
?>