<!DOCTYPE HTML>
<?php
session_start();
?>
<?php
include("include/connection.php");
?>

<html>
<title>Student Portal | Credits</title>
<head>
  <link rel="stylesheet" href="assets/bs/css/bootstrap.min.css">
  <script src="assets/bs/js/jq.js"></script>
  <script src="assets/bs/js/bootstrap.min.js"></script>
</script><script src="assets/skd/src/skdslider.js"></script>
<link href="assets/skd/src/skdslider.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="assets/images/logo.png"/>
<script type="text/javascript" src="assets/date/moment.min.js"></script>
<script type="text/javascript" src="assets/date/daterangepicker.js"></script>
<script type="text/javascript" src="assets/date/validate.js"></script>
<script type="text/javascript" src="assets/validator/js/validator.js"></script>
<link rel="stylesheet" type="text/css" href="assets/date/daterangepicker.css" />
  <style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        border-top: 0px;
  }
  body{ 
  background: #888;
}

a.button {
  width: 200px;
  height: 50px;
  background: #333;
  display: block;
  position: relative;
  margin: 50px auto 0;
  overflow: hidden;
  border: 1px solid #333333;
  color: white;
  text-decoration: none;
  
  -webkit-box-shadow: inset 0px 1px 1px 0px rgba(255,255,255,.4);
  -moz-box-shadow: inset 0px 1px 1px 0px rgba(255,255,255,.4);
  box-shadow: inset 0px 1px 1px 0px rgba(255,255,255,.4);
  
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  
  
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
  
  background-image: -webkit-linear-gradient(bottom, #383838 0%, #444444 49%, #555 50%, #555 100%);
  background-image: -moz-linear-gradient(bottom, #383838 0%, #444444 49%, #555 50%, #555 100%);
  background-image: -ms-linear-gradient(bottom, #383838 0%, #444444 49%, #555 50%, #555 100%);
  background-image: -o-linear-gradient(bottom, #383838 0%, #444444 49%, #555 50%, #555 100%);
  background-image: linear-gradient(bottom, #383838 0%, #444444 49%, #555 50%, #555 100%);
}

a.button span.text {
  position: absolute;
  top: 16px;
  left: 65px;
  font: 15px Arial;
}

a.button span.shine {
  content: '';
  position: absolute;
  height: 400px;
  width: 20px;
  background: white;
  top: -80px;
  left: -20px;
  display: block;
  opacity: 0.8;
  
  -webkit-box-shadow: 0px 0px 20px 10px white; 
  -moz-box-shadow: 0px 0px 20px 10px white; 
  box-shadow: 0px 0px 20px 10px white; 
  
  -webkit-transform: rotate(-45deg);  
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

a.button:hover {
  -webkit-box-shadow: inset 0px 1px 10px 0px rgba(255,255,255,.4), 0px 3px 3px 0px rgba(0,0,0,0.4);
  -moz-box-shadow: inset 0px 1px 10px 0px rgba(255,255,255,.4), 0px 3px 3px 0px rgba(0,0,0,0.4);
  box-shadow: inset 0px 1px 10px 0px rgba(255,255,255,.4), 0px 3px 3px 0px rgba(0,0,0,0.4);
}

a.button:active {
  -webkit-box-shadow: inset 0px 1px 15px 0px rgba(0,0,0,.4), inset 0px 1px 1px 1px rgba(0,0,0,.2), 0px 1px 1px 0 rgba(255,255,255,.5);
  -moz-box-shadow: inset 0px 1px 15px 0px rgba(0,0,0,.4), inset 0px 1px 1px 1px rgba(0,0,0,.2), 0px 1px 1px 0 rgba(255,255,255,.5);
  box-shadow: inset 0px 1px 15px 0px rgba(0,0,0,.4), inset 0px 1px 1px 1px rgba(0,0,0,.2), 0px 1px 1px 0 rgba(255,255,255,.5);
}

a.button:hover span.shine {
  left: 170px;
  top: -300px;
}
  </style>
  <link rel="stylesheet" href="assets/bs/css/style.css" />
  <script type='text/javascript' src='assets/bs/js/jquery.particleground.js'></script>
  <script type='text/javascript' src='assets/bs/js/signup.js'></script>
  <script type='text/javascript' src='assets/bs/js/demo.js'></script>
</head>

<body style="overflow: auto;">

<div id="particles"></div>
  <div id="intro"  style=" position: initial; margin-top: -651.5px;">

<div class="container">
</br></br></br>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="uploads/shr.jpg" style="height:300px; width:300px; border-radius:180px;">
      <div class="caption">
        <h3>Shruti Kumari</h3>
        <p>13/IT/12</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="uploads/man.jpg" style="height:300px; width:300px; border-radius:180px;">
      <div class="caption">
        <h3>Dasiga Manaswini</h3>
        <p>13/IT/31</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="uploads/surya.jpg" style="height:300px; width:300px; border-radius:180px;">
      <div class="caption">
        <h3>Surya Kant Singh</h3>
        <p>13/IT/49</p>
      </div>
    </div>
  </div>
</div>

</div>
  </div>
<a href="index.php" class="button">
  <span class="shine"></span>
  <span class="text">Back To Home</span>
</a>
</body>
<script src="assets/bs/js/googleapis.js"/>

</html>
