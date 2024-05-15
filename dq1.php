<?php

$link=mysqli_connect("localhost", "root","");
	$sql="CREATE DATABASE q1";
	if(mysqli_query($link,$sql)){
	echo"Database created ";
}
	else{echo"Database not created ";}
	$link=mysqli_connect("localhost","root","","q1");
	if($link==false){
	die("Error: Could not connect ");
}
	else{echo "connected sucessfully";
}
$sql="CREATE TABLE `q1`.`students` (
    enrollment_number VARCHAR(20) UNIQUE PRIMARY KEY,
    name VARCHAR(50),
    birth_date DATE,
    contact_number VARCHAR(15),
    email VARCHAR(100))";
	if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully ";}
else {echo "ERROR COULD NOT CREATE A TABLE ";}


?>