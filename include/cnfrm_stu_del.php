<?php include("connection.php") ?>
<?php
 $query = mysql_query("delete from students where id='".$_GET['id']."'");
      if($query)
      {
        header("location:../admin.php");
      }
?>