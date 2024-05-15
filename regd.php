<?php

$link=mysqli_connect("localhost", "root","");
	$sql="CREATE DATABASE reg";
	if(mysqli_query($link,$sql)){
	echo"Database created ";
}
	else{echo"Database not created ";}
	$link=mysqli_connect("localhost","root","","reg");
	if($link==false){
	die("Error: Could not connect ");
}
	else{echo "connected sucessfully";
}
$sql="CREATE TABLE `reg`.`Users` (
    Username VARCHAR(50),
    email VARCHAR(100),
    Password VARCHAR(50) PRIMARY KEY,
	image BLOB ,
	video BLOB ,
	message VARCHAR(1000))";
	if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully ";}
else {echo "ERROR COULD NOT CREATE A TABLE ";}


?>