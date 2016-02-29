<?php
$conn = mysql_connect("localhost", "root", "");
if(!$conn) {
	die("Connection to database failed : ".mysql_connect_error());
}
$db = mysql_select_db("portal");
?>
