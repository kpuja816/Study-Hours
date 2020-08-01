

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
					   <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="../images/logo1.png" alt="logo here"  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="homepage.html">HOME</a></li>
                     <li><a href="ds.html">DASHBOARD</a></li>
                  
                    
					        <li><a href="../mainpage.html">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
</br></br>
         <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="bckleft"> <a  href="ds.html" class="btn btn-primary btn-lg" > Back  </a></span>
<i class="fa fa-circle-o-notch"></i> 1.1 VIEW AUDIO <i class="fa fa-circle-o-notch"></i> 
		
		      		
		
		</h2> <!-- <h3></h3>-->
                   </div>
               </div>
             </div>
        
    </div>
    <!--END OF THE ROW--> 
<center>
<b>NOTE:Qualitative Metrics(QlM) and Quantitative Metrics(QnM)</b> 

<table border=1>
<th>Form Name</th><th>Status</th><th>Maximum Weightage</th><th>Allotted Weightage</th><th>Automated Weightage	</th><th>QlM and QnM</th><th>Samples</th>
<th rowspan="6"><center><form action="save1_1.php" method="post" enctype="multipart/form-data" id="importFrm" name="importFrm" onsubmit="return myFunction()" class="form">
<button type="upload" name="btn-upload"  class ="btn btn-primary btn-lg">Save</button></center></th>
	   		<tr><td><label style="margin-left:0%" class="">1.1.1 VIEW AUDIO
                                                                       
 </label>
<input type="hidden"  name="crit_id" value="1"/>
<input type="hidden"  name="key_id" value="1.1"/>
<input type="hidden"  name="metric_no1" value="1.1.1"/></td>


        <th><input type="radio" name="metric_one_one_one" value="YES" <?php echo ($value_entered== 'YES') ?  "checked" : "" ;  ?>/>YES
		<input style="margin-left:10px;" type="radio" name="metric_one_one_one" value="NO" <?php echo ($value_entered== 'NO') ?  "checked" : "" ;  ?>/>NO
		<input  style="margin-left:10px;" type="radio" name="metric_one_one_one" value="NA" <?php echo ($value_entered== 'NA') ?  "checked" : "" ;  ?>/>NA</th>
		<input  type="hidden" name="hide"  value="one_one"  >
		
		
		<th><label style="margin-left:20%" class="">
 </label><input type="text"  name="upload_one_one_one" value="10"></th>




 
		
		<th><label style="margin-left:20%" class="">
 </label><input type="text"  name="upload_one_one_one1" id="one" onKeyUp="return myFunction();" value="<?php echo $obtained_weightage;?>"></th>
 <th><label style="margin-left:20%" class="">
										
						
										
 </label><input type="text"  name="allota" id="ala" readonly value="<?php echo $value111; ?>" ></th>


	<th><label style="margin-left:1%" class=""></label>
	
                                        <a href="viewAudio/addaudio.php">metric 1.1.1</a></th>


<th><label style="margin-left:1%" class=""></label>
	
                                      
                                        <a href="#">Document</a></th></td></tr>

</td></tr>
         



		 
</table>
          	

  <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><span class="sendright"> <a  href="#" class="btn btn-primary btn-lg" > QlM and QnM Comment  </a></span>
</h2>
   <!-- FEATURES SECTION END-->
   </br></br></center>
    <div id="footer">
	Copyright &copy 2018| Kramah Software India Private Limited | All Rights Reserved
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
