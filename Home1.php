
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include('header.php');

if(isset($_POST['listing']))
{
    $value1 = $_POST['listing_value'];
    if($value1 != '') { 
    ?>
    <script>
        window.location.href="listing_applications.php?data=<?php echo $value1;?>";
    </script>
    <?php }
    else{ ?>
         <script>
alert("Enter Listing Qualifications !");    </script>
   <?php }
}

if(isset($_POST['alignment']))
{
    $value2 = $_POST['alignment_value'];
     if($value2 != '') { 
    ?>
    <script>
        window.location.href="alignment_applications.php?data=<?php echo $value2;?>";
    </script>
   
     <?php } else{ ?>
         <script>
alert("Enter Alignment Qualifications !");  
</script>
   <?php } 
}
?>

<style>

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 20%;
 
}

/* Clear floats after image containers */

.row {
  display: flex;
}

.column {
  flex: 20%;
 
}





.wrapper {
    overflow : hidden;
    width : 100%;
    background-color : #446188 !important;
}

    .image1{
        text-align: center; 
        height:400px !important;
        width:100% !important; 
        background-repeat:no-repeat;
        padding:2px; 
        background-size: 100% 100% !important;
        top:0px;
        background-image: url('images/image_lms.png');
/* frontImage.jpg');*/
    }
    .heading h1 {
        margin-top: 17% !important;
        margin-left: 20% !important;
        margin-right: 18% !important;
        font-size:40px;
        font-family : Arial;
        color: red ;
        font-weight :bold;

        
    }
    .fa-search{
        color : white;
    }
    input:focus{
        background-color: #f2f2f2 !important;
    }
   
  
     
     
    
     .second-div {
         margin-top:0px !important;
         width:100%;
         font-family:Arial !important;
     }
     .div-left{
        width:50% !important;
        float:left;
    padding : 10px !important;

     }
      .div-right{
        width:50% !important;
                float:right;
            padding : 10px !important;

     }
    .div-left h1 {
         font-family:Arial;
        font-size:18px !important;
        color :white !important;
        text-align : center !important;
                padding : 10px !important;
                font-weight : bold;

     }
     .div-left img {
         width : 75% !important;
         height : 360px !important;
        text-align : center !important;
        margin-left : 12.5% !important;
        margin-right : 12.5% !important;
                padding : 10px !important;
       }
         .div-right h1 {
         font-family:Arial;
        font-size:18px !important;
        color :white !important;
        text-align : center !important;
                padding : 10px !important;
                                font-weight : bold;


     }
     .div-right iframe {
         width : 75% !important;
         height : 360px !important;
        text-align : center !important;
        margin-left : 12.5% !important;
        margin-right : 12.5% !important;
                padding : 10px !important;
                overflow:hidden;
       }
       
       .div-right p {
            width : 75% !important;
        text-align : justify !important;
        margin-left : 12.5% !important;
        margin-right : 12.5% !important;
        color : white;
        padding : 10px !important;

       }
       .div-left p {
            width : 75% !important;
        text-align : justify !important;
        margin-left : 12.5% !important;
        margin-right : 12.5% !important;
        color : white;
        padding : 10px !important;

       } 
       .div-right  .download-link{
                background-color: white !important;
                width : 75% !important;
                height : 40px !important;
                 margin-left : 12.5% !important;
        margin-right : 12.5% !important;
                border-radius : 5px !important;
             padding : 10px !important;
                             text-align :center !important;

    }
      .div-right .download-link a {
         color : #446188 !important;
                text-decoration : none;
                font-size : 16px !important;
                font-weight : bold;
                padding : 10px !important;
     }
      .div-right .download-link a:hover {
         color : black !important;
               
     }
     .div-third{
         width : 100% !important;
         margin-top:0px !important;
         height : auto !important;
         background-color: #446188 !important;
         font-family:Arial !important;
         font-size:14px !important;
     }
</style>
    
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
	width:100%;
	margin-left:150px;
	margin-right:150px;
	height:400px;

	
	
}

.hs ul{
	list-style:none;
	margin:0;
	padding:20px;
	
	
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
  
  width: 900px;
  overflow: auto;
  float:left;
}

.left-arrow{
	width:45px;
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
	margin-left:0px;
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
<form action="home_omani.php" method="POST" enctype="multipart/form-data" >
 
 

 
<div class="wrapper">

 <div class="image1" >
     
     <div class="heading">
     
     <hr>
     
    </div>
        
    </div>
 
         



<div class="second-div">
    <hr>
    
                 
                
</div>

                  <div class="div-right">

                  
                
                </div>
                 </div>
                  
 <div class="div-third">
                    <hr>
                    
                </div>

           
 </form>
  
  
<div style="height:500px;width:100%;position:relative;">
    <br>
<h1 style="font-size:32px;margin-top:10px;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Books</h1>
<br>
<div class="hs">
    <div class="left-arrow" style="text-align:center">
         <br> <br> <br> <br> <br> 
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:38px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:93%;line-height: 80%;">       
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
		
		</div><br>
		<center>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">Take Exam</button>
		</center>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
        <br> <br> <br> <br> <br> 
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:38px;margin-top:120px;"></i>
         </a>
    </div>
   
</div>
</div>
<div style="height:500px;width:100%;position:relative">
   <br>
<h1 style="font-size:32px;margin-top:10px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Audio</h1>
<br><div class="hs">
    <div class="left-arrow" style="text-align:center">
         <br> <br> <br> <br> <br> 
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:38px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:93%;line-height: 80%;">    
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
		<br>
		<center>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">Take Exam</button></center>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
         <br> <br> <br> <br> <br> 
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:38px;margin-top:120px"></i>
         </a>
    </div>
   
</div>
</div>  
<div style="height:500px;width:100%;position:relative">
   <br>
<h1 style="font-size:32px;margin-top:10px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video</h1>
<br><div class="hs">
    <div class="left-arrow" style="text-align:center">
         <br> <br> <br> <br> <br> 
         <a href="#prev" >
		 <i class="fas fa-chevron-circle-left" name="scroller_left"  style="font-size:38px;margin-top:140px;"></i>
         </a>
    </div>
    <div class="showcase" style="width:93%;line-height: 80%;">    
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
		<br><center>
		<button type="upload" style="margin-top:20px;margin-left:100px" name="btn-upload"  href="all_exam_category.php" class ="btn btn-primary btn-lg">Take Exam</button></center>
		</div>
		 </li>
        <?php } ?>
		
        </ul>    
    </div>
    <div class="right-arrow" style="text-align:center">
         <br> <br> <br> <br> <br> 
         <a href="#next">
		 <i class="fas fa-chevron-circle-right" name="scroller_right" width="22"  height="197" style="font-size:38px;margin-top:80px"></i>
         </a>
    </div>
   
</div>
</div>  

   <table>

	   		<tr><td><label style="margin-left:0%" class="">
                                                                       
 </label>


		 
</table>
          


 
    <br><br>
   
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

<?
include('../footer.php');
?>
</html>