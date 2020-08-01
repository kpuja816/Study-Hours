<?php

include('db_configure.php');

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Health and safety</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="js/bootstrap.min2.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
  ::-webkit-scrollbar {
  width: 5px;
  height : 10px;
}

::-webkit-scrollbar:hover {
  width: 15px;
  height : 15px;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px black; 
  border-radius: 5px;
}
 
::-webkit-scrollbar-thumb {
  background: #446188; 
  border-radius: 10px;
}
  *{
      margin : 0 !important;
      padding :0 !important;
      box-sizing : border-box;
  }
  body{
       min-height: 0!important;
    height: auto!important;
    position: inherit!important;
      margin:0 !important;
          font-family: Arial,Helvetica,sans-serif;
       font-size: 14px;
    color: black;
    font-weight: 400;
    line-height: 24px;
        background-color :  #f2f2f2;
        margin-bottom : 200px !important;
    
  }
  
  
  
      .header{
          background-image : url('../images/2020pattern.png');
          background-color : white !important;
      }
      .container-fluid,.navbar-default{
              width: 100%;
        }
       
      .navbar{
          padding : 20px !important;
          transition: top 0.5s;

      }
      .navbar  a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 20px !important;
  text-decoration: none;
}
.nav-item a{
    
     display: block;
     
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
margin-right : 30px !important;
z-index: auto;
position: static;
cursor: pointer;
opacity: 1;
margin: 0;
padding: 10px !important;
overflow: hidden;
border: 0 double;
border-right-color: black ; /*gba(242,242,242,1); */
border-left: 22px double white; /*rgba(242,242,242,1);*/
-webkit-border-radius: 0 23px 0 37px;
border-radius: 0 18px 0 20px;
font-family: Arial;
font-weight : bold;
    font-size: 14px;
    color: white;

text-align: center;

-o-text-overflow: ellipsis;
text-overflow: ellipsis;
background: #446188;
-webkit-box-shadow: 1px 1px 1px 0 rgba(5,50,186,0.65) ;
box-shadow: 1px 1px 1px 0 rgba(5,50,186,0.65) ;
text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
-webkit-transition: none;
-moz-transition: none;
-o-transition: none;
transition: none;
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;

}
.nav-item a:hover{
    color : black;
    font-weight : bold;
}
      .sticky{
          position:fixed;
          top:0;
          width:100%;
          background-color : white !important;
          background-image : url('');
          transition : 1s ;
      }
       .dropdown-menu{
           background :white !important;
           -webkit-border-radius: 0 23px 0 37px !important;
      border-radius: 0 18px 0 20px !important;
       }
        .dropdown-menu:hover{
           background :white !important;
           -webkit-border-radius : 10px; !important;
border-radius: 10px !important;
       }
      
        .dropdown-menu a{
            font-family :  Arial;
            background-color : white !important;
          text-align : left;
          	font-size : 12px;
           color: #333333 !important;
           border: 0px 0px 0px 0px !important;
           -webkit-border-radius: 0 0px 0 0px;
border-radius: 0 0 0 0 !important;
margin-right : 0px !important;
margin-top : 0px !important;
padding : 5px 0px 0px 0px !important;


       }
       .dropdown-menu a:hover{
        color:#446188 !important;
        	font-size : 12px;
        	background-color :white !important;
        	font-weight : bold;

}
      .dropdown:hover>.dropdown-menu{
          display : block;
        }
        .navbar-toggler{
            color :white;
        }
        .dropdown .fa-square{
            color : #446188;
            margin-right : 5px !important;
            font-size : 10px;
            margin-top : -2px !important;
        }
           .dropdown .fa-user{
            color : white;
            margin-right : 5px !important;
            font-size : 14px;
            margin-top : -2px !important;
        }
        .dropdown .fa-eye{
            color : #446188;
            margin-right : 5px !important;
            font-size : 10px;
            margin-top : -2px !important;
        }
        .dropdown .fa-sign-out{
            color : #446188;
            margin-right : 5px !important;
            font-size : 10px;
            margin-top : -2px !important;
        }
    /****************** Google translator **********/
    
    .translator{
        padding : 30px !important;
          width:200px;
          margin-left : 100px;
          margin-top:-100px!important;
          margin-bottom: 10px !important;
    }
      
   .language
{
    display : none;
}

