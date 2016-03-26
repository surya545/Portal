<!DOCTYPE HTML>
<?php
session_start();
if (isset($_SESSION['student'])) {
?>
<?php
include("include/connection.php");
include("include/navstud.php");
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

  <link rel="stylesheet" href="assets/bs/css/style.css" />
  <script type='text/javascript' src='assets/bs/js/jquery.particleground.js'></script>
  <script type='text/javascript' src='assets/bs/js/demo.js'></script>
  <style type="text/css">
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
	border-top: 0px solid #fff
}

  </style>
</head>
<body style="overflow: auto;">
<div id="particles"></div>
  <div id="intro" style=" position: initial; margin-top: -651.5px;">

<div class="container" style="text-align: left; ">
	<div class="panel panel-default"  style="opacity:0.9;">
  <!-- Default panel contents -->
  <div class="panel-heading">Student Information
                <a href="edit_detail.php">
                <button type="button"  title="Edit Details"  class="btn btn-info btn-sm" style="padding: 2px 5px; float:right;">
                  <span  class="glyphicon glyphicon-pencil"aria-hidden="true"></span>
                </a>
  </div>
  <div class="panel-body">
  	<div class="row">
  <div class="col-sm-6 col-md-8">
  	<ul class="list-group">
  		<div class="table-responsive">          
  <table class="table">
    <?php 
    $id = $_SESSION['id'];
    $res= mysql_query("Select * from students where id= $id;");
    while ($data=mysql_fetch_assoc($res)) {
    ?>
    <tbody>
      <tr>
        <td>Name</td>
        <td><?php echo $data['firstname'].' '.$data['lastname']; ?></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><?php echo $data['dob']; ?></td>
      </tr>
      <tr>
        <td>Fathers Name</td>
        <td><?php echo $data['father']; ?></td>
      </tr>
      <tr>
        <td>Roll No.</td>
        <td><?php echo $data['roll']; ?></td>
        <td>Branch</td>
        <td><?php echo $data['branch']; ?></td>
      </tr>
      <tr>
        <td>Height</td>
        <td><?php echo $data['height']; ?></td>
        <td>Weight</td>
        <td><?php echo $data['weight']; ?></td>
      </tr>
      <tr>
        <td>Power of Glasses</td>
        <td>Left</td>
        <td><?php echo $data['lefteye']; ?></td>
        <td>Right</td>
        <td><?php echo $data['righteye']; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  	</ul>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="uploads/<?php echo $data['photo']; ?>" style="height:200px;width:200px;">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-12">
  	<ul class="list-group">
  		<div class="table-responsive">          
  <table class="table">
    <tbody>
      <tr>
        <td>Present Address</td>
        <td><?php echo $data['paddress']; ?></td>
      </tr>
      <tr>
        <td>Address for Correspondence</td>
        <td><?php echo $data['caddress']; ?></td>
      </tr>
      <tr>
        <td>E-Mail Id</td>
        <td><?php echo $data['email']; ?></td>
        <td>Cel No.</td>
        <td><?php echo $data['phone']; ?></td>
      </tr>
      <tr>
        <td><strong>Educational Qualification</strong></td>
      </tr>
      <tr>

        <td><strong>Secondary & Higher Secondary</strong></td>
      	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Examination</th>
        <th>Board/Institution</th>
        <th>Year of Passing</th>
        <th>Obtained Marks</th>
        <th>Out of (Total marks)</th>
        <th>Percentage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $data['tenboard']; ?></td>
        <td><?php echo $data['tenschool']; ?></td>
        <td><?php echo $data['tenyear']; ?></td>
        <td><?php echo $data['tenmarks']; ?></td>
        <td><?php echo $data['tenfull']; ?></td>
        <td><?php echo $data['tenpercent']; ?></td>
      </tr>
      <tr>
        <td><?php echo $data['tweboard']; ?></td>
        <td><?php echo $data['tweschool']; ?></td>
        <td><?php echo $data['tweyear']; ?></td>
        <td><?php echo $data['twemarks']; ?></td>
        <td><?php echo $data['twefull']; ?></td>
        <td><?php echo $data['twepercent']; ?></td>
      </tr>
    </tbody>
  </table>
      </tr>
      <tr>

        <td><strong>Under Graduation</strong></td>
      	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Semester</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SGPA</td>
        <td><?php echo $data['firstsgpa']; ?></td>
        <td><?php echo $data['secondsgpa']; ?></td>
        <td><?php echo $data['thirdsgpa']; ?></td>
        <td><?php echo $data['fourthsgpa']; ?></td>
        <td><?php echo $data['fifthsgpa']; ?></td>
      </tr>
      <tr>
        <td>CGPA</td>
        <td><?php echo $data['firstcgpa']; ?></td>
        <td><?php echo $data['secondcgpa']; ?></td>
        <td><?php echo $data['thirdcgpa']; ?></td>
        <td><?php echo $data['fourthcgpa']; ?></td>
        <td><?php echo $data['fifthcgpa']; ?></td>
      </tr>
    </tbody>
  </table>
      </tr>
    </tbody>
  </table>        
  <table class="table">
    <tbody>
      <tr>
        <td>Scholastic Achivements: </td>
        <td><?php echo $data['schoolachiv']?></td>
      </tr>
      <tr>
        <td>Academic Project: </td>
        <td><?php echo $data['projects']?></td>
      </tr>
      <tr>
        <td>Practical Training: </td>
        <td><?php echo $data['training']?></td>
      </tr>
      <tr>
        <td>Skills and Capabilities: </td>
        <td><?php echo $data['skill']?></td>
      </tr>
      <tr>
        <td>Position and Responsibility: </td>
        <td><?php echo $data['responsibility']?></td>
      </tr>

    </tbody>
  </table>
  <hr/>

  <table class="table">
    <tbody>
      <tr>
        <td>Other Details: </td>
      </tr>
      <tr>
        <td>Mothers Name: </td>
        <td><?php echo $data['mother']?></td>
      </tr>
      <tr>
        <td>Registration Number: </td>
        <td><?php echo $data['reg']?></td>
      </tr>
      <tr>
        <td>Hobbies: </td>
        <td><?php echo $data['hobbies']?></td>
      </tr>
      <tr>
        <td>Age: </td>
        <td><?php echo $data['age']?></td>
      </tr>
      <tr>
        <td>Gender: </td>
        <td><?php echo $data['gender']?></td>
      </tr>
      <tr>
        <td>Day Scholar: </td>
        <td><?php echo $data['dayscholar']?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>
  </div>
  	</ul>
  </div>
</div>
  </div>
</div>
</div>
</div>
</body>
</html>
<?php
}
else{
	header("Location: index.php");
}
?>
