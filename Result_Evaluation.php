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

<script language="javascript" type="text/javascript">


function do_this()
{

        var checkboxes = document.getElementsByName('selection[]');
       
          var checkbox = document.getElementById('toggle');

        if(checkbox.value == 'select'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            checkbox.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            checkbox.value = 'select';
        }
           
       
           
    }  

</script>
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

	
</head>
<body >
   
    
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span> </button>
 <a class="navbar-brand" href="#"><img class="logo-custom" src="../images/logo1.png" alt="" /></a></div>


 <?php
/*
session_start();
$ss=$_SESSION['sess_user'];
 error_reporting(E_ALL);
$rolen='';
include('../db_configure.php');
$query1=mysqli_query($con,"SELECT role FROM Admin where id=$ss");

while($row1 = mysqli_fetch_assoc($query1))
{
 $rolen= $row1['role'];

}	
// print $rolen;
//print $ss;
 
if($rolen!='user')
{
*/
?>
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../hse/homepage1.html">HOME</a></li>
 <li><a href="../hse/admin_ds.html">DASHBOARD</a></li>
 
 
	<li><a href="../hse/mainpage.html">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
 
<?php
/*
}else
{
*/
?>
<!--
<div class="navbar-collapse collapse move-me">
 <ul class="nav navbar-nav navbar-right">
 <li ><a href="../hse/homepage1.php">HOME</a></li>
	<li><a href="../hse/mainpage.html">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
-->
<?php
//}
?>
 </div>
 </div>

      <!--NAVBAR SECTION END--><br/><br/>
        <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">

<?php
//if($rolen!='user')
{
?>
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="../hse/admin_ds.html" class="btn btn-primary btn-lg" > Back  </a></span>

</h2>

<?php
}
?>

<h2> <i class="fa fa-circle-o-notch"></i> Exam Report <i class="fa fa-circle-o-notch"></i>


		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div>
    <!--END OF THE ROW--> 
 
 
<form action="Result_Evaluation.php" method="post" class="form"  name="frm">

<!--
 <select class="btn-lg" name="id" style="margin-left:180px;margin-top:60px;height:50px;width:200px">
  <?php 
 // $k=0;
 // $sql = mysqli_query($con,"select * from user_details");
//  while($result=mysqli_fetch_assoc($sql)){ 
    ?> 
  <option value="<?php //echo $result['id']; ?>"><?php //echo $result['id']; ?></option>
 <?php //} ?>
</select> 
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--
<input list="brow" name="id" class="btn-lg" style="margin-left:180px;margin-top:60px;height:50px;width:200px">
<datalist id="brow">
   <?php 
  //$k=0;
 // $sql = mysqli_query($con,"select * from user_details");
//while($result=mysqli_fetch_assoc($sql)){ 
    ?> 
  <option value="<?php //echo $result['id']; ?>"><?php //echo $result['id']; ?></option>
 <?php //} ?>
</datalist>  
-->

<select class="btn-lg" name="Category" style="margin-left:180px;margin-top:60px;height:50px;width:200px" >
  <option value="All" selected>Exam Category</option>
  <option value="Book">Book</option>
  <option value="Audio">Audio</option>
  <option value="Video">Video</option>
</select>
  
<select class="btn-lg" name="Sub_Category" style="margin-left:10px;margin-top:60px;height:50px;;width:400px">
  <option value="All" selected>Exam Sub Category</option>
  <option value="Participation on Health and Safety Hazards">Participation on Health and Safety Hazards</option>
  <option value="Behavioral Approach">Behavioral Approach</option>
  <option value="Safety Hazards">Safety Hazards</option>
    <option value="Health Hazards">Health Hazards</option>
</select> 

<select class="btn-lg" name="Result_Type" style="margin-left:10px;margin-top:60px;height:50px;width:200px" >
  <option value="All" selected>Result Type</option>
  <option value="Successfull">Successfull</option>
  <option value="Unsuccessfull">Unsuccessfull</option>
</select>

<button type="submit" style="margin-top:-8px;margin-left:10px;font-size:20px;width:150px;background-color: #428bca;height:50px;border-color: #357ebd;" name="btnView" class ="btn btn-primary btn-lg">View</button>
  
<button type="submit" style="margin-bottom:8px;margin-top:0px;margin-left:10px;font-size:20px;width:150px;background-color: #428bca;height:50px;border-color: #357ebd;" name="btnViewAll" class ="btn btn-primary btn-lg">View All</button>
    <br>
<center>
   
