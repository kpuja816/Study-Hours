
<html>
<script>
    function myFunction() {
   location.replace("Home.php")
    }
    function myFunction1() {
    location.replace("all_exam_category.php")
    }
    
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.container {
    height:150px;
    width:270px;
    padding-right:20px;
    float:left;
    color:white;
    text-align:right;
  position: relative;


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
   padding-right:20px;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  top: 0px;  left: 0px;
  right:0px;
}
td{text-align:center;}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
        table,tr,td{ border: 0.5px solid #EAEBF1;border-spacing: 0;border-style: groove;color:#434348}



/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 60px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size:14px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


/* Main content */
.main {
  margin-left: 210px; /* Same as the width of the sidenav */
  font-size: 12px; /* Increased text to enable scrolling */
  padding: 10px 10px;
  padding-top:60px;
  color:#808080;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #808080;
  color:black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>

<div style="height: 60px; width: 100%; position: fixed; right:0; left: 0; top:0; background-color:green; padding-left: 20px; padding-right: 20px;background-color:#111;">
    <br>
     <div style="height:90px;width:60%;left:20px">
        <img src="images/logo.png" height="30px">
    </div>
     <div style="height:20px;width:130px;margin-top:-100px;margin-left:90%;">
         
     <a style="color:white">Hii Admin<span style='font-size:24px;;color:white'>&nbsp;<i class="fas fa-angle-down"></i></span></a>
    </div>
</div>
          

<div class="sidenav">
  <a href="#about"><i class="fa fa-home">&nbsp;&nbsp;</i>Dashboard</a>
 
   <button class="dropdown-btn"><i class="fa fa-diamond"></i>&nbsp;&nbsp;Manage Category
   <span style="float:right">&lang;  <span>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
   <button class="dropdown-btn"><i class="fa fa-database"></i>&nbsp;&nbsp;Manage Question
   <span style="float:right">&lang; <span>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact"><i class="far fa-money-bill-alt"></i>&nbsp;&nbsp;Payment Method</a>
 
   <button class="dropdown-btn"><i class="far fa-money-bill-alt">&nbsp;&nbsp;</i>Currency <span style="float:right">&lang;  <span>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
   <button class="dropdown-btn"><i class="fa fa-gear">&nbsp;&nbsp;</i>Setting <span style="float:right">&lang; <span>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

<div class="main">
  <p>Home &#9679; Dashboard</p>
  <hr>
    <p style="margin-top:-20px;font-size:24px">Dashboard &nbsp;<i style="font-size:18px;color:#808080">dashboard & statistic</i></p>

<div style="background-image:url(images/oaaa7.jpg);" class="container">
    <i class="fa fa-comments" style="font-size:220px; float:left; ">
    <div class="content" style="background:rgb(0, 0, 255, ); 
   background: rgb(0, 0, 255, 0.8);"><h2>15</h2><h4>Total Question</h4>
    </div>
    </i>
</div>    
<div style="height:150px;width:15px;float:left;"></div>

<div style="background-image:url(images/oaaa7.jpg);" class="container">
        <i class="fa fa-bar-chart-o" style="font-size:200px; float:left; ">

    <div class="content" style="background:rgb(255, 0, 0); 
   background: rgb(255, 0, 0, 0.8);">
    <h2>209</h2><h4>Total Exam Category</h4></div></i></div>
<div style="height:150px;width:15px;float:left;"></div>

<div style="background-image:url(images/oaaa7.jpg);" class="container">
       <i class="fas fa-comment-alt" style="font-size:130px; float:left; ">
    <div class="content" style="background:rgb(0, 184, 230); 
   background: rgb(0, 184, 230, 0.8);">
    <h2>1456</h2><h4>Total Exam</h4></div>
    </i></div>
<div style="height:150px;width:15px;float:left;"></div>

<div style="background-image:url(images/oaaa7.jpg);" class="container">
        <i class="fa fa-user" style="font-size:220px; float:left; ">
    <div class="content" style="background:rgb(172, 0, 230); 
   background: rgb(172, 0, 230, 0.8);">
    <h2>17622</h2><h4>Total User</h4></div>
    </i>
    </div>

</div>
   

<center>
    
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</html>


