<?php include("connection.php") ?>

<?php
session_start();
if(isset($_POST['Submit'])){
	 $result = mysql_query("select * from admin where name = '$_POST[email]' and pass='$_POST[pass]';");
	$row = mysql_fetch_array($result);
	$row11 = mysql_num_rows($result);
	if($row11 > 0) {
		 $_SESSION["usr"] = $row['name'];
		header("Location: ../admin.php");
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
