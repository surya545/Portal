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
  <form action="include/update_profile.php" method="POST" data-toggle="validator" role="form">
  <!-- Default panel contents -->
  <div class="panel-heading">Student Information
                <button type="submit" name="submit"  title="Submit"  class="btn btn-info btn-sm" style="padding: 2px 5px; float:right;">
                  <span  aria-hidden="true">&#x2714;</span>
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
        <td>First Name</td>
        <td><input disabled type="text" name="firstname" class="form-control" value="<?php echo $data['firstname'];?>"/></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><input disabled type="text" name="lastname" class="form-control" value="<?php echo $data['lastname']; ?>"/></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['dob']; ?>"/></td>
      </tr>
      <tr>
        <td>Fathers Name</td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['father']; ?>"/></td>
      </tr>
      <tr>
        <td>Roll No.</td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['roll']; ?>"/></td>
        <td>Branch</td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['branch']; ?>"/></td>
      </tr>
      <tr>
        <td>Height</td>
        <td><input type="text" name="height" class="form-control" value="<?php echo $data['height']; ?>"/></td>
        <td>Weight</td>
        <td><input type="text" name="weight" class="form-control" value="<?php echo $data['weight']; ?>"/</td>
      </tr>
      <tr>
        <td>Power of Glasses</td>
        <td>Left</td>
        <td><input type="text" name="lefteye" class="form-control" value="<?php echo $data['lefteye']; ?>"/></td>
        <td>Right</td>
        <td><input type="text" name="righteye" class="form-control" value="<?php echo $data['righteye']; ?>"/></td>
      </tr>
    </tbody>
  </table>
  </div>
  	</ul>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img  src="uploads/<?php echo $data['photo']; ?>" style="height:200px;width:200px;">
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
        <td><input disabled type="text" class="form-control" value="<?php echo $data['paddress']; ?>"/></td>
      </tr>
      <tr>
        <td>Address for Correspondence</td>
        <td><input type="text" class="form-control" name="caddress" value="<?php echo $data['caddress']; ?>"/></td>
      </tr>
      <tr>
        <td>E-Mail Id</td>
        <td><input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>"/></td>
        <td>Cel No.</td>
        <td><input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>"/></td>
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
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenboard']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenschool']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenyear']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenmarks']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenfull']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tenpercent']; ?>"/></td>
      </tr>
      <tr>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tweboard']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tweschool']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['tweyear']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['twemarks']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['twefull']; ?>"/></td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['twepercent']; ?>"/></td>
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
        <th>6</th>
        <th>7</th>
        <th>8</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SGPA</td>
        <td><input type="text" class="form-control" name="firstsgpa" value="<?php echo $data['firstsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="secondsgpa" value="<?php echo $data['secondsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="thirdsgpa" value="<?php echo $data['thirdsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="fourthsgpa" value="<?php echo $data['fourthsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="fifthsgpa" value="<?php echo $data['fifthsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="sixthsgpa" value="<?php echo $data['sixthsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="seventhsgpa" value="<?php echo $data['seventhsgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="eighthsgpa" value="<?php echo $data['eighthsgpa']; ?>"/></td>
      </tr>
      <tr>
        <td>CGPA</td>
        <td><input type="text" class="form-control" name="firstcgpa" value="<?php echo $data['firstcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="secondcgpa" value="<?php echo $data['secondcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="thirdcgpa" value="<?php echo $data['thirdcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="fourthcgpa" value="<?php echo $data['fourthcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="fifthcgpa" value="<?php echo $data['fifthcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="sixthcgpa" value="<?php echo $data['sixthcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="seventhcgpa" value="<?php echo $data['seventhcgpa']; ?>"/></td>
        <td><input type="text" class="form-control" name="eighthcgpa" value="<?php echo $data['eighthcgpa']; ?>"/></td>
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
        <td><input type="text" class="form-control" name="schoolachiv" value="<?php echo $data['schoolachiv']?>"/></td>
      </tr>
      <tr>
        <td>Project: </td>
        <td>
<?php

require_once "assets/texteditor/richtexteditor/include_rte.php";
?>

                          <?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                                $rte=new RichTextEditor();   
                                  $rte->Text=$data['projects']; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor1";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                          ?></td>
      </tr>
      <tr>
        <td>Practical Training: </td>
        <td><input type="text" name="training" class="form-control" value="<?php echo $data['training']?>"/></td>
      </tr>
      <tr>
        <td>Skills and Capabilities: </td>
        <td><input type="text" name="skill" class="form-control" value="<?php echo $data['skill']?>"/></td>
      </tr>
      <tr>
        <td>Position and Responsibility: </td>
        <td><input type="text" name="responsibility" class="form-control" value="<?php echo $data['responsibility']?>"/></td>
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
        <td><input disabled type="text" class="form-control" value="<?php echo $data['mother']?>"/></td>
      </tr>
      <tr>
        <td>Registration Number: </td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['reg']?>"/></td>
      </tr>
      <tr>
        <td>Hobbies: </td>
        <td><input type="text" class="form-control" name="hobbies" value="<?php echo $data['hobbies']?>"/></td>
      </tr>
      <tr>
        <td>Gender: </td>
        <td><input disabled type="text" class="form-control" value="<?php echo $data['gender']?>"/></td>
      </tr>
      <tr>
        <td>Day Scholar: </td>
        <td><input type="text" class="form-control" value="<?php echo $data['dayscholar']?>"/></td>
      </tr>
    </tbody>
  </table>
</form>
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
