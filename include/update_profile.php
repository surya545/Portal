<?php include("connection.php") ?>

<?php
session_start();
if(isset($_POST['submit'])){
	$query=mysql_query("update students SET height = '$_POST[height]', weight = '$_POST[weight]',lefteye='$_POST[lefteye]',righteye='$_POST[righteye]',caddress='$_POST[caddress]',email='$_POST[email]', phone='$_POST[phone]', firstsgpa='$_POST[firstsgpa]', secondsgpa='$_POST[secondsgpa]', thirdsgpa='$_POST[thirdsgpa]', fourthsgpa='$_POST[fourthsgpa]', fifthsgpa='$_POST[fifthsgpa]', sixthsgpa='$_POST[sixthsgpa]', seventhsgpa='$_POST[seventhsgpa]', eighthsgpa='$_POST[eighthsgpa]', firstcgpa='$_POST[firstcgpa]', secondcgpa='$_POST[secondcgpa]', thirdcgpa='$_POST[thirdcgpa]', fourthcgpa='$_POST[fourthcgpa]', fifthcgpa='$_POST[fifthcgpa]', sixthcgpa='$_POST[sixthcgpa]', seventhcgpa='$_POST[seventhcgpa]', eighthcgpa='$_POST[eighthcgpa]',schoolachiv='$_POST[schoolachiv]', projects='$_POST[Editor1]', training='$_POST[training]',skill='$_POST[skill]',responsibility='$_POST[responsibility]',hobbies='$_POST[hobbies]' where id='$_SESSION[id]';");
	header("Location: ../student.php");
	}
else { 
	header("Location: ../edit_detail.php");
	}
?>