.language select
{
    background-color: #446188;
	border-color : white;
	border-radius : 5px;
	color : white;  
	width : 150px;
	height:45px;
	border-right-color: black ; /*gba(242,242,242,1); */
border-left: 22px double white; /*rgba(242,242,242,1);*/
-webkit-border-radius: 0 23px 0 37px;
border-radius: 0 18px 0 20px;
font-family: Arial;
font-weight : bold;
    font-size: 14px;
    outline:none;
}
.language select li a:hover
{
         background-color: white;
    	 border-radius : 5px;
    	 color : #446188;
    	 border-color : #446188;
    	 font-weight : bold;
    	     outline:none;

}

.language-cancel
{
	display : none;

}
.language-icon, .language-cancel{
    color :#446188;
    font-size: 28px;
}

.language-icon
{	
    display : block;
    margin-right : 20px !important;
}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
    
     .goog-logo-link {
 display:none !important;
} 
 .goog-te-gadget{
     color: transparent !important;
 } 
#google_translate_element {
  display:none;
}

.goog-tooltip {
    display: none !important;
}
.goog-tooltip:hover {
    display: none !important;
}
.goog-text-highlight {
    background-color: transparent !important;
    border: none !important; 
    box-shadow: none !important;
}  

/****************body***************/

.body-wrapper
{
    margin-top : 0% !important;
       /*  background-image : url('../images/2020pattern.png'); */

}
.second-wrapper
{
    margin-top : 1% !important;
     margin-left : 10% !important;    
     margin-right : 10% !important;


}
.column1 {
    
         margin-left : 2% !important;
}
h1,h2,h3,h4,h6,h5
{
    	font-size : 16px;
    color : #446188;
   font-weight : bold;
}
.column2 {
    text-align : justify !important;
         margin-top : 2% !important;
           margin-left : 2% !important;

}
.column3 {
         margin-top : 2% !important;
                  margin-left : 2% !important;
   


}

.column1 a{
     color : white;
        	font-size : 14px;

}

.column3 tr,th,td 
{
   color : #446188;
   	font-size : 14px;

}
.column2 ul{
    text-indent : 50px;
}
.page-header {
    background-color : #446188;
    width :100%;
    height : 80px;
      padding: 20px 10px !important;
     left: 0 !important;
     margin-top:0px !important;
      
}
.page-header h4{
            font-size:20px;
            color : white;
            font-weight : bold;
          text-align :center;
        }
.criteria-head-div table{
    margin-top : 2% !important;
    width : 98%;
    margin-left : 1% !important;
        margin-right : 1% !important;
    box-shadow : 5px 5px 5px 5px grey;
    background-color : white;
}
.criteria-head-div table th{
    
   height : 50px;
    text-align : center !important;
     background-color : #00001a;
    color : white;
    padding :15px;

}
.criteria-head-div table td{
    
  
    padding :15px !important;
    color : #446188;
    font-size : 14px !important;
    font-weight : bold;

}

.criteria-head-div table tr{
    
    height : 50px;
    text-align : center !important;
        color : #446188;


}

.criteria-head-div table .textarea{
    width : 200px !important;
    height : 100px !important;
    border-radius : 2px !important;
    text-indent : 5px !important;
    font-size : 14px !important;
    outline : none !important;
}

.criteria-head-div .support-doc{
    
    background-color: #446188;
    border-radius : 5px;
    padding : 10px 10px;
    height : 35px;
    width : 200px;
        border-color : white;
        outline:none;


}
.criteria-head-div .support-doc {
        color : white;
      text-align : center !important;
      font-weight : bold;

}
.criteria-head-div .criteria-link{
    
    background-color: #339933;
    border-radius : 5px;
    padding : 10px 10px;
    height : 35px;
    width : 150px;
    border-color : white;
            outline:none;


}
.criteria-head-div .criteria-link {
        color : white;
      text-align : center !important;
      font-weight : bold;

}
.criteria-head-div .listing-comment-save
{
    
    background-color: #ff3333;
    border-radius : 5px;
    padding : 10px 10px;
    height : 40px;
    width : 170px;
    border-color : white;
    color : white;
    font-weight : bold;
        opacity : 0.8;
    
}
.criteria-head-div .listing-comment-save:hover
{
            opacity : 1;
}

.criteria-head-div .oqf-comment-save
{
    
    background-color: #339933;
    border-radius : 5px;
    padding : 10px 10px;
    height : 40px;
    width : 170px;
    border-color : white;
    color : white;
    font-weight : bold;
    opacity : 0.8;
}
.criteria-head-div .oqf-comment-save
{
    opacity : 1;
}


.sidenavbar
{
    background-color: white;
    border-radius : 5px;
    padding : 10px 10px;
    height : 35px;
    width : 100px;
    color : #446188;
    font-weight : bold;
    float:left;
    box-shadow : 0px 1px 1px white;
    outline : none !important;
}


