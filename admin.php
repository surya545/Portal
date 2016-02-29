<!DOCTYPE HTML>
<?php
session_start();
if (isset($_SESSION['usr'])) {
?>
<?php
include("include/connection.php");
include("include/modals.php");
include("include/nav.php");
include("include/insert_notice.php");
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
  <style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        border-top: 0px;
  }
  </style>
  <style>
.table-fixed tbody {
  height: 365px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
  </style>
</head>
<?php

require_once "assets/texteditor/richtexteditor/include_rte.php";
?>
<body>

<div id="particles"></div>
  <div id="intro">
<div class="container">
  <ul class="nav nav-tabs" >
    <li class="active"><a data-toggle="tab" href="#home">New Request</a></li>
    <li><a data-toggle="tab" href="#menu1">Update Notice</a></li>
    <li><a data-toggle="tab" href="#menu2">Validated Students</a></li>
  </ul>
  <div class="tab-content"  style="opacity:0.9">
    <div id="home" class="tab-pane fade in active">
       <div class="row" style="margin-left:0px; margin-right:0px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
            New Request
          </h4>
        </div>
        <table class="table table-fixed table-hover">
          <tbody  style="text-align:left;">
                  <?php
      $query = mysql_query("select * from student;");
      while($result = mysql_fetch_assoc($query)){
        ?>
            <tr>
              <td class="col-xs-3"><?php echo $result['name'] ?></td>
              <td class="col-xs-3"><?php echo $result['email'] ?></td>
              <td class="col-xs-2"><?php echo $result['sem'] ?></td>
              <td class="col-xs-2"><?php echo $result['roll'] ?></td>
              <td class="col-xs-2">
                <button type="button"  class="open-AddBookDialog btn btn-info btn-sm" style="padding: 2px 5px;" a data-toggle="modal" href="#myModaldet<?php echo $result['id'] ?>">
                  <span  class="glyphicon glyphicon-eye-open"aria-hidden="true"></span>
                </button>
                          <!-- Student Detail -->
                          <div class="modal fade" id="myModaldet<?php echo $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog  modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Detail</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Student Detail</div>
                            <?php echo $result['id'] ?></br>
                            <?php echo $result['name'] ?></br>
                            <?php echo $result['email'] ?></br>
                            <?php echo $result['father'] ?></br>
                            <?php echo $result['mother'] ?></br>
                          </div>
                                </div>
                              </div>
                            </div>
                          </div>
                <a href="include/stu_add.php?id=<?php echo $result['id'] ?>">
                <button type="button"  class="btn btn-success btn-sm" style="padding: 2px 5px;">
                  <span  aria-hidden="true">&#x2714;</span>
                </button>
              </a>
                <a href="include/stu_del.php?id=<?php echo $result['id'] ?>">
                <button type="button"  class="btn btn-danger btn-sm" style="padding: 2px 5px;">
                  <span  aria-hidden="true">&#x2718;</span>
                </button>
              </a>
              </td>
            </tr>
            <?php 
          }
          ?>
          </tbody>
        </table>
      </div>
  </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="panel panel-info">
    <div class="panel-heading">
    <h3 class="panel-title">New Notice</h3>
    </div>
    <div class="panel-body">
      <form action="admin.php" method="POST">

                          <?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                                $rte=new RichTextEditor();   
                                  $rte->Text="Type here"; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor1";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                          ?>
        <input type="submit" name="submit" value="Submit"class="btn btn-primary" style="float: right;"></input>
        </form>
  </div>
    </div>
  </div> 
   <div id="menu2" class="tab-pane fade">
       <div class="row" style="margin-left:0px; margin-right:0px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
            New Request
          </h4>
        </div>
        <table class="table table-fixed table-hover">
          <tbody  style="text-align:left;">
                  <?php
      $query = mysql_query("select * from students;");
      while($result = mysql_fetch_assoc($query)){
        ?>
            <tr>
              <td class="col-xs-3"><?php echo $result['name'] ?></td>
              <td class="col-xs-3"><?php echo $result['email'] ?></td>
              <td class="col-xs-2"><?php echo $result['sem'] ?></td>
              <td class="col-xs-2"><?php echo $result['roll'] ?></td>
              <td class="col-xs-2">
                <button type="button"  class="open-AddBookDialog btn btn-info btn-sm" style="padding: 2px 5px;" a data-toggle="modal" href="#myModaldet<?php echo $result['id'] ?>">
                  <span  class="glyphicon glyphicon-eye-open"aria-hidden="true"></span>
                </button>
                          <!-- Student Detail -->
                          <div class="modal fade" id="myModaldet<?php echo $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog  modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Detail</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Student Detail</div>
                            <?php echo $result['id'] ?></br>
                            <?php echo $result['name'] ?></br>
                            <?php echo $result['email'] ?></br>
                            <?php echo $result['father'] ?></br>
                            <?php echo $result['mother'] ?></br>
                          </div>
                                </div>
                              </div>
                            </div>
                          </div>
                <a href="include/cnfrm_stu_del.php?id=<?php echo $result['id'] ?>">
                <button type="button"  class="btn btn-danger btn-sm" style="padding: 2px 5px;">
                  <span  aria-hidden="true">&#x2718;</span>
                </button>
              </a>
              </td>
            </tr>
            <?php 
          }
          ?>
          </tbody>
        </table>
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
