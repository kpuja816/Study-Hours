<?php
session_start();

if (isset($_POST['agreed'])) {
	$_SESSION['agreed'] = 'true';
	header('Location: homepage.html');
}
else if (isset($_POST['disagreed'])) {
	header('Location:login/user_login.php');
} 
else {}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <title>
            Kramah Software India Private Limited
        </title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet"/>
        <!-- FONT AWESOME CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
        <!-- FLEXSLIDER CSS -->
        <link href="assets/css/flexslider.css" rel="stylesheet"/>
        <!-- CUSTOM STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet"/>
        <!-- Google	Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css"/>
    </head>
    <script language="JavaScript">
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
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="" class="logo-custom" src="../images/logo1.png"/>
                    </a>
                </div>
                
            </div>
        </div>
    </body>
</html>
<!--NAVBAR SECTION END-->
<br/>
<br/>
<div class="home-sec" id="home">
    <div class="overlay">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="flexslider set-flexi" id="main-section">
                    <ul class="slides move-me">
                        <div style="text-align: center;"><h1>
                            WELCOME TO HEALTH AND SAFETY REPORT PORTAL

                        </h1></div>
                        <h2 style="font-size: 35px;">
                            <center>
                                End User Disclaimer
                            </center>
                        </h2>
                        <form action="eud.php" method="POST">
                            <p>
                                Before proceeding, you must confirm that you are authorized to access the Health and Safety Portal as defined under the Disclaimer on behalf of the KRAMAH SOFTWARE INDIA PRIVATE LIMITED,BENGALURU.
								<br/><br/>
								I/We confirm that my legal age is above 18 years as per law of land.
								<br/><br/>
								I/We also agree to limit your access only to upload, download, correction of content updated earlier, and your prohibited to share the login credentials to the third party/person who is not in any way connected with this process/portal.
								<br/><br/>
								This Portal is only for College/University Data Gap Analysis, College/University Data Management, and College/University Monitoring Purpose Only, KRAMAH SOFTWARE INDIA PRIVATE LIMITED,BENGALURU does not confirm or endorse the Score or Grade as mentioned in the Scoring Portal.
								<br/><br/>
								All Scores are dependent on subjective expertise. It is only a monitoring system to enhance College/University CGPA and Grading.
								<br/><br/>
								KRAMAH SOFTWARE INDIA PRIVATE LIMITED,BENGALURU will not be liable for the CGPA and Grading changes verses the actual.
                            </p>
			
                            <div style="text-align: center;">
                                <input class="btn btn-primary btn-lg" name="agreed" type="submit" value="I Agree">
                                </input>
                            
                                <input class="btn btn-primary btn-lg" name="disagreed" type="submit" value="I do not Agree">
                                </input>
                            </div>
						
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <div id="footer">
            Copyright &copy; 2018 | Kramah Software India Private Limited | All Rights Reserved
            <!--  &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP</a>-->
        </div>
        <!-- FOOTER SECTION END-->
        <!--  Jquery Core Script -->
        <script src="assets/js/jquery-1.10.2.js">
        </script>
        <!--  Core Bootstrap Script -->
        <script src="assets/js/bootstrap.js">
        </script>
        <!--  Flexslider Scripts -->
        <script src="assets/js/jquery.flexslider.js">
        </script>
        <!--  Scrolling Reveal Script -->
        <script src="assets/js/scrollReveal.js">
        </script>
        <!--  Scroll Scripts -->
        <script src="assets/js/jquery.easing.min.js">
        </script>
        <!--  Custom Scripts -->
        <script src="assets/js/custom.js">
        </script>
    </div>
</div>
