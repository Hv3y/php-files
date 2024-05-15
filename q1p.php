<?php


$link=mysqli_connect("localhost","root","","q1");
if($link==false){
die("Error: Could not connect");
}
$enrollment_number=mysqli_real_escape_string($link,$_REQUEST['enrollment_number']);
	$name=mysqli_real_escape_string($link,$_REQUEST['name']);
	$birth_date=mysqli_real_escape_string($link, $_REQUEST['birth_date']);
	$contact_number=mysqli_real_escape_string($link, $_REQUEST['contact_number']);
	$email=mysqli_real_escape_string($link, $_REQUEST['email']);
	$sql="INSERT INTO `q1`.`students` (`enrollment_number`,`name`,`birth_date`,`contact_number`,`email`)
	values('$enrollment_number','$name','$birth_date','$contact_number','$email')";
	if(mysqli_query($link,$sql))
	{echo "Record inserted";}
	else{echo "Record not  inserted";
	}
	$sql="SELECT * FROM students WHERE enrollment_number='$enrollment_number'";
	if (mysqli_query($link,$sql)){
	echo "Enrolment number already exists";}
	else{echo "record inserted";
	}
	
	
	
?>