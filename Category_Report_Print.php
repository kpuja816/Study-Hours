<?php 

include('db_configure.php');
session_start();

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

 <?php  session_start(); ?>	
</head>
<body >
<center>
<h3>Health & Safety Report</h3>

  <hr style="width:500px">
</center>  

<h3 style="margin-left:200px;"> Category : <?php echo $_SESSION['category'];?> </h3>
<h3 style="margin-left:200px">   Sub Category : <?php echo $_SESSION['subType'];?></h3>
<h3 style="margin-left:200px">  Total No. Of Candidate : <?php echo $_SESSION['k'];?></h3>
<h3 style="margin-right:22%;float:right">   Date : <?php echo date("Y-m-d");?></h3>
<hr style="margin-left:200px;width:500px">
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
 $k=0;
 $subType=$_SESSION['subType'];
 
   if (($h = fopen("assets/Log/ClientLog.csv", "r")) !== FALSE) 
    {
       
         while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
         {
            $i=$j=0;     
           while($i<count($data))
           {
        	
        	    if($subType=='All' && $data[2]==$_SESSION['category'])
        	    {
        	        $k++;
        	        echo '<tr>' . '<td>'.'<center>';
        	        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++] . '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	    
        	    }
        	    else if($data[3]==$subType && $data[2]==$_SESSION['category'])
        	    {
        	        $k++;
        	 	    echo '<tr>' . '<td>'.'<center>';
        	         echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++] . '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
			        echo $data[$i++]. '<br/>' . '<td>'.'<center>';
                    echo $data[$i++]. '<br/>' . '<td>'.'<center>';
		            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	    }
        	    
        	    $i++;
           }
           ?>
            <?php
          
         }
        fclose($h);
    
    
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
	