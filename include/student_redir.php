<?php include("connection.php") ?>

<?php
session_start();
if(isset($_POST['submit'])){
	 $result = mysql_query("select * from students where email = '$_POST[email]' and password='$_POST[pass]';");
	$row = mysql_fetch_array($result);
	$row11 = mysql_num_rows($result);
	if($row11 > 0) {
		 $_SESSION["student"] = $row['firstname'];
		 $_SESSION["id"] = $row['id'];
		header("Location: ../student.php");
	}
	else { 
		$_SESSION['message']= "Invalid Username or Password";
		?>
		<script>
		alert("Invalid Username or Password");
		window.location.href="../index.php";
		</script>
		<?php

}

}
else {
header("Location: ../index.php");
}
?>
