<?php include('db_configure.php');
session_start(); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
 <style type ="text/css">

			input[type=text] {
				
				          width: 70px;
                                      height: 40px;
                         box-sizing: border-box;
                         border: 2px solid #ccc;
                         border-radius: 4px;
                         font-size: 14px;
						// margin-top: -30px;
                         //background-color: white;
                         background-image: url('/Images/searchicon.png');
                        background-position: 10px 10px; 
                         background-repeat: no-repeat;
                         padding: 10px 10px 10px 20px;
                        
}
table,tr,td{
				                //padding-left:5px;
				                background-color:Transparent;
				                vertical-align:middle;
				               // text-align:left;
                                              //  height: 50px;
                                                white-space: nowrap; 
                                                  padding-left:5px;
                                               // border-bottom: 0.5px solid #999; 
				            //    border-collapse:collapse;
			                   }
				
				th{
					 padding-left:5px;
				
				 vertical-align:middle;
				 text-align:left;
                                 height:10px;
                                 white-space: nowrap; 
				 border-collapse:collapse;
					text-decoration: underline;
					background: Transparent;
				
				}
</style>

<script>
function myFunction() {
var one1 = document.getElementById("one").value;
var two2 = document.getElementById("two").value;
var three3 = document.getElementById("three").value;


		if (one1 > 20) {
        alert("The maximum is 20");
document.importFrm.upload_one_one_one1.focus();
         return false;
        
    } 
if (two2 > 20) {
        alert("The maximum is 20");
document.importFrm.num_one_one_two1.focus();
         return false;
        
    } 
if (three3 > 10) {
        alert("The maximum is 10");
document.importFrm.num_one_one_three1.focus();
         return false;
        
    } 
return true;

}
</script>
		
<header>

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>  
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<header/> 
<style>
.hs{
	width:90%;
	margin-left:50px;
	margin-right:50px;
	height:400px;
	position:absolute;
	
	
}

.hs ul{
	list-style:none;
	margin:0;
	padding:0;
	
	
}

.hs ul li{
	width:220px;
	float:left;
	margin-right:30px;
	height:400px;
	padding-bottom:20px;
		
}

.showcase {
  / Set it so we could calculate the offsetLeft /

  width: 500px;
  overflow: auto;
  float:left;
}

.left-arrow{
	width:22px;
	height:197px;
	display:block;
	margin-left:30px;
	margin-right:50px;
	float:left;
}

.right-arrow{
	width:22px;
	height:197px;
	display:block;
	margin-left:50px;
	float:left;	
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
   //find div
    var div = $('div.showcase');
    //find ul width
    var liNum = $(div).find('ul').children('li').length;
    var speed = 1000;
    var containerWidth = 848;
    var itemWidth = 500;
    //Remove scrollbars
    $(div).css({overflow: 'hidden'});
    $('div.right-arrow').click(function(e){	
          if(($(div).scrollLeft()+containerWidth)<(liNum*itemWidth)){
             $(div).animate({
                scrollLeft: '+='+containerWidth
              }, speed);
          }
    });	
    $('div.left-arrow').click(function(e){	
        if(($(div).scrollLeft()+containerWidth)>containerWidth){
                $(div).animate({
                scrollLeft: '-='+containerWidth
              }, speed);
        }
    });
});
</script>
</head>
<body >

<div style="height:500px;width:100%;position:relative">
<h1 style="margin-left:150px;font-weight:bold">Book</h1>
<div class="hs">
    <div class="left-arrow" style="text-align:center">
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:48px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:83%;line-height: 80%;">    
        <ul style="width:99999999px;">
		<?php
		$sql = mysqli_query($con,"SELECT * FROM Book");
		while($result = mysqli_fetch_array($sql)) 
		{
		
		?>
        <li>
		<div style="height:320px;width:100%;border: 1px solid #4CAF50;">
		<div style="width=80%;height:60%">
		   <img src="images/<?php echo $result['image']; ?>" width="100%" height="100%">
		<!--img src="images/oaaa5.jpg" width="100%" height="100%"/-->
		</div>
		<div style="width=100%;height:40%;padding-left:10px;overflow: hidden;margin-right:10px;">
		<H4>&nbsp;<?php echo $result['audio_name'];?></H4>
		<a style="font-size:10px;" href="<?php echo $result['link']; ?>" download><?php echo $result['link'];?></a>
		
		</div>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">Take Exam</button>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:48px;margin-top:120px"></i>
         </a>
    </div>
   
</div>
</div>
<div style="height:500px;width:100%;position:relative">
<h1 style="margin-left:150px;font-weight:bold">Audio</h1>
<div class="hs">
    <div class="left-arrow" style="text-align:center">
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:48px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:83%;line-height: 80%;">    
        <ul style="width:99999999px;">
		<?php
		$sql = mysqli_query($con,"SELECT * FROM Audio");
		while($result = mysqli_fetch_array($sql)) 
		{
		
		?>
        <li>
		<div style="height:320px;width:100%;border: 1px solid #4CAF50;">
		<div style="width=80%;height:60%">
		   <img src="images/<?php echo $result['image']; ?>" width="100%" height="100%">
		<!--img src="images/oaaa5.jpg" width="100%" height="100%"/-->
		</div>
		<div style="width=100%;height:40%;padding-left:10px;overflow: hidden;margin-right:10px;">
		<H4>&nbsp;<?php echo $result['audio_name'];?></H4>
		<a style="font-size:10px;" href="<?php echo $result['link']; ?>" download><?php echo $result['link'];?></a>
		
		</div>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">TextExam</button>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:48px;margin-top:120px"></i>
         </a>
    </div>
   
</div>
</div>  
<div style="height:500px;width:100%;position:relative">
<h1 style="margin-left:150px;font-weight:bold">Video</h1>
<div class="hs">
    <div class="left-arrow" style="text-align:center">
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:48px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:83%;line-height: 80%;">    
        <ul style="width:99999999px;">
		<?php
		$sql = mysqli_query($con,"SELECT * FROM Video");
		while($result = mysqli_fetch_array($sql)) 
		{
		
		?>
        <li>
		<div style="height:320px;width:100%;border: 1px solid #4CAF50;">
		<div style="width=80%;height:60%">
		   <img src="images/<?php echo $result['image']; ?>" width="100%" height="100%">
		<!--img src="images/oaaa5.jpg" width="100%" height="100%"/-->
		</div>
		<div style="width=100%;height:40%;padding-left:10px;overflow: hidden;margin-right:10px;">
		<H4>&nbsp;<?php echo $result['audio_name'];?></H4>
		<a style="font-size:10px;" href="<?php echo $result['link']; ?>" download><?php echo $result['link'];?></a>
		
		</div>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">TextExam</button>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:48px;margin-top:120px"></i>
         </a>
    </div>
   
</div>
</div>  

   <table>

	   		<tr><td><label style="margin-left:0%" class="">
                                                                       
 </label>


		 
</table>
          


 
    <br><br>
    <div id="footer">

        <!--  &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP--></a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="../Testing1/assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="../Testing1/assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="../Testing1/assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="../Testing1/assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="../Testing1/assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="../Testing1/assets/js/custom.js"></script>
</body>
</html>

