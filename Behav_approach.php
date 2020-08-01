<?php
include('header.php');
?>
<html>

<style>


.container {
  position: relative;
  width: 100%;
height:200px;
background-image:url(images/oaaa7.jpg);


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  top: 0px;  left: 0px;
  right:0px;
}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 0px 0px;
  cursor: pointer;
  border-radius: 4px;
}
</style>
</head>

<div style="height:5%;width:100%">

</div>
<div class="container">
  
  <div class="content">
   <br>
	<center>
	<h2 style="color:#ffffff;"> Exam Review </h2>
	<h5 style="color:#ffffff;margin-top:-10px"> Home  >  Exam Review </h5>
	</center>
  </div>
</div>

<script>
function myFunction() {
  location.replace("http://localhost/hse/Exam_Behav_approach.php")
}

</script>
<div style="height:90%;width:100%;">
<br>
<center>
<table style="font-size:16px;font-weight:bold;width:600px">
    <tr><td style="float:left"><a>Number of Question : 3</a></td>
    <td style="width:45%"><a>Behavioral Approach</a></td>
    <td style="float:left"><a>Time: 1 MIN</a></td>
    </tr>
    <tr><td></td></tr><tr><td></td></tr>
    </table>

<div style="height:300px;width:200px;border: 0.6px solid #EAEBF1;border-spacing: 0;border-style: groove;">
<div style="height:70%;width:100%;background-image:url(images/oaaa5.jpg);"></div>
<center><h4 >Health and Safety :</h4></center>
<button class="button" style="margin-top:-10px;height:13%;width:100%;background-color:#4CAF50;" onclick="myFunction()">Start Exam</button>
</div>
<center>
</div>
</html>