<table cellspacing=0 border=3 width="1200" height="260" text-align="center" style="margin-left:20px;margin-right:10px">

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
if(isset($_POST['btnViewAll']))
{
    
    if (($h = fopen("assets/Log/ClientLog.csv", "r")) !== FALSE) 
    {
       
         while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
         {
            $i=0;     
           while($i<count($data))
           {
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
			echo $data[$i++]. '<br/>' . '<td>'.'<center>';
            
            $i++;
           }
           ?>
            <?php
          
         }
        fclose($h);
    }
}

$cid=$time=$cat=$subCat=$ans=$nans=$score=$correct=$wrong=$total=array();
if(isset($_POST['btnView']))
{
        $k=0;
       echo $_SESSION['resType']=$Result_Type=$_POST['Result_Type'];
     echo   $_SESSION['Cat']=$Category=$_POST['Category'];
   echo     $_SESSION['subCategory']=$Sub_Category=$_POST['Sub_Category'];
    if (($h = fopen("assets/Log/ClientLog.csv", "r")) !== FALSE) 
    {
       
         while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
         {
            $i=$j=0;     
           while($i<count($data))
           {
        	
        	    if($Result_Type=='Successfull' )
        	    {
        	        if($data[9]>40)
        	        {
        	        if( $Sub_Category=='All' && $Category=='All')
        	        {
        	            $k++;
        	            echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All' && $Sub_Category==$data[3] && $Category=='All' )
        	        {
        	            $k++;
        	            echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category=='All' && $Category!='All' && $Category==$data[2])
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All'  &&  $Category!='All' && $Sub_Category==$data[3] && $Category==$data[2])
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($corrg, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($scorect,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrone, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        }
        	    
        	    }
        	    if($Result_Type=='Unsuccessfull' )
        	    {
        	        if($data[9]<40)
        	        {
        	        if( $Sub_Category=='All' && $Category=='All')
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All' && $Sub_Category==$data[3] && $Category=='All' )
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category=='All' && $Category!='All' && $Category==$data[2])
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All'  &&  $Category!='All' && $Sub_Category==$data[3] && $Category==$data[2])
        	        {
        	            $k++;
        	              echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        }
        	    
        	    }
        	    if($Result_Type=='All' )
        	    {
        	        if( $Sub_Category=='All'&& $Category=='All')
        	        {
        	            $k++;
        	             echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All' && $Sub_Category==$data[3] && $Category=='All' )
        	        {
        	            $k++;
                        echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category=='All' && $Category!='All' && $Category==$data[2])
        	        {
        	            $k++;
                        echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	        if( $Sub_Category!='All'  &&  $Category!='All' && $Sub_Category==$data[3] && $Category==$data[2])
        	        {
        	            $k++;
        	              echo '<tr>' . '<td>'.'<center>';array_push($cid, $data[$i]);
        	            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($time, $data[$i]);
                        echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($cat, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($subCat, $data[$i]);
 		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($total, $data[$i]);
		                echo $data[$i++] . '<br/>' . '<td>'.'<center>';array_push($ans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($nans, $data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($correct,$data[$i]);
		                echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($wrong, $data[$i]);
			            echo $data[$i++]. '<br/>' . '<td>'.'<center>';array_push($score, $data[$i]);
			            echo $data[$i++]."%". '<br/>' . '<td>'.'<center>';
        	        }
        	    
        	    }
        	    
        	    $i++;
           }
             $_SESSION['cid']=$cid;
            $_SESSION['time']=$time;
            $_SESSION['cat']=$cat;
            $_SESSION['subCat']=$subCat;
            $_SESSION['total']=$total;
            $_SESSION['ans']=$ans;
            $_SESSION['nans']=$nans;
            $_SESSION['correct']=$correct;
            $_SESSION['wrong']=$wrong;
            $_SESSION['score']=$score;
          
          
         }
        fclose($h);
    }
   
}
?>

 </table>  </center>
<br/>
<?php 
if(isset($_POST['btnView']))
{
if($k==0)
    {?>
    
        <p style="margin-left:100px;font-size:34px;margin-top:20px"> No Record Found </p> 
        <hr>
    <?}
else
    {?>
<a href="Result_Evaluation_Report.php" target="_blank" style="margin-left:150px;font-size:20px;width:150px;background-color: #428bca;height:50px;border-color: #357ebd;" name="btn_print" class ="btn btn-primary btn-lg" >Print</a><br><br><br>
<?php } }?>
 </form>
 <!--HOME SECTION END--> 
	       
   
    <div id="footer">
      copy&copyright | Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2012 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : padmanabha s</a>-->
    </div>
    
      <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
	