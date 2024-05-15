<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method ="POST" action="">
<p><input type="num1" name="num1"> Enter number</p>
<input type="submit" name="multiply" value="nom">



<?php

$num1= $_POST['num1'];
#echo "sum of ", $num1, "is", "<br>" ;
$sum=0;//1
for ($no = 1; $no <=$num1; $no++){#no 2
	$sum =$sum+$no;
	echo $sum ."<br>";
	#echo $num1, "+" , $no , "=", $num1 + $no, "<br>" ;
}	
	
?>