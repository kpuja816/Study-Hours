<?php
   error_reporting(E_ALL);

include('db_configure.php');
?>

<?php 
//session_start(); 

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


  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (arthurgareginyan@gmail.com)
    * For full source code, visit http://www.mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>






	
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
 <a class="navbar-brand" href="#"><img class="logo-custom" src="images/logo1.png" alt="" /></a></div>
 <?php
/*
//session_start();
	$ss=$_SESSION['sess_user'];
//$servername = "mysql.hostinger.in";
//$username = "u810528275_ismnc";
//$password = "ismenaac1122";
//$dbname = "u810528275_ismnc";
// Create connection
include('../dbconfigure.php');
//$con = new mysqli($servername, $username, $password, $dbname);
$query1=mysqli_query($con,"SELECT role FROM Admin where id=$ss");
$rolen="";
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
 <li ><a href="homepage1.html">HOME</a></li>
 <li><a href="admin_ds.html">DASHBOARD</a></li>


	<li><a href="mainpage.html">LOGOUT</a></li>
	
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
 <li ><a href="homepage1.html">HOME</a></li>
	<li><a href="mainpage.html">LOGOUT</a></li>
	
 </ul>
 </ul>
 </div>
-->
<?php
//}
?>
 </div>
 </div>

      <!--NAVBAR SECTION END--></br></br>
        <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="criteria2.php" class="btn btn-primary btn-lg" > Back  </a></span><i class="fa fa-circle-o-notch"></i> 1.1.1 Search The Audio Details<i class="fa fa-circle-o-notch"></i>&nbsp;&nbsp;&nbsp;&nbsp; 
		

		
		
		</h2> <!-- <h3>WELCOME TO DASHBOARDA END</h3>-->
                   </div>
               </div>
             </div>
        
    </div>
    <!--END OF THE ROW--> 
	    
		<!--yo--> 
		<div class = "panel-body">
	    
		
		
	<div class="well inner-panel">
   <center>
	<table cellspacing=0 border=3 width="1200" height="260" text-align="center">
	   
  
	       
<th><center>AUDIO ID</center></th>
<th><center>AUDIO NAME</center></th>
<th><center>BASE CATEGORY</center></th>
<th><center>SUB CATEGORY</center></th>
<th><center>UPLOAD DATE</center></th>
<th><center>LINK OF THE AUDIO</center></th>
<th><center>UPLOAD IMAGE</center></th>

<th> <center>Edit</center></th>
<th> <center>Delete</center></th>
			 			   
</tr>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($con,"SELECT * FROM Audio
            WHERE (`BaseCategory` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does 	$id=$row['id'];
			
			$audio_id = $row['audio_id']; 

			$audio_name = $row['audio_name']; 
			 $BaseCategory = $row['BaseCategory'];
     $sub_category = $row['sub_category'];
			$upload_date = $row['upload_date'];
	
	$link=$row['link'];
	$image=$row['image'];
   
	
               
              
              
	         echo'<tr>' . '<td>'.'<centre>';	
			
		      echo $audio_id . '</br>' . '<td>'.'<center>';
			echo $audio_name. '</br>' . '<td>'.'<center>';
				echo $BaseCategory . '</br>' . '<td>'.'<center>';
					echo $sub_category . '</br>' . '<td>'.'<center>';
			echo $upload_date . '</br>' . '<td>'.'<center>';
				echo $link . '</br>' . '<td>'.'<center>';
					echo $image . '</br>' . '<td>'.'<center>';
	
			echo"<a href=\"Audio/edit_1_1_1.php?id=$row[id]\"><img src=\"images/edit.png\" height=\"25\"></a>
			<td><a href=\"Audio/delete_1_1_1.php?id=$row[id]\"><img src=\"images/delete.png\" height=\"25\" onClick=\"return confirm('Are you sure you want to delete?')\"></a></td>";
			
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        
         
    }
    
?>

</tr>

				

			 </table>

		 </div>
		  
       </form> 

           

      
	
		
		
		<!--HOME SECTION END--> 
   
    <div id="footer">
     Copyright &copy 2018 | Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP</a>-->
    </div>
     <!-- FOOTER SECTION END-->
   
      <!--  Jquery Core Script -->
    <script src="assetss/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assetss/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assetss/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assetss/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assetss/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assetss/js/custom.js"></script>
</body>
</html>