<!DOCTYPE HTML>
<?php
session_start();
if (isset($_SESSION['usr'])) {
include("include/nav.php");
}
elseif (isset($_SESSION['student'])) {
  include("include/navstud.php");
}
else{
include("include/navbar.php");
}
?>
<?php
include("include/connection.php");
include("include/modals.php");
?>

<html>
<title>Student Portal | Home</title>
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
<div class="row">
  <div class="col-lg-6">
<div id="demo" class="skdslider">
<ul>
<li>
  <img src="assets/images/1.jpg" > 
<div class="slide-desc">
<h2>NIT Durgapur</h2>
<p>NIT Durgapur</p>
</div>
</li>
<li><img src="assets/images/2.jpg" />
<div class="slide-desc">
<h2>NIT Durgapur</h2>
<p>Academic Building</p>
</div>
</li>
</ul>
</div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <div class="panel panel-info">
    <div class="panel-heading">
    <h3 class="panel-title">Student Notice Board</h3>
    </div>
    <div class="panel-body">
    <marquee behavior="scroll" direction="up" scrolldelay="300" style="height:200px;">
      <?php
      $query = mysql_query("select * from notice;");
      while($result = mysql_fetch_assoc($query)){
        echo "<p>".$result['notice']."</p>";
      }
      ?>
    </marquee>
    </div>
  </div>
  </div><!-- /.col-lg-6 -->
</div>
</div>
  </div>
</body>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('#demo').skdslider({
'delay':5000, // Delay duration between two slides in micro seconds. 
'fadeSpeed': 2000, // Fading Speed in micro seconds.
'showNav': true, // It will show/hide navigation icon.
'numericNav': false // If true, navigation will be numeric
});
});
</script>
<script type="text/javascript">
$(function() {
    $('input[name="birthdate"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
});
</script>
<script src="assets/bs/js/googleapis.js"/>

</html>
