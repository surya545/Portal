<?php include("connection.php") ?>
<?php
if (isset($_POST['submit'])) {
	$query = mysql_query("insert into notice(notice) values ('$_POST[Editor1]');");
}
?>