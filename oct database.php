<?php
	$link=mysqli_connect("localhost", "root","");
	$sql="CREATE DATABASE online";
	if(mysqli_query($link,$sql)){
	echo"Database created ";
}
	else{echo"Database not created ";}
	$link=mysqli_connect("localhost","root","","online");
	if($link==false){
	die("Error: Could not connect ");
}
	else{echo "connected sucessfully";
}
	$sql="CREATE TABLE `online`.`DETAILS` (`Name` TEXT(90) NOT NULL ,
 `ID` INT(13) NOT NULL ,
 `Email` VARCHAR(55) NOT NULL , 
 PRIMARY KEY (`ID`))";
 
if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully ";}
else {echo "ERROR COULD NOT CREATE A TABLE ";}
?>