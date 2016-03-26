<?php include("connection.php") ?>
<?php
 $query = mysql_query("select * from student where id='".$_GET['id']."'");
while($result = mysql_fetch_assoc($query)){
 $id=$result['id'];
 $firstname=$result['firstname'];
 $lastname=$result['lastname'];
 $father=$result['father'];
 $mother=$result['mother'];
 $roll=$result['roll'];
 $reg=$result['reg'];
 $branch=$result['branch'];
 $height=$result['height'];
 $weight=$result['weight'];
 $righteye=$result['righteye'];
 $lefteye=$result['lefteye'];
 $paddress=$result['paddress'];
 $caddress=$result['caddress'];
 $email=$result['email'];
 $phone=$result['phone'];
 $tenboard=$result['tenboard'];
 $tenyear=$result['tenyear'];
 $tenschool=$result['tenschool'];
 $tenmarks=$result['tenmarks'];
 $tenfull=$result['tenfull'];
 $tenpercent=$result['tenpercent'];
 $tenboard=$result['tweboard'];
 $tenyear=$result['tweyear'];
 $tenschool=$result['tweschool'];
 $tenmarks=$result['twemarks'];
 $tenfull=$result['twefull'];
 $tenpercent=$result['twepercent'];
 $firstsgpa=$result['firstsgpa'];
 $secondsgpa=$result['secondsgpa'];
 $thirdsgpa=$result['thirdsgpa'];
 $fourthsgpa=$result['fourthsgpa'];
 $fifthsgpa=$result['fifthsgpa'];
 $sixthsgpa=$result['sixthsgpa'];
 $seventhsgpa=$result['seventhsgpa'];
 $eighthsgpa=$result['eighthsgpa'];
 $firstcgpa=$result['firstcgpa'];
 $secondcgpa=$result['secondcgpa'];
 $thirdcgpa=$result['thirdcgpa'];
 $fourthcgpa=$result['fourthcgpa'];
 $fifthcgpa=$result['fifthcgpa'];
 $sixthcgpa=$result['sixthcgpa'];
 $seventhcgpa=$result['seventhcgpa'];
 $eighthcgpa=$result['eighthcgpa'];
 $photo=$result['photo'];
 $password=$result['password'];
 $dob=$result['dob'];
 $dayscholar=$result['dayscholar'];
 $gender=$result['gender'];


}
	echo "INSERT INTO `students`(`firstname`, `lastname`, `father`, `mother`, `roll`, `yearofjoining`, `reg`, `branch`, `height`,`weight`, `righteye`, `lefteye`, `paddress`, `caddress`, `email`, `phone`, `tenboard`, `tenyear`, `tenschool`, `tenmarks`, `tenfull`, `tenpercent`, `tweboard`, `tweyear`, `tweschool`, `twemarks`, `twefull`, `twepercent`, `firstsgpa`, `secondsgpa`, `thirdsgpa`, `fourthsgpa`, `fifthsgpa`, `sixthsgpa`, `seventhsgpa`, `eighthsgpa`, `firstcgpa`, `secondcgpa`, `thirdcgpa`, `fourthcgpa`, `fifthcgpa`, `sixthcgpa`, `seventhcgpa`, `eighthcgpa`, `photo`, `password`, `dob`, `dayscholar`, `gender`) VALUES ('$firstname','$lastname','$father','$mother','$roll','$yearofjoining','$reg','$branch','$height','$weight','$righteye','$lefteye','$paddress','$caddress','$email','$phone','$tenboard','$tenyear','$tenschool','$tenmarks','$tenfull','$tenpercent','$tweboard','$tweyear','$tweschool','$twemarks','$twefull','$twepercent','$firstsgpa','$secondsgpa','$thirdsgpa','$fourthsgpa','$fifthsgpa','$sixthsgpa','$seventhsgpa','$eighthsgpa','$firstcgpa','$secondcgpa','$thirdcgpa','$fourthcgpa','$fifthcgpa','$sixthcgpa','$seventhcgpa','$eighthcgpa','$photo','$password','$dob','$dayscholar','$gender')";
	
 	$query1 = mysql_query("INSERT INTO `students`(`firstname`, `lastname`, `father`, `mother`, `roll`, `yearofjoining`, `reg`, `branch`, `height`,`weight`, `righteye`, `lefteye`, `paddress`, `caddress`, `email`, `phone`, `tenboard`, `tenyear`, `tenschool`, `tenmarks`, `tenfull`, `tenpercent`, `tweboard`, `tweyear`, `tweschool`, `twemarks`, `twefull`, `twepercent`, `firstsgpa`, `secondsgpa`, `thirdsgpa`, `fourthsgpa`, `fifthsgpa`, `sixthsgpa`, `seventhsgpa`, `eighthsgpa`, `firstcgpa`, `secondcgpa`, `thirdcgpa`, `fourthcgpa`, `fifthcgpa`, `sixthcgpa`, `seventhcgpa`, `eighthcgpa`, `photo`, `password`, `dob`, `dayscholar`, `gender`) VALUES ('$firstname','$lastname','$father','$mother','$roll','$yearofjoining','$reg','$branch','$height','$weight','$righteye','$lefteye','$paddress','$caddress','$email','$phone','$tenboard','$tenyear','$tenschool','$tenmarks','$tenfull','$tenpercent','$tweboard','$tweyear','$tweschool','$twemarks','$twefull','$twepercent','$firstsgpa','$secondsgpa','$thirdsgpa','$fourthsgpa','$fifthsgpa','$sixthsgpa','$seventhsgpa','$eighthsgpa','$firstcgpa','$secondcgpa','$thirdcgpa','$fourthcgpa','$fifthcgpa','$sixthcgpa','$seventhcgpa','$eighthcgpa','$photo','$password','$dob','$dayscholar','$gender')");
 	if($query1){
 		 $query = mysql_query("delete from student where id='".$_GET['id']."'");
 	}
      if($query)
      {
        header("location:../admin.php");
      }
?>