<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" style="height:30px;"></a>
    </div>
    
    
    <ul class="nav navbar-nav navbar-left">
          <li><a href="student.php">Student Panel</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a><?php  echo $_SESSION['student']; ?></a></li>
          <li><a data-toggle="modal" href="include/logout.php" href="">Logout</a></li>
        </ul>
        </li>
  </div>
</nav>
