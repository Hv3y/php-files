<?php
$link=mysqli_connect("localhost","root","","SOW");
$name=mysqli_real_escape_string($link,$_REQUEST['Name']);
	$student=mysqli_real_escape_string($link,$_REQUEST['Studentnumber']);
	$email=mysqli_real_escape_string($link, $_REQUEST['Email']);
	$sql="INSERT INTO `details` (`Name`,`Studentnumber`,`Email`)
	values('$name','$student','$email')";
	if(mysqli_query($link,$sql))
	{echo "Record inserted";}
	else{echo "Record not  inserted";
	}
	?>
