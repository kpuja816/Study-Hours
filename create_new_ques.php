<?php 

session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM ques_answer WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id = $result['id'];
     
 

 $category =$result['category'];
   $question =$result['question'];
   $option1 = $result['option1'] ;
   $option2 = $result['option2'];
   $option3 =$result['option3'];
   $option4 = $result['option4'];
   $option5 =$result['option5'];
   $gender =$result['gender'];
 
    


}
}}
//-------------------------------

include('create_new_ques_db.php');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
$link .= "://"; 
  
$link .= $_SERVER['HTTP_HOST']; 
  
$link .= $_SERVER['REQUEST_URI']; 
      
$_SESSION['back'] = $link;

?>

<html>
    
<style>

.h4
{
font: normal 24px/normal "Times New Roman", Times, serif;
}

.third
{
display: inline-block;

float: none;
z-index: auto;
width: 96px;
height: 36px;
padding: 10px 20px;
position: static;
cursor: pointer;
opacity: 1;
margin-left: 127px;

overflow: visible;
border: 1px solid #018dc4;
-webkit-border-radius: 1px;
border-radius: 3px;
font: normal 14px/normal "Times New Roman", Times, serif;
color: rgba(255,255,255,0.9);
-o-text-overflow: clip;
text-overflow: clip;
background: #0199d9;
-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}

.div{
display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;
z-index: auto;
width: 664px;
height: 533px;
position: static;
cursor: default;
opacity: 1;
margin: 28px;
padding: 10px 20px;
overflow: visible;

font: normal 18px/normal "Times New Roman", Times, serif;
color: black;
-o-text-overflow: clip;
text-overflow: clip;
background: rgba(252,252,252,1);
-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}
</style>

<body><div class="container" Style="margin-left: 850px;">
 <img src="images/logo.png" height="60px">
</div>
<div class="div" Style="margin-top: -50px;">
<div class="h4">
<h4> 
       
 </h4></div>
 <td> <input type="hidden" name="id" value="<?php echo $id; ?>">
<form name="omani_app" action="create_new_ques.php" method="post" enctype="multipart/form-data">
  <table>
      
       <tr> 
<td> 
 <label for="" >Exam Category: </label><td> </tr>
<tr>
<td>
   
       <select name ="category" id="category" style="width:650px;Height:30px;">
             <option value=""></option>
       
        <?php
        
    
    $program = array("Participatio on Health and Safety Hazards","Health Hazards","Safety Hazards","Behavioral Approach");        
         for($i=0;$i<count($program);$i++)
               { ?>
            <option value="<?php echo $program[$i]; ?>"
            
            <?php    if(isset($category)) {
                 if($category == $program[$i] )
                 {
                     echo "selected";
                 }
             }
             ?>
            
            >  <?php echo $program[$i]; ?> </option> <?php }
            
            ?>
               
         
          </select></td> </tr>
    
 
 <tr>
<td><label for="" >Questions: </label></td></tr>
   <tr>
<td >
   
        <input type="text" name="question" id="question" placeholder="What is Safety"  style="width:650px;Height:30px;"  value="" class="form-control" ></td> </tr>
    
 
<tr>
<td><label for="" >First Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option1" id="option1" placeholder="to be safe"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td>
    <input type="radio" id="Answer1" name="gender" <?php if (isset($gender) && $gender==$result['option1']) echo "checked";?> value="Answer1" style="margin-left:-50px">
</td>
</tr>
<tr><td><label for="" >Second Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option2" id="option2" placeholder="Safe no1"  style="width:550px;Height:30px;"  value="" class="form-control"></td>
<td><input type="radio" id="Answer2" name="gender" <?php if (isset($gender) && $gender==$result['option2']) echo "checked";?> value="Answer2" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Third Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option3" id="option3" placeholder="Safe no2"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td><input type="radio" id="Answer3" name="gender" <?php if (isset($gender) && $gender==$result['option3']) echo "checked";?> value="Answer3" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fourth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option4" id="option4" placeholder="Safe no3"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td><input type="radio" id="Answer4" name="gender"<?php if (isset($gender) && $gender==$result['option4']) echo "checked";?> value="Answer4" style="margin-left:-50px"></td>
</tr>

<tr><td><label for="" >Fifth Option: </label></td>
<td>  <label style="margin-left:-50px">Answer</label></td>
</tr>
<tr><td> <input type="text" name="option5" id="option5" placeholder="Safe no4"  style="width:550px;Height:30px;"  value="" class="form-control" ></td>
<td> <input type="radio" id="Answer5" name="gender" <?php if (isset($gender) && $gender==$result['option5']) echo "checked";?> value="Answer5" style="margin-left:-50px"></td>
</tr>

<br>
<tr>
<td> <button type="submit" name="submit" id="submit" class="signupbtn" Style="width: 200px;
height: 36px;margin-left: 10px;background: lightblue;"><i class="fa fa-eye" style="font-size:16px;color:black"></i>View All Questions</button></div></td>
<td>
   <button type="submit" name="save" id="save" class="signupbtn" Style="width: 420px;
height: 36px;margin-left: -420px;background:blue;"><i class="fa fa-eye" style="font-size:16px;color:black"></i>Save Questions</button></td></tr></table></div>

</body>
</html>
