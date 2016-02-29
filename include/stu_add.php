<?php include("connection.php") ?>
<?php
 $query = mysql_query("select * from student where id='".$_GET['id']."'");
while($result = mysql_fetch_assoc($query)){
 $id=$result['id'];
 $name=$result['name'];
 $roll=$result['roll'];
 $email=$result['email'];
 $sem=$result['sem'];
 $father=$result['father'];
 $mother=$result['mother'];
}
 	$query1 = mysql_query("INSERT INTO `students`(`id`, `name`, `roll`, `email`, `sem`, `father`, `mother`) VALUES ($id,'$name','$roll','$email','$sem','$father','$mother')");
 	if($query1){
 		 $query = mysql_query("delete from student where id='".$_GET['id']."'");
 	}
      if($query)
      {
        header("location:../admin.php");
      }
?>