<?php
$link=mysqli_connect("localhost", "root","");
$sql="CREATE DATABASE wave";
if(mysqli_query($link,$sql)){
	echo"Database created";
}
else{echo"Database not created";}
$link=mysqli_connect("localhost","root","","wave");
#check connection
if($link==false){
die("Error: Could not connect");
}
else{echo "connected sucessfully";
}
?>