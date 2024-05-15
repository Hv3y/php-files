<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method ="POST" action="">
<p><input type="num1" name="num1"> Enter number</p>
<input type="submit" name="roll" value="nom">
<?php
$num1=$_POST['num1'];
if($num1==0){
print("This is a green pocket");
}
elseif($num1>1 and $num1<=10 );
if($num1 %2==0){
print("even number" );}

	else{print("odd number");}
	

?>