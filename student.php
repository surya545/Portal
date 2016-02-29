<!DOCTYPE HTML>
<?php
session_start();
if (isset($_SESSION['student'])) {
?>
<?php
include("include/connection.php");
include("include/modals.php");
include("include/nav.php");
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
<link rel="stylesheet" type="text/css" href="assets/date/daterangepicker.css" />
  <style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        border-top: 0px;
  }
  </style>
</head>
<body>
hey there
</body>
</html>
<?php
}
else{
	header("Location: index.php");
}
?>