.sidenavbar-right
{
    background-color: #ff3333;
    margin-top  :1% !important;
        margin-right  :1% !important;
    border-radius : 5px;
    padding : 10px;
    height : 50px;
    width : 200px;
    color : white;
    font-weight : bold;
    box-shadow : 1px 1px 1px 1px black;
    outline : none !important;
    float : right;
    opacity : 1;
}
.sidenavbar-right:hover
{
    color : #ff3333;
    background-color : white;
}

/***************application list ********************/


.application-list{
    width : 100%;
}

.application-list table{
    width : 100%;
    height : 100%;
     box-shadow: 3px 3px 3px 3px gray;
         background-color : #d9d9d9;
       border-radius : 5px;
   border-collapse: separate;
    border-spacing: 0 1em;
}
.application-list table tr{
    
    height : 50px;
    text-align : center !important;
    margin-top : 3px !important;
    background-color : white;
           border-radius : 10px;
         box-shadow: 0px 2px 2px gray;
               font-weight : bold;


}


.application-list table th{
    
    height : 50px;
    text-align : center !important;
     background-color : #00001a;
    color : white;
}

.application-list table td{
    
    text-align : center !important;
    color : #446188;
    padding : 10px !important;
}


.application-list .clickable:hover {
    
    text-align : center !important;
    background-color : #d6e0f5;
      font-weight : bold;
            height: 70px; 
            width:100%;
            transition : 0.3s;
}

.application-list .add-new-application{
    
    background-color: #446188;
    border-radius : 5px;
    padding : 10px 10px;
    height : 60px;
    width : 200px;
        border-color : white;
  opacity : 0.8;


}
.application-list .add-new-application:hover{
    
    background-color: #446188;
    border-radius : 5px;
    padding : 10px 10px;
    height : 60px;
    width : 200px;
        border-color : white;
  opacity : 1;
  font-weight : bold;

}
.application-list .add-new-application {
        color : white;
      text-align : center !important;

}
  

/*******************************Column2******************************/
.criteria-td2-div {
 
  width:100%;
  margin-top : 0% !important;
    /*  background-image:url('../images/2020pattern.png');*/

}


.criteria-td2-div table{
       border-radius : 5px;
    border-spacing: 0 1em;
        margin-top : 1% !important;
        margin-left: 20% !important;
       /* margin-bottom: 5% !important;*/
       width :60%;
    color : black;
     box-shadow: 3px 3px 3px 3px gray;

     
    background-color : white;
}


 
.criteria-td2-div table td{
    width : 50% !important;
        color : black;
        height : 60px !important;
          padding: 10px !important;

}
.criteria-td2-div table th{
          padding: 10px !important;

}


.criteria-td2-div table label{
  width: 100%;
        color : #446188 !important;
        font-weight : bold;
        text-align : left !important;
}

.criteria-td2-div table input[type=text],input[type=password],input[type=date],input[type=number],input[type=email],input[type=link],input[type=url],input[type=file] {
    
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     border-radius : 5px;
     height :40px !important;
     font-size:14px;
     font-family : Arial;
       display: inline-block;
text-indent :5px;
    outline: none !important;
}
.criteria-td2-div textarea{
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     height : 100px;
          border-radius : 5px;
text-indent :9px;
          font-size:14px;
               font-family : Arial;
  display: inline-block;
      outline:none;



}
.criteria-td2-div select
{

 width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
          border-radius : 5px;
     height :38px;
     font-family : Arial;
  display: inline-block;
text-indent :5px;
        font-size:14px;
            outline:none;
}
.criteria-td2-div p{
     width: 100%;
        color : black;
text-align : justify;
}


 .criteria-td2-div table button {
  width:100px;
  display: inline-block;
  border-color : #fefefe;
  background: #f1f1f1;
  color : white;
  font-weight:bold;
  height : 40px;
  outline : none !important;
}
.criteria-td2-div table a{
    color : #446188 ;
    font-size : 14px;
    font-weight : bold;
}


 .criteria-td2-div table .signupbtn{
    background-color : white;
     padding: 14px 20px;
     color : #446188;
     border-radius : 5px !important;
          border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
           opacity : 1;

}
.criteria-td2-div table .signupbtn:hover{
    background-color : #ff3333;
     color : white;
     transition : 1s;
}
.criteria-td2-div table .cancelbtn{
        background-color : white;
         padding: 14px 20px;
           color : #ff3333;
     border-radius : 5px !important;
     border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
}

.criteria-td2-div table .cancelbtn:hover{
        background-color : #ff3333;
             color : white;
                  transition : 1s;
}
.criteria-td2-div hr.style-four {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(255, 255, 255, 0.5);
}

