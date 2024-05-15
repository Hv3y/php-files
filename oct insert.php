<?php
$link=mysqli_connect("localhost","root","","online");
$name=mysqli_real_escape_string($link,$_REQUEST['Name']);
	$id=mysqli_real_escape_string($link,$_REQUEST['ID']);
	$email=mysqli_real_escape_string($link, $_REQUEST['Email']);
	$sql="INSERT INTO `details` (`Name`,`ID`,`Email`)
	values('$name','$id','$email')";
	if(mysqli_query($link,$sql))
	{echo "Record inserted";}
	else{echo "Record not  inserted";
	}
	?>
