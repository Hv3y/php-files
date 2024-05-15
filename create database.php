<?php
$link=mysqli_connect("localhost", "root","");
$sql="CREATE DATABASE AD";
if(mysqli_query($link,$sql)){
	echo"Database created";
}
else{echo"Database not created";}
$link=mysqli_connect("localhost","root","","AD");
#check connection
if($link==false){
die("Error: Could not connect");
}
else{echo "connected sucessfully";
}
$sql="CREATE TABLE `AD`.`INFO` (`id` INT(13) NOT NULL AUTO_INCREMENT ,
 `houseno` INT(9) NOT NULL ,
 `street` TEXT(55) NOT NULL , 
 `Adress` VARCHAR(90) NOT NULL ,
 PRIMARY KEY (`id`))";
 
if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully";}
else {echo "ERROR COULD NOT CREATE A TABLE";}
?>