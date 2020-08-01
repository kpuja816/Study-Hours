<?php 

session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
   
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT * FROM modal_title WHERE id='$id'");

if(mysqli_num_rows($sql) > 0)
{
    
    $_SESSION['edit_state']="true";
    $result=mysqli_fetch_assoc($sql);
    
         $id_update = $result['id'];
     
 
  $sub_category =$result['sub_category'];
 $base_category = $result['base_category'] ;
  $feature_image = $result['feature_image'];
   $currency =$result['currency'];
   $price = $result['price'];
 $modal_time =$result['modal_time'];
   $decription =$result['decription'];
    


}
}}
//-------------------------------

include('modal_title_db.php');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
$link .= "://"; 
  
$link .= $_SERVER['HTTP_HOST']; 
  
$link .= $_SERVER['REQUEST_URI']; 
      
$_SESSION['back'] = $link;

?>

<style>

.h4
{
font: normal 24px/normal "Times New Roman", Times, serif;
}

.third
{
display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
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
-webkit-border-radius: 3px;
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
border: 21px double rgba(16,150,239,0.65);
-webkit-border-radius: 3px;
border-radius: 3px;
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
<html>
<body><div class="container" Style="margin-left: 1027px;">
 <img src="images/logo.png" height="60px">
</div>
<div class="div" Style="margin-top: -50px;">
<div class="h4">
<h4> 
       
Modal Title </h4></div>
<form name="omani_app" action="modal_title.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>  
  <label for="sub_category" >Sub Category name: </label><td> </tr>
<tr>
<td >
   
        <input type="text" name="sub_category" placeholder="sub_category"  style="width:650px;Height:30px;"  value="<?php if(isset($_SESSION['sub_category'])) echo $_SESSION['sub_category']; ?>" class="form-control"></td> </tr>
     <tr> 
<td> 
 <label for="base_category" >Base Category: </label><td> </tr>
<tr>
<td>
   
       <select name ="base_category" style="width:650px;Height:30px;">
             <option value="">base_category</option>
       
        <?php
        
     $program = array("1","2","3","4","5","6","7","8","9","10");        
         for($i=0;$i<count($program);$i++)
               { ?>
            <option value="<?php echo $program[$i]; ?>"
            
            <?php    if(isset($base_category)) {
                 if($base_category == $program[$i] )
                 {
                     echo "selected";
                 }
             } ?>
            
            >  <?php echo $program[$i]; ?> </option> <?php } ?>
               
         
          </select></td> </tr>
      <tr><td> <label for="feature_image" >Featured Image: </label><td> </tr>
<tr>
<td> <input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="image_hidden" value="<?php if(isset($feature_image)) echo $feature_image; ?>">
 <input type="file" name="feature_image" placeholder="feature_image"  style="width:650px;Height:30px;"  value="<?php if(isset($_SESSION['feature_image'])) echo $_SESSION['feature_image']; ?>" class="form-control" readonly></td></tr>
<tr>
<td> <label for="currency"  >Currency: </label></td>
<td> <label for="modal_time"  style="margin-left:-290px;">Price: </label></td></tr>
<tr><td> <select name ="currency" style="width:200px; Height:30px;">
             <option value="">currency</option>
       
        <?php
        
     $program = array("1","2","3","4","5","6","7","8","9","10");        
         for($i=0;$i<count($program);$i++)
               { ?>
            <option value="<?php echo $program[$i]; ?>"
            
            <?php    if(isset($currency )) {
                 if($currency  == $program[$i] )
                 {
                     echo "selected";
                 }
             } ?>
            
            >  <?php echo $program[$i]; ?> </option> <?php } ?>
               
         
          </select></td>
<td>  <input type="text" name="price" placeholder="price"  style="width:300px;Height:30px;margin-left:-300px;"  value="<?php if(isset($_SESSION['price'])) echo $_SESSION['price']; ?>" class="form-control">
</td></tr>
<tr>
<td><label for="" >Time: </label></td></tr>
<tr><td> <input type="text" name="modal_time" placeholder="modal_time"  style="width:650px;Height:30px;"  value="<?php if(isset($_SESSION['modal_time'])) echo $_SESSION['modal_time']; ?>" class="form-control"></td></tr>
<tr><td><label for="" >Decription: </label></td></tr>
<tr><td> <input type="text" name="decription" placeholder="decription"  style="width:650px;Height:30px;"  value="<?php if(isset($_SESSION['decription '])) echo $_SESSION['decription ']; ?>" class="form-control"></td></tr>

<tr>
<td> 
          
           <button type="submit" name="close" class="signupbtn" Style="width: 96px;
height: 36px;margin-left: 397px;background: white;">Close</button></div></td>
<td>
   <button type="submit" name="submit" class="sign"  value="submit" Style="width: 106px;
height: 46px;margin-left: -127px;background:#0199d9;">Save Category</button></div></td></tr></table></div>
 
 
</body>
</html>
