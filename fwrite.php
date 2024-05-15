<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<br></br>
Surname: <input type="text" name="surname">
<br></br>
Age demographic:
<input type="radio" name="age" value="<18">under 18
<input type="radio" name="age" value=">18">Over 18
<br></br>
Message: <textarea name="message"></textarea>
<br></br>
Diet:
<select name="diet">
<option>Halal</option>
<option>Non</option>
<option>no dairy</option>
<option>Vegan</option>
</select>
<br></br>
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$dem=$_POST["age"];
	$mes=$_POST["message"];
	$diet=$_POST["diet"];
	
	$con="Name: $name
		  Surname: $surname
		  Demographic: $dem
		  message: $mes
		  Diet: $diet";
$file=fopen("form.txt","a");

if($file){
	fwrite($file,$con);
	
	fclose($file);
echo" Data written";
}
else{
	echo "error";


}
$text=file_get_contents('form.txt');
echo $text;
}

?>


</body>
</html>