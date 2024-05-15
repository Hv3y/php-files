	<form method="POST" action="insertform.php">
	<table>
	<tr><td>Name: </td><td><input type="text" name="Name"></td></tr>
	<tr><br><br></tr>
	<tr><td>Studentnumber:</td><td><input type="text" name="Studentnumber"></td></tr>
	<tr><br><br></tr>
	<tr><td>Email:</td><td><input type="text" name="Email"></td></tr>
	<tr><br><br></tr>
	<tr><td><input type="submit" name="Register" value="Register"></td></tr>
	</table>
	</form>
	<?php
	$link=mysqli_connect("localhost", "root","");
	$sql="CREATE DATABASE SOW";
	if(mysqli_query($link,$sql)){
	echo"Database created";
}
	else{echo"Database not created";}
	$link=mysqli_connect("localhost","root","","SOW");
	if($link==false){
	die("Error: Could not connect");
}
	else{echo "connected sucessfully";
}
	$sql="CREATE TABLE `SOW`.`DETAILS` (`Name` TEXT(90) NOT NULL ,
 `Studentnumber` INT(9) NOT NULL ,
 `Email` VARCHAR(55) NOT NULL , 
 PRIMARY KEY (`Studentnumber`))";
 
if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully";}
else {echo "ERROR COULD NOT CREATE A TABLE";}

	$link=mysqli_connect("localhost","root","","SOW");
	$name=mysqli_real_escape_string($link,$_REQUEST['Name']);
	$student=mysqli_real_escape_string($link,$_REQUEST['Studentnumber']);
	$email=mysqli_real_escape_string($linl, $REQUEST['Email']);
	$sql="INSERT INTO DETAILS(`Name`,`Studentnumber`,`Email`)
	values('$name','$student','$email')";
	if(mysqli_query($link,$sql))
	{echo "Record inserted";}
	else{echo "Record not  inserted";
	}
	?>
