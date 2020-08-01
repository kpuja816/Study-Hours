<?php 

include('db_configure.php');
session_start();
$cid=$_SESSION['cid'];
$time=$_SESSION['time'];
$cat=$_SESSION['cat'];
$subCat=$_SESSION['subCat'];
$ans=$_SESSION['ans'];
$nans=$_SESSION['nans'];
$total=$_SESSION['total'];
$correct=$_SESSION['correct'];
$wrong=$_SESSION['wrong'];
$score=$_SESSION['score'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   <title>Kramah Software India Private Limited</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
       <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  	<!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	<!--script for onfunction-->


	<style>
	

	.tooltip {
    position: relative;
    display: inline-block;
    
}
table{
text align:center;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
    </style>

 <?php // session_start(); ?>	
</head>
<body >
<center>
<h3>Result Evaluation Report</h3>

  <hr style="width:500px">
</center>  

<table cellspacing=0 border=3 width="1000" height="260" text-align="center" style="margin-left:200px;">
<tr><td><center>   Date : </center></td><td><center>    <?php echo date("Y-m-d");?> </center></td></tr>
<tr><td><center> Exam Category : </center></td><td><center>    <?php echo $_SESSION['Cat']; ?> </center></td></tr>
<tr><td><center>  Exam Sub Category : </center></td><td><center>    <?php echo $_SESSION['subCategory'];?> </center></td></tr>
<tr><td><center>  Total No. Of Candidate : </center></td><td><center>  <?php echo count($time);?></center></td></tr>
<tr><td><center>  Result Type : </center></td><td><center><?php echo $_SESSION['resType']; ?> </center></td></tr>

</table>
<hr style="margin-left:200px;width:900px">
<br>
   
<table cellspacing=0 border=3 width="1000" height="260" text-align="center" style="margin-left:200px;">

<th><center>Client ID</center></th>
<th><center>Time</center></th>
<th><center>Category</center></th>
<th><center>Sub Category</center></th>
<th><center>Total Marks</center></th>
<th><center>Answered</center></th>
<th><center>Not Answered</center></th>
<th><center>Correct</center></th>
<th><center>Wrong</center></th>
<th><center>Score</center></th>


<?php

           $i=$j=0;     
           while($i<count($time))
           {
        	    echo '<tr>' . '<td>'.'<center>';
        	    echo $cid[$i]. '<br/>' . '<td>'.'<center>';
                echo $time[$i]. '<br/>' . '<td>'.'<center>';
		        echo $cat[$i]. '<br/>' . '<td>'.'<center>';
		        echo $subCat[$i] . '<br/>' . '<td>'.'<center>';
		         echo $total[$i] . '<br/>' . '<td>'.'<center>';
		        echo $ans[$i]. '<br/>' . '<td>'.'<center>';
			    echo $nans[$i]. '<br/>' . '<td>'.'<center>';
			    echo $correct[$i]. '<br/>' . '<td>'.'<center>';
			    echo $wrong[$i]. '<br/>' . '<td>'.'<center>';
			    echo $score[$i]."%". '<br/>' . '<td>'.'<center>';
        	    $i++;
           }
           
?>

 </table>
 
 <br>
 <button type="submit" style="margin-bottom:8px;margin-top:5px;margin-left:200px;font-size:20px;width:150px;background-color: #428bca;height:50px;border-color: #357ebd;" name="btn_print" class ="btn btn-primary btn-lg" onclick="printPage();">Print</button>
 </center>
<br/>

 <script language="javascript">
    function printPage() {
        window.print();
    }
</script>
</body>
</html>
	