.table-heading{
    background-color:#00001a;
    height : 50px !important;
                }
.table-heading h4{
    color:white !important;
    font-size: 16px !important;
}
.table-heading th{
    font-weight : bold !important;
        text-align:center;
        color :white;
}
.table-heading td{
    font-weight : bold !important;
        text-align:center;
        color :white;
}

/***********************Column3*********************************/
.criteria-td3-div {
 
  width:100%;
  margin-top : 0% !important;
   background-color :  #f2f2f2;
}


.criteria-td3-div table{
        margin-top : 1% !important;
        margin-left: 10% !important;
       width :80%;
    color : black;
        background-color : white;
        margin-bottom : 5% !important;
 box-shadow: 3px 3px 3px 3px gray;
}


 
.criteria-td3-div table td{
    width: 30%;
        color : black;
          padding: 10px !important;

}
.criteria-td3-div table th{
    width: 30%;
          padding: 10px !important;

}


.criteria-td3-div table label{
  width: 100%;
        color : #446188;
        font-weight : bold;
}

.criteria-td3-div table input[type=text],input[type=password],input[type=date],input[type=number],input[type=email],input[type=link],input[type=url] {
    
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     border-radius : 5px;
     height :35px;
     font-size:14px;
     font-family : Arial;
       display: inline-block;
text-indent :5px;
  outline : none !important;

}
.criteria-td3-div input[type=file] {
     width: 100% !important;
        color : black;
     border : 1px solid #446188 !important ;
     border-radius : 5px;
     height :35px;
     font-size:14px;
     font-family : Arial;
       display: inline-block;
    text-indent :5px;
      outline : none !important;

}
.criteria-td3-div textarea{
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     height : 100px;
          border-radius : 5px;
text-indent :9px;
          font-size:14px;
               font-family : Arial;
  display: inline-block;
    outline : none !important;

}
.criteria-td3-div select
{

 width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
          border-radius : 5px;
     height :33px;
     font-family : Arial;
  display: inline-block;
text-indent :5px;
        font-size:14px;
  outline : none !important;

}
.criteria-td3-div p{
     width: 100%;
        color : black;
text-align : justify;
}


 .criteria-td3-div table button {
  width:100px;

  display: inline-block;

  border-color : #fefefe;
  background: #f1f1f1;
  color : white;
  font-weight:bold;
  height : 40px;
    outline : none !important;

}
.criteria-td3-div table a{
    color : #446188 ;
    font-size : 14px;
    font-weight : bold;
      outline : none !important;

}
 .criteria-td3-div table .signupbtn{
    background-color : white;
     padding: 14px 20px;
     color : #446188;
     border-radius : 5px !important;
          border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
           opacity : 1;

}
.criteria-td3-div table .signupbtn:hover{
    background-color : #ff3333;
     color : white;
     transition : 1s;
}
.criteria-td3-div table .cancelbtn{
        background-color : white;
         padding: 14px 20px;
           color : #ff3333;
     border-radius : 5px !important;
     border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
}

.criteria-td3-div table .cancelbtn:hover{
        background-color : #ff3333;
             color : white;
                  transition : 1s;
}
.criteria-td3-div hr.style-four {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(255, 255, 255, 0.5);
}
/************************column 5 ********************/

.criteria-td5-div {
 
  width:100%;
  margin-top : 0% !important;
   background-color :  #f2f2f2;
   overflow-x : auto;
}


.criteria-td5-div table{
        margin-top : 1% !important;
          width:98%;

    color : black;
        background-color : white;
        margin-bottom : 5px !important;
                margin-left : 1% !important;
 box-shadow: 3px 3px 3px 3px gray;

}


 
.criteria-td5-div table td{
        color : black;
          padding: 10px !important;
}
.criteria-td5-div table th{
          padding: 10px !important;

}


.criteria-td5-div table label{
  width: 100%;
        color : #446188;
        font-weight : bold;
}

