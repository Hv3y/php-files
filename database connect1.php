<?php
$link=mysqli_connect("localhost","root","","customer");
#check connection
if($link==false){
die("Error: Could not connect");
}
else{echo "connected sucessfully";
}
$sql="CREATE TABLE `customer`.`lane` (`id` INT(13) NOT NULL AUTO_INCREMENT ,
 `name` TEXT NOT NULL ,
 `last` TEXT NOT NULL , 
 `email` VARCHAR(90) NOT NULL ,
 PRIMARY KEY (`id`))";
 
if (mysqli_query($link,$sql))
	
{ echo "Table created sucessfully";}
else {echo "ERROR COULD NOT CREATE A TABLE";}
?>

