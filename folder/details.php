<?php
if(!isset($_POST['submit']))
{
	 $fname=$_POST['fname'];
	 $date=$_POST['date'];
	 $Address=$_POST['Address'];
	 $name=$_POST['name'];
	 $number=$_POST['number'];
	 $gender=$_POST['gender'];
	 $blood=$_POST['blood'];
	 $con= new mysqli('localhost:127.0.0.1','','','College');
	 $sql="INSERT INTO staff
	 (Name,Date of joining,Address,Department,Phone Number,Gender,Blood group)
	 VALUES ('$fname','$date','$Address','$name','$number','$gender','$blood')";
	 $result=mysqli_query($con,$sql);
	 if($result)
	 {
		 echo "sucessfull";
	 }
else{
	echo "fail";
}
}
?>