.criteria-td5-div table input[type=text],input[type=password],input[type=date],input[type=number],input[type=email],input[type=link],input[type=url] {
    
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     border-radius : 5px;
     height :35px;
     font-size:14px;
     font-family : Arial;
       display: inline-block;
text-indent :5px;
  outline : none !important;

}
.criteria-td5-div table input[type=file] {
     width: 100% !important;
        color : black;
     border : 1px solid #446188 !important ;
     border-radius : 5px;
     height :35px;
     font-size:14px;
     font-family : Arial;
       display: inline-block;
    text-indent :5px;
      outline : none !important;

}
.criteria-td5-div textarea{
     width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
     height : 100px;
          border-radius : 5px;
text-indent :9px;
          font-size:14px;
               font-family : Arial;
  display: inline-block;
    outline : none !important;

}
.criteria-td5-div select
{

 width: 100%;
        color : black;
     border : 1px solid #446188 !important ;
          border-radius : 5px;
     height :35px;
     font-family : Arial;
  display: inline-block;
text-indent :5px;
        font-size:14px;
          outline : none !important;


}
.criteria-td5-div p{
     width: 100%;
        color : black;
text-align : justify;
}


 .criteria-td5-div table button {
  width:100px;
  display: inline-block;
  border-color : #fefefe;
  background: #f1f1f1;
  color : white;
  font-weight:bold;
  height : 40px;
    outline : none !important;

}
.criteria-td5-div table a{
    color : #446188 ;
    font-size : 14px;
    font-weight : bold;
      outline : none !important;

}

 .criteria-td5-div table .signupbtn{
    background-color : white;
     padding: 14px 20px;
     color : #446188;
     border-radius : 5px !important;
          border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
           opacity : 1;

}
.criteria-td5-div table .signupbtn:hover{
    background-color : #ff3333;
     color : white;
     transition : 1s;
}
.criteria-td5-div table .cancelbtn{
        background-color : white;
         padding: 14px 20px;
           color : #ff3333;
     border-radius : 5px !important;
     border : 0;
          box-shadow : 1px 1px 1px 1px black;
          font-weight : bold;
          font-size : 16px;
}

.criteria-td5-div table .cancelbtn:hover{
        background-color : #ff3333;
             color : white;
                  transition : 1s;
}
.criteria-td5-div hr.style-four {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(255, 255, 255, 0.5);
}



/******************************************************************/


.addnewrecord{
    background-color: #446188;
    border-radius : 5px;
    padding : 15px;
    height : 40px;
    width : 100px;
    border-color : white;
    color : #ffffff;
    font-weight : bold;
    margin-left : 1% !important;
    outline : none !important;
    
}

.addnewrecord-right{
    background-color: #446188;
    border-radius : 5px;
    padding : 15px;
    height : 40px;
    width : 100px;
    border-color : white;
    color : #ffffff;
    font-weight : bold;
    margin-right : 1% !important;
    outline : none !important;
    float:right;
    
}


.data-table{
    
    width:98% !important;
    text-align:center !important;
    background-color:white;
    color : #446188;

  }

.data-table th{
    background-color:#446188;
    color : white;
}

.data-table-footer{
    
    width:98% !important;
    text-align:center !important;
    background-color:white;
    color : #223144;

  }

.data-table-footer th{
    background-color:#223144;
    color : white;
}

.data-table-footer td{
    background-color:#223144;
    color : white;
}
.data-table2{
    
    width:98% !important;
    text-align:center !important;
    background-color:#4d4d4d;
    color : white;
  }

.data-table2 td{
    background-color:#4d4d4d;
    color : white;
}

.data-table2 th{
    background-color:#446188;
    color : white;
    font-size : 16px !important;
    font-weight : bold;
}

.data-table-new{
    
    width:98% !important;
    text-align:center !important;
    background-color:white;
    color : #446188;
    box-shadow : 2px 2px 1px 1px #446188;
    overflow-x : auto;
  }

.data-table-new th{
    background-color:#446188;
    color : white;
}

.edit-delete-icons
{
    height : 30px;
    width:30px;
}

.page-header .header-section-icon {
      width : 40px;
      height : 40px;
      border-radius : 5px !important;
      background-color : white !important;
  }

/**********************Mobile Responsive *******************************/


</style>
</head>
<body>

<div class="main-wrapper">

<div class="header text-center">
    


  <header class="style-header">
    <div class="navbar-default">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg" id="navbar">
                <a href=""><img src="images/logo.png" alt="logo" style="margin-left:10px;" width="100" height="40"/></a>
<!--
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-right:400px">
                     
                    <li class="nav-item active" style="width:130px;list-style-type:none;">
                            <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a></li>
                       	
                					<li class="nav-item" style="width:160px;list-style-type:none;">
                					  <a class="nav-link" href="#">Contact Us</a>
                					</li>
                					
                				
                			
                		
                				
                		  <li class="nav-item dropdown" style="width:130px;list-style-type:none;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="User/login/user_login.php"><i class="fa fa-square"></i>USER</a>
                						<a class="dropdown-item" href="adminlogin.php"><i class="fa fa-square"></i>ADMIN</a>
                					
                						    </div>
                        </li>
                        
                        
                        
                        
                    </ul>
                </div>
                <hr>
            </nav>
        </div>
    </div>
</header>
 </div>
 
 

<div class="body-wrapper">
