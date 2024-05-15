<?php


$link=mysqli_connect("localhost","root","","reg");
if($link==false){
die("Error: Could not connect");
}
	$username=mysqli_real_escape_string($link,$_REQUEST['username']);
	$password=mysqli_real_escape_string($link, $_REQUEST['password']);
	$email=mysqli_real_escape_string($link, $_REQUEST['email']);
	$sql="INSERT INTO `reg`.`Users` (`username`,`password`,`email`)
	values('$username','$password','$email')";
	if(mysqli_query($link,$sql))
	{echo "Record inserted";}
	else{echo "Record not  inserted";
	}
	
	?>