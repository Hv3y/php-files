<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action=""method="POST">
<p>This is a game where the computer will pick a randon number and you will enter a number.
If the number you have entered is the same as the one the computer hass entered, you win, but
if the numbers are different, you lose.</p>
Guess a number between 1 and 10:
<input type="text" name="number_entered"value=""/>
<input type="submit"name="submit"value="search"/>
<br><br>
</form>


<?php


$number=$_POST['number_entered'];
$submit=$_POST['submit'];
$random=mt_rand(1,10);
?>


<?php
if($submit){
	if(($number>0)&&($number<11)){
		if($number !=$random)
		{
			echo"Incorrect guess. The correct number was " . $random ." try again";
		}
		else{
			echo $random. " is the correct guess. you got it right";
		}
		if($random>10){
			echo "This number is above 10";
		}
	}
}

?